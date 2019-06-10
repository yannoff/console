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

use Yannoff\Component\Console\Definition\Argument;
use Yannoff\Component\Console\Definition\Option;
use Yannoff\Component\Console\Exception\DefinitionException;
use Yannoff\Component\Console\Exception\ResolverException;
use Yannoff\Component\Console\Exception\Definition\TooManyArgumentsException;
use Yannoff\Component\Console\Exception\Definition\UnknownOptionException;
use Yannoff\Component\Console\IO\IOStreamHelperTrait;

/**
 * Class ArgvResolver
 *
 * @package Yannoff\Component\Console
 */
class ArgvResolver
{
    use IOStreamHelperTrait;

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
     * @throws DefinitionException
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
     * @throws DefinitionException
     * @throws ResolverException
     */
    public function getArgumentValue($name)
    {
        if ($this->hasArgumentValue($name)) {
            return $this->arguments[$name];
        }

        if ($this->hasArgumentDefinition($name)) {
            return $this->getArgumentDefinition($name)->getDefault();
        }

        $error = sprintf('Argument "%s" is not set.', $name);
        throw new ResolverException($error);
    }

    /**
     * Get option definition by name
     *
     * @param string $name
     *
     * @return Option
     * @throws DefinitionException
     */
    public function getOptionDefinition($name)
    {
        return $this->definition->getOption($name);
    }

    /**
     * Get option value by name
     *
     * @param string $name
     *
     * @return mixed
     * @throws DefinitionException
     * @throws ResolverException
     */
    public function getOptionValue($name)
    {
        if ($this->hasOptionValue($name)) {
            return $this->options[$name];
        }

        if ($this->hasOptionDefinition($name)) {
            return $this->getOptionDefinition($name)->getDefault();
        }

        $error = sprintf('Option "%s" is not set.', $name);
        throw new ResolverException($error);
    }

    /**
     * Parse the given command line arguments and populate resolver
     * arguments & options values accordingly
     *
     * @param array $argv The command line arguments
     */
    public function resolve($argv)
    {
        $argc = 0;

        // Iterate over command-line arguments and populate options/arguments accordingly
        while (null !== ($pos = key($argv))) {
            $arg = current($argv);
            $type = $this->getType($arg);

            try {
                switch ($type):
                    case self::TYPE_LONGOPT:
                    case self::TYPE_SHORTOPT:
                        $size = (int)$type;
                        $name = substr($arg, $size);

                        if (! $this->hasOptionDefinition($name)) {
                            $error = sprintf('Undefined "%s" option, ignoring.', $name);
                            throw new UnknownOptionException($error);
                        }

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
                            default:
                                $error = sprintf('Unrecognized option type "%s".', $optionType);
                                throw new DefinitionException($error);
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
                            $error = sprintf('Too many arguments (%s): max: %s, given: %s', $arg, $max, $argc);
                            throw new TooManyArgumentsException($error);
                        }
                        $name = $this->definition->getNameByPosition('arguments', $argc);
                        $this->arguments[$name] = $arg;
                        $argc++;
                        break;
                endswitch;
            } catch (DefinitionException $e) {
                $error = sprintf('%s: %s', 'Warning', $e->getMessage());
                $this->err($error);
            }
            next($argv);
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

        if ('-' === substr($arg, 0, 1)) {
            return self::TYPE_SHORTOPT;
        }

        return self::TYPE_ARGUMENT;
    }
}
