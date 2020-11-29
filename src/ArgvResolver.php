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

use Yannoff\Component\Console\Definition\Argument;
use Yannoff\Component\Console\Definition\Option;
use Yannoff\Component\Console\Exception\Definition\ArgumentNotSetException;
use Yannoff\Component\Console\Exception\Definition\InvalidOptionTypeException;
use Yannoff\Component\Console\Exception\Definition\MissingArgumentsException;
use Yannoff\Component\Console\Exception\Definition\UndefinedArgumentException;
use Yannoff\Component\Console\Exception\Definition\UndefinedOptionException;
use Yannoff\Component\Console\Exception\ResolverException;
use Yannoff\Component\Console\Exception\Definition\TooManyArgumentsException;
use Yannoff\Component\Console\Exception\Definition\UnknownOptionException;
use Yannoff\Component\Console\Exception\LogicException;
use Yannoff\Component\Console\IO\IOHelper;

/**
 * Class ArgvResolver
 *
 * @package Yannoff\Component\Console
 */
class ArgvResolver
{
    use IOHelper;

    /** @var int Argv type: long option */
    const TYPE_LONGOPT = 2;

    /** @var int Argv type: short option */
    const TYPE_SHORTOPT = 1;

    /** @var int Argv type: argument */
    const TYPE_ARGUMENT = 8;

    /** @var int Argv type: option list end (--) */
    const TYPE_OPTENDING = 0;

    /**
     * The command arguments & options definition registry
     * This is a pointer to the command's definition registry instance
     *
     * @var Definition
     */
    protected $definition;

    /**
     * Argument values, stored by name
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * Option values, stored by name
     *
     * @var array
     */
    protected $options = [];

    /**
     * ArgvResolver constructor.
     *
     * @param Definition $definition The arguments & options definition registry, passed from the Command instance
     *  NOTE: We pass the definition registry BY REF: when the resolver is instantiated, it has not been setup yet
     */
    public function __construct(Definition &$definition)
    {
        $this->definition = $definition;
    }

    /**
     * Check for the existence of the argument definition by name
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasArgumentDefinition($name)
    {
        return $this->definition->hasArgument($name);
    }

    /**
     * Check for the existence of the argument value by name
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasArgumentValue($name)
    {
        return array_key_exists($name, $this->arguments);
    }

    /**
     * Check for the existence of the option definition by name
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasOptionDefinition($name)
    {
        return $this->definition->hasOption($name);
    }

    /**
     * Check for the existence of the option value by name
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasOptionValue($name)
    {
        return array_key_exists($name, $this->options);
    }

    /**
     * Get argument definition by name
     *
     * @param string $name
     *
     * @return Argument
     * @throws UndefinedArgumentException
     */
    public function getArgumentDefinition($name)
    {
        return $this->definition->getArgument($name);
    }

    /**
     * Get argument value by name
     *
     * @param string $name
     *
     * @return mixed
     * @throws UndefinedArgumentException If no such argument found in the definition
     * @throws ArgumentNotSetException    If argument not provided by user & don't have a default value set
     */
    public function getArgumentValue($name)
    {
        if ($this->hasArgumentValue($name)) {
            return $this->arguments[$name];
        }

        $definition = $this->getArgumentDefinition($name);

        if ($definition->isRequired() && !$definition->hasDefault()) {
            throw new ArgumentNotSetException($name);
        }

        return $definition->getDefault();
    }

    /**
     * Get option definition by name
     *
     * @param string $name
     *
     * @return Option
     * @throws UnknownOptionException
     */
    public function getOptionDefinition($name)
    {
        try {
            return $this->definition->getOption($name);
        } catch (UndefinedOptionException $e) {
            throw new UnknownOptionException($name);
        }
    }

    /**
     * Get option value by name
     *
     * @param string $name
     *
     * @return mixed
     * @throws UnknownOptionException
     */
    public function getOptionValue($name)
    {
        if ($this->hasOptionValue($name)) {
            return $this->options[$name];
        }

        return $this->getOptionDefinition($name)->getDefault();
    }

    /**
     * Parse the given command line arguments and populate resolver
     * arguments & options values accordingly
     *
     * @param array $argv The command line arguments
     *
     * @throws LogicException
     */
    public function resolve($argv = [])
    {
        $argc = 0;
        $expectedArgs = $this->definition->getMandatoryArgs();

        // Iterate over command-line arguments and populate options/arguments accordingly
        while (null !== ($pos = key($argv))) {

            $arg = current($argv);
            $type = $this->getType($arg);

            try {
                switch ($type):
                    case self::TYPE_LONGOPT:
                    case self::TYPE_SHORTOPT:
                        // Options of the form "--name=value" are appended as ["--name", "value"]
                        // to the arguments stack so they can be be processed as normal options
                        if (strpos($arg, '=')) {
                            list($option, $value) = explode('=', $arg);
                            $argv[] = $option;
                            $argv[] = $value;
                            break;
                        }

                        $size = (int)$type;
                        $name = substr($arg, $size);

                        $optionDefinition = $this->getOptionDefinition($name);
                        $optionType = $optionDefinition->getType();
                        $optionName = $optionDefinition->getName();
                        switch ($optionType):
                            case Option::VALUE:
                                $value = next($argv);
                                break;
                            case Option::FLAG:
                                $value = true;
                                break;
                            case Option::MULTI:
                                $value = array_key_exists($optionName, $this->options) ? $this->options[$optionName] : [];
                                array_push($value, next($argv));
                                break;
                            default:
                                throw new InvalidOptionTypeException($optionName, $optionType);
                        endswitch;
                        $this->options[$optionName] = $value;
                        break;

                    case self::TYPE_OPTENDING:
                        break;

                    case self::TYPE_ARGUMENT:
                        $max = $this->definition->countArguments();
                        // FIXME: Tricky: Array indexing begins at 0
                        if ($argc > $max - 1) {
                            $argc++;
                            throw new TooManyArgumentsException($arg, $argc, $max);
                        }
                        $name = $this->definition->getNameByPosition('arguments', $argc);
                        $this->arguments[$name] = $arg;
                        unset($expectedArgs[$name]);
                        $argc++;
                        break;
                endswitch;
            } catch (LogicException $e) {
                // LogicExceptions MUST be re-thrown because they mean a need for a code fix
                throw $e;
            } catch (ResolverException $e) {
                // Other ResolverException, on the other hand, should only raise a warning notice
                $error = sprintf('%s: %s, ignoring.', 'Warning', $e->getMessage());
                $this->stderr->write($error);
            }
            next($argv);
        }

        // If some mandatory arguments are missing from command invocation, raise fatal exception
        if (count($expectedArgs) > 0) {
            throw new MissingArgumentsException($expectedArgs);
        }
    }

    /**
     * Detect command-line argument type from its name:
     * long option, short option or argument
     *
     * @param string $arg
     *
     * @return int
     */
    protected function getType($arg)
    {
        if ('--' === $arg) {
            return self::TYPE_OPTENDING;
        }

        if ('--' === substr($arg, 0, 2)) {
            return self::TYPE_LONGOPT;
        }

        if ('-' === substr($arg, 0, 1) && strlen($arg) > 1) {
            return self::TYPE_SHORTOPT;
        }

        return self::TYPE_ARGUMENT;
    }
}
