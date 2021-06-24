<?php
/**
 * This file is part of the yannoff/console library
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
     * Name of the default command to be used if none was supplied
     *
     * @var string
     */
    protected $default;

    /**
     * Application constructor.
     *
     * @param string $name    The application name
     * @param string $version The application version
     */
    public function __construct($name, $version)
    {
        $this->name = $name;
        $this->version = $version;
        $this->formatter = FormatterFactory::create();

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

        // Try to guess the command name from the first argument
        $arg = count($args) > 0 ? $args[0] : null;
        $command = $this->resolve($arg);

        // If the first argument is an existing command, use it for command name and shift the arguments stack
        // If not, either use the default command if the user defined one, or fallback to the help command
        if (null !== $command && $this->has($command)) {
            array_shift($args);
        } else {
            $command = (null !== $this->default) ? $this->default : self::COMMAND_HELP;
        }

        try {
            return $this->get($command)->run($args);
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
     * @return string
     */
    public function getUsage()
    {
        $lines = [];
        $lines[] = "<strong>Usage</strong>";
        $lines[] = sprintf("\t%s <command> [<options>] -- [<arguments>]", $this->script);
        $lines[] = "<strong>Commands</strong>";
        foreach ($this->commands as $name => $command) {
            $lines[] = sprintf("\t%-18s  %s", $name, $command->getHelp());
        }

        return implode("\n", $lines);
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
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Setter for the default command name
     * Allow easy configuration in user-defined applications
     *
     * @param string|Command $name Name of the default command
     * NOTE: A command object may also be passed, thanks to force to-string type-casting
     *
     * @return self
     */
    public function setDefault($name)
    {
        $this->default = (string) $name;

        return $this;
    }

    /**
     * Resolve the given CLI argument (be it a command alias or an option) to an existing command name
     * Allow to invoke the appropriated command for special global options like --help, --version, etc
     *
     * @param string $name The command or option name
     *
     * @return string|null
     */
    protected function resolve($name)
    {
        switch ($name):
            case '--version':
                return self::COMMAND_VERS;

            case 'list':
            case '--help':
            case '-h':
            case '--usage':
                return self::COMMAND_HELP;

            // Null name must return null in order to be appropriately detected in the next processing step
            case null:
                return null;

            default:
                return $name;
        endswitch;
    }
}
