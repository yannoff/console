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
use Yannoff\Component\Console\Definition\Item;
use Yannoff\Component\Console\Definition\Option;
use Yannoff\Component\Console\Exception\Definition\UndefinedArgumentException;
use Yannoff\Component\Console\Exception\Definition\UndefinedOptionException;
use Yannoff\Component\Console\Exception\LogicException;

/**
 * Class Definition
 * The registry which holds options & arguments definitions
 *
 * @package Yannoff\Component\Console
 */
class Definition
{
    /**
     * Registry for argument definitions
     * Each argument is stored using its name as a key
     *
     * @var Argument[]
     */
    protected $arguments = [];

    /**
     * Registry for option definitions
     * Each option is stored using its long name as a key
     *
     * @var Option[]
     */
    protected $options = [];

    /**
     * Mapping between option definitions short & long names
     *
     * @var array
     */
    protected $aliases = [];

    /**
     * Register an option definition
     *
     * @param Option $option
     *
     * @return self
     */
    public function addOption(Option $option)
    {
        $name = $option->getName();
        $this->options[$name] = $option;
        if (null !== ($shortcut = $option->getShortcut())) {
            $this->aliases[$shortcut] = $name;
        }

        return $this;
    }

    /**
     * Register an argument definition
     *
     * @param Argument $argument
     *
     * @return self
     */
    public function addArgument(Argument $argument)
    {
        $name = $argument->getName();
        $this->arguments[$name] = $argument;

        return $this;
    }

    /**
     * Check for existence of the given argument in the registry
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasArgument($name)
    {
        return array_key_exists($name, $this->arguments);
    }

    /**
     * Check for existence of the given option in the registry
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasOption($name)
    {
        return $this->hasLongOption($name) || $this->hasShortOption($name);
    }

    /**
     * Check for existence of the given option in the registry by its long name
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasLongOption($name)
    {
        return array_key_exists($name, $this->options);
    }

    /**
     * Check for existence of the given option in the registry by its short name
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasShortOption($name)
    {
        return array_key_exists($name, $this->aliases);
    }

    /**
     * Get option from the registry by its long name
     *
     * @param string $name
     *
     * @return Option
     */
    public function getLongOption($name)
    {
        return $this->options[$name];
    }

    /**
     * Get option from the registry by its short name
     *
     * @param string $name
     *
     * @return Option
     */
    public function getShortOption($name)
    {
        $longopt = $this->aliases[$name];

        return $this->options[$longopt];
    }

    /**
     * Get option by its name, searching both long & short names
     *
     * @param string $name
     *
     * @return Option
     * @throws UndefinedOptionException
     */
    public function getOption($name)
    {
        if ($this->hasLongOption($name)) {
            return $this->getLongOption($name);
        }

        if ($this->hasShortOption($name)) {
            return $this->getShortOption($name);
        }

        throw new UndefinedOptionException($name);
    }

    /**
     * Get argument from the registry by its name
     *
     * @param string $name
     *
     * @return Argument
     * @throws UndefinedArgumentException
     */
    public function getArgument($name)
    {
        if ($this->hasArgument($name)){
            return $this->arguments[$name];
        }

        throw new UndefinedArgumentException($name);
    }

    /**
     * Return the arguments list, optionally filtered by a custom callback
     *
     * @param callable|null $callback Optional filtering callback
     *
     * @return Argument[]
     */
    public function getArguments(callable $callback = null)
    {
        if (null === $callback) {
            return $this->arguments;
        }

        return array_filter($this->arguments, $callback);
    }

    /**
     * Return the mandatory arguments list
     *
     * @return Argument[]
     */
    public function getRequiredArgs()
    {
        return $this->getArguments(function (Argument $a){ return $a->isRequired(); });
    }

    /**
     * Return the optional arguments list
     *
     * @return Argument[]
     */
    public function getOptionalArgs()
    {
        return $this->getArguments(function (Argument $a){ return $a->isOptional(); });
    }

    /**
     * Return the list of arguments, pre-formatted for Command help
     *
     * @return string
     */
    public function getArgSynopsis()
    {
        $arguments = [];
        foreach ($this->getRequiredArgs() as $argument) {
            $arguments[] = sprintf('<%s>', $argument->getName());
        }
        foreach ($this->getOptionalArgs() as $argument) {
            $arguments[] = sprintf('[<%s>]', $argument->getName());
        }

        return implode(' ', $arguments);
    }

    /**
     * Return the total number of defined arguments
     *
     * @return int
     */
    public function countArguments()
    {
        return count($this->arguments);
    }

    /**
     * Get all items array for the given registry name
     *
     * @param string $register
     *
     * @return Item[]
     * @throws LogicException
     */
    public function all($register)
    {
        if (!property_exists($this, $register)) {
            $error = sprintf('Register "%s" not found in command definition.', $register);
            throw new LogicException($error);
        }

        return $this->{$register};
    }

    /**
     * Calculate the index of the queried item in the given registry
     *
     * @param string $register
     * @param int    $idx
     *
     * @return string
     */
    public function getNameByPosition($register, $idx)
    {
        return array_keys($this->{$register})[$idx];
    }
}
