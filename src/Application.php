<?php

/**
 * This file is part of the yannoff/console library
 *
 * (c) Yannoff (https://github.com/yannoff)
 *
 * @project   yannoff/console
 * @link      https://github.com/yannoff/console
 * @license   https://github.com/yannoff/console/blob/master/LICENSE
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yannoff\Component\Console;

use Yannoff\Component\Console\Command\HelpCommand;
use Yannoff\Component\Console\Command\VersionCommand;
use Yannoff\Component\Console\Exception\Command\UnknownCommandException;
use Yannoff\Component\Console\Exception\LogicException;
use Yannoff\Component\Console\IO\StreamAware;
use Yannoff\Component\Console\IO\Output\Formatter;
use Yannoff\Component\Console\IO\Output\FormatterAware;
use Yannoff\Component\Console\IO\Output\FormatterAwareTrait;
use Yannoff\Component\Console\IO\Output\FormatterFactory;

/**
 * Class Application
 *
 * @package Yannoff\Component\Console
 */
class Application extends StreamAware implements FormatterAware
{
    use FormatterAwareTrait;

    /**
     * Name used for the `help` command
     *
     * @var string
     */
    const COMMAND_HELP = 'help';

    /**
     * Name used for the `version` command
     *
     * @var string
     */
    const COMMAND_VERS = 'version';

    /**
     * The application name
     *
     * @var string
     */
    protected $name;

    /**
     * The application version
     *
     * @var string
     */
    protected $version;

    /**
     * The called script name
     *
     * @var string
     */
    protected $script;

    /**
     * Stored commands registry
     *
     * @var array
     */
    protected $commands;

    /**
     * Is this application a Mono-Command Application ?
     *
     * @var bool
     */
    protected $mono = false;

    /**
     * Application constructor.
     *
     * @param string       $name    The application name
     * @param string       $version The application version
     * @param Command|null $main    Main command (only for MCA)
     */
    public function __construct($name, $version, Command $main = null)
    {
        $this->name = $name;
        $this->version = $version;
        $this->formatter = FormatterFactory::create();

        // For Mono-Command Applications, the command can be passed as a 3rd constructor arg
        if ($main instanceof Command) {
            $this
                ->add($main)
                ->mono = true;
        }

        $this->init();
    }

    /**
     * Getter for the formatter instance
     *
     * @return Formatter
     */
    public function getFormatter()
    {
        return $this->formatter;
    }

    /**
     * Getter for the application name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Getter for the application version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Getter for the script property
     *
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Run the application
     * This is the entrypoint method.
     *
     * @param array $args Optional invocation arguments (defaults to $_SERVER['argv'])
     *
     * @return int The command exit status code
     */
    public function run($args = [])
    {
        if (empty($args)) {
            $args = $_SERVER['argv'];
        }

        $this->script = array_shift($args);

        try {
            $info = $this->parse($args);
            return $this->get($info['command'])->run($info['args']);
        } catch (LogicException $e) {
            $error = sprintf('%s, exiting.', (string) $e);
            $this->iowrite($error);
            return $e->getCode();
        } catch (UnknownCommandException $e) {
            $error = sprintf('%s: %s. Exiting.', $this->getScript(), $e->getMessage());
            $this->ioerror($error);
            return $e->getCode();
        }
    }

    /**
     * Add several commands in one shot
     *
     * @param Command[] $commands The commands to be registered
     *
     * @return self
     */
    public function addCommands($commands = [])
    {
        foreach ($commands as $command) {
            $this->add($command);
        }

        return $this;
    }

    /**
     * Add a command to the registry
     *
     * @param Command $command The command to register
     *
     * @return self
     */
    public function add(Command $command = null)
    {
        $command->setApplication($this);

        $name = $command->getName();

        $this->commands[$name] = $command;

        return $this;
    }


    /**
     * Proxy to Application::find() method
     * Implemented for backward compatibility with Symfony inheriting applications
     *
     * @param string $name The requested command name
     *
     * @return Command
     * @throws UnknownCommandException
     */
    public function find($name)
    {
        return $this->get($name);
    }

    /**
     * Get a command by its name from the registry
     *
     * @param string $name The requested command name
     *
     * @return Command
     * @throws UnknownCommandException
     */
    public function get($name)
    {
        if (!$this->has($name)) {
            throw new UnknownCommandException($name);
        }

        return $this->commands[$name];
    }

    /**
     * Check for the presence of the named command in the registry
     *
     * @param string $name The searched command name
     *
     * @return bool
     */
    public function has($name)
    {
        return array_key_exists($name, $this->commands);
    }

    /**
     * Build application usage/help message upon the registered commands and return it
     *
     * @param string $tab   The tabulation string (defaults to `\n`)
     * @param int    $width Minimum width for the command names column (defaults to `18`)
     *
     * @return string
     */
    public function getUsage($tab = Formatter::TAB, $width = Formatter::PAD)
    {
        $lines = [];

        $lines[] = "<strong>Usage</strong>";
        $lines[] = sprintf("${tab}%s <command> [<options>] -- [<arguments>]", $this->script);
        $lines[] = "<strong>Commands</strong>";

        foreach ($this->getUserCommands() as $name => $command) {
            $lines[] = sprintf("${tab}%-{$width}s  %s", $name, $command->getHelp());
        }

        return implode(Formatter::LF, $lines);
    }

    /**
     * Find command name and arguments from the command-line invocation
     *
     * @param array $args The command-line parameters list
     *
     * @return array An associative array of the form ['command' => '...', 'args' => array(...)]
     */
    public function parse($args)
    {
        if (in_array('--version', $args)) {
            return [
                'command' => self::COMMAND_VERS,
                'args' => array_filter($args, function ($a) { return $a !== '--version'; })
            ];
        }

        if ($this->isMono()) {
            return ['command' => $this->getDefault(), 'args' => $args];
        }

        $command = array_shift($args);

        switch ($command):
            case 'list':
            case '--help':
            case '-h':
            case null:
                $command = self::COMMAND_HELP;
                break;

            default:
                break;
        endswitch;

        return ['command' => $command, 'args' => $args];
    }

    /**
     * Setter for the mono-command application flag
     *
     * @param bool $mono
     *
     * @return self
     */
    public function setMono($mono)
    {
        $this->mono = $mono;

        return $this;
    }

    /**
     * Getter for the mono-command application flag
     *
     * @return bool
     */
    public function isMono()
    {
        return $this->mono;
    }

    /**
     * @return Command[]
     */
    public function getUserCommands()
    {
        return array_filter($this->commands, function (Command $command) { return (!$command->isSystem()); });
    }

    /**
     * Hook for initialization tasks, called at the end of the constructor:
     * - add common commands (help, version)
     */
    protected function init()
    {
        $this
            ->addBaseCommands();
    }

    /**
     * Add base common commands
     *
     * @return self
     */
    public function addBaseCommands()
    {
        $this->addCommands([
            new HelpCommand(self::COMMAND_HELP),
            new VersionCommand(self::COMMAND_VERS),
        ]);

        return $this;
    }

    /**
     * Getter for the default command name
     *
     * @return string
     * @throws LogicException If the application has no user-defined command
     */
    public function getDefault()
    {
        $commands = $this->getUserCommands();

        if (0 === count($commands)) {
            throw new LogicException('Mono-command applications need at least 1 command defined');
        }

        return $commands[0]->getName();
    }
}
