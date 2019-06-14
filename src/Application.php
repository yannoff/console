<?php
/**
 * This file is part of the yannoff/console library
 * (c) 2019 Yannoff (https://github.com/yannoff)
 *
 * @project   yannoff/console
 * @link      https://github.com/yannoff/console
 * @license   http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yannoff\Component\Console;

use Yannoff\Component\Console\Command\HelpCommand;
use Yannoff\Component\Console\Command\VersionCommand;
use Yannoff\Component\Console\Exception\Command\UnknownCommandException;
use Yannoff\Component\Console\IO\IOStreamHelperTrait;

/**
 * Class Application
 *
 * @package Yannoff\Component\Console
 */
class Application
{
    use IOStreamHelperTrait;

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
     * Application constructor.
     *
     * @param string $name    The application name
     * @param string $version The application version
     */
    public function __construct($name, $version)
    {
        $this->name = $name;
        $this->version = $version;

        $this->init();
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
     * @return int The command exit status code
     * @throws Exception\ResolverException
     */
    public function run()
    {
        $args = $_SERVER['argv'];
        $this->script = array_shift($args);
        $command = array_shift($args);

        // Invoke the appropriated command for special global options like --help, --version, etc
        switch ($command):
            case '--version':
                $command = 'version';
                break;

            case 'list':
            case '--help':
            case '-h':
            case '--usage':
            case null:
                $command = 'help';
                break;

            default:
                break;
        endswitch;

        try {
            return $this->get($command)->run($args);
        } catch (UnknownCommandException $e) {
            $error = sprintf('%s: %s. Exiting.', $this->getScript(), $e->getMessage());
            $this->err($error);
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
        $this->addCommands([
            new HelpCommand('help'),
            new VersionCommand('version'),
        ]);
    }
}
