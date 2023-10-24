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

use Closure;
use Yannoff\Component\Console\Definition\Argument;
use Yannoff\Component\Console\Definition\Option;
use Yannoff\Component\Console\Exception\Definition\InvalidArgumentTypeException;
use Yannoff\Component\Console\Exception\Definition\InvalidOptionTypeException;
use Yannoff\Component\Console\Exception\Definition\UndefinedArgumentException;
use Yannoff\Component\Console\Exception\Definition\UndefinedOptionException;
use Yannoff\Component\Console\Exception\LogicException;
use Yannoff\Component\Console\Exception\RuntimeException;
use Yannoff\Component\Console\IO\ASCII;
use Yannoff\Component\Console\IO\IOHelper;

/**
 * Class Command
 * Base class all commands will inherit from
 *
 * @package Yannoff\Component\Console
 */
class Command
{
    use IOHelper;

    /**
     * The command name
     *
     * @var string
     */
    protected $name;

    /**
     * The command help message
     *
     * @var string
     */
    protected $help;

    /**
     * The command description message
     *
     * @var string
     */
    protected $desc;

    /**
     * Optional closure to be launch by the execute method
     *
     * @var Closure
     */
    protected $closure;

    /**
     * Pointer to the main Application instance
     *
     * @var Application
     */
    protected $application;

    /**
     * Argument & option definitions registry
     *
     * @var Definition
     */
    protected $definition;

    /**
     * The command-line arguments resolver
     *
     * @var ArgvResolver
     */
    protected $resolver;

    /**
     * Placeholder for the main command code
     *
     * This method is to be overriden in child command classes
     *
     * However, if a closure was passed to the constructor it
     * will be executed here
     *
     * @return int The command exit status code
     */
    protected function execute()
    {
        if (null === $this->closure) {
            throw new LogicException('No code to execute. Either pass a closure to the constructor or implement a proper execute() method.');
        }
        
        $closure = Closure::bind($this->closure, $this, $this);

        return \call_user_func($closure);
    }


    /**
     * The command initialization method
     * This is where all the command setup instructions must reside:
     * setting name, help, description, options & arguments definitions
     *
     * This method is intended to be overridden in extending classes
     */
    protected function configure()
    {
        // Do nothing
    }

    /**
     * Command constructor.
     *
     * @param string|null  $name    The command name
     * @param Closure|null $closure Optional executable code (anonymous function or closure) to be run by execute()
     */
    public function __construct($name = null, Closure $closure = null)
    {
        $this->setName($name);
        $this->closure = $closure;
        $this->definition = new Definition();
        $this->resolver = new ArgvResolver($this->definition);

        $this->addCommonOptions();
        $this->configure();
    }

    /**
     * Return a string representation of a command: its name
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * Method running the command
     *
     * @param array $args List of the arguments passed via the command-line
     *
     * @return int The command exit status code (O for success)
     * @throws LogicException
     */
    public function run($args = [])
    {
        $this->resolver->resolve($args);

        if ($this->getOption('help')) {
            $message = $this->getUsage();
            $this->write($message);
            return 0;
        }

        return $this->execute();
    }

    /**
     * Setter for the Application instance pointer
     * NOTA BENE: Application is passed BY-REF
     *
     * @param Application $application The Application instance reference
     *
     * @return self
     */
    public function setApplication(Application &$application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Getter for the Application instance
     *
     * @return Application
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Getter for the command name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Getter for the command short help
     *
     * @return string
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * Getter for the command description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->desc;
    }

    /**
     * Retrieve an option value by its name
     *
     * @param string $name The name of the queried option
     *
     * @return mixed
     * @throws UndefinedOptionException
     */
    public function getOption($name)
    {
        return $this->resolver->getOptionValue($name);
    }

    /**
     * Retrieve an argument value by its name
     *
     * @param string $name The name of the queried argument
     *
     * @return mixed
     * @throws UndefinedArgumentException
     * @throws RuntimeException
     */
    public function getArgument($name)
    {
        return $this->resolver->getArgumentValue($name);
    }


    /**
     * Build the whole command usage/help message with all options/arguments documented
     *
     * @param string $tab   The tabulation string (defaults to `\t`)
     * @param int    $width Minimum width for the option/argument names column (defaults to `18`)
     *
     * @return string
     */
    public function getUsage($tab = ASCII::TAB, $width = Application::PAD)
    {
        $lines = [];

        $lines[] = "<strong>Usage</strong>";
        $lines[] = $this->getSynopsis($tab);
        $lines[] = "<strong>Description</strong>";
        $lines[] = $tab . $this->help;

        foreach (['arguments', 'options'] as $bag) {
            try {
                $definitions = $this->definition->all($bag);
                if (count($definitions) > 0) {
                    $lines[] = sprintf("<strong>%s</strong>", ucfirst($bag));
                    foreach ($definitions as $name => $item) {
                        $lines[] = $item->getSynopsis($tab, $width);
                    }
                }
            } catch (LogicException $e) {
                // DefinitionException should never raise in this context,
                // but in any case the process must not be stopped
                $error = sprintf("Warning: %s", $e->getMessage());
                $this->error($error);
            }
        }

        return implode(ASCII::LF, $lines) . ASCII::LF;
    }

    /**
     * Discriminate user-defined vs built-in commands
     *
     * @return bool
     */
    public function isSystem()
    {
        return false;
    }

    /**
     * Get the command synopsis
     *
     * @param string $tab The tabulation string (defaults to `\t`)
     *
     * @return string
     */
    protected function getSynopsis($tab = ASCII::TAB)
    {
        $help = [];

        $help[] = sprintf('%s%s', $tab, $this->application->getScript());

        if (! $this->getApplication()->isMono()) {
            $help[] = $this->name;
        }

        $help[] = '[options] [--]';
        $help[] = $this->definition->getArgSynopsis();

        return implode(' ', $help);
    }

    /**
     * Setter for the command name
     *
     * @param string $name
     *
     * @return self
     */
    protected function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Setter for the command help
     *
     * @param string $help
     *
     * @return self
     */
    protected function setHelp($help)
    {
        $this->help = $help;

        return $this;
    }

    /**
     * Setter for the command description
     *
     * @param string $desc
     *
     * @return self
     */
    protected function setDescription($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Add an argument definition to the command
     *
     * @param string $name    The argument name
     * @param int    $type    The argument type: required or optional
     * @param string $help    The argument help message
     * @param mixed  $default Optional default value for the argument
     *
     * @return self
     * @throws InvalidArgumentTypeException
     */
    protected function addArgument($name, $type = null, $help = null, $default = null)
    {
        $definition = new Argument($name, $type, $help, $default);
        $definition->setHasDefault((4 === func_num_args()));
        $this->definition->addArgument($definition);

        return $this;
    }

    /**
     * Add an option definition to the command
     *
     * @param string $name    Long name for the option
     * @param string $short   Optional short name for the option
     * @param int    $type    The option type: value or flag
     * @param string $help    The option help message
     * @param mixed  $default Optional default value for the option
     *
     * @return self
     * @throws InvalidOptionTypeException
     */
    protected function addOption($name, $short, $type, $help = null, $default = null)
    {
        $definition = new Option($name, $short, $type, $help, $default);
        $definition->setHasDefault((5 === func_num_args()));
        $this->definition->addOption($definition);

        return $this;
    }

    /**
     * Add the options common to every command
     *
     * @return self
     */
    protected function addCommonOptions()
    {
        $this->addHelpOption();

        return $this;
    }

    /**
     * Base method to add the --help option
     *
     * This method might be overwritten in extending classes
     * (for instance to avoid shortname collision between options)
     *
     * @return self
     */
    protected function addHelpOption()
    {
        $this->addOption('help', 'h', Option::FLAG, 'Display this help message');

        return $this;
    }
}

