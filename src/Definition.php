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
use Yannoff\Component\Console\Exception\DefinitionException;
use Yannoff\Component\Console\Exception\Definition\UnknownOptionException;

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
        return $this->has('arguments', $name);
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
        return $this->has('options', $name);
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
        return $this->has('aliases', $name);
    }

    /**
     * Get option from the registry by its long name
     *
     * @param string $name
     *
     * @return Option
     * @throws DefinitionException
     */
    public function getLongOption($name)
    {
        return $this->get('options', $name);
    }

    /**
     * Get option from the registry by its short name
     *
     * @param string $name
     *
     * @return Option
     * @throws DefinitionException
     */
    public function getShortOption($name)
    {
        $longopt = $this->aliases[$name];

        return $this->get('options', $longopt);
    }

    /**
     * Get option by its name, searching both long & short names
     *
     * @param string $name
     *
     * @return Option
     * @throws DefinitionException
     */
    public function getOption($name)
    {
        if ($this->has('options', $name)) {
            return $this->getLongOption($name);
        }

        if ($this->has('aliases', $name)) {
            return $this->getShortOption($name);
        }

        $error = sprintf('Undefined "%s" option, ignoring.', $name);
        throw new UnknownOptionException($error);
    }

    /**
     * Get argument from the registry by its name
     *
     * @param string $name
     *
     * @return Argument
     * @throws DefinitionException
     */
    public function getArgument($name)
    {
        return $this->get('arguments', $name);
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

    public function has($register, $name)
    {
        return array_key_exists($name, $this->{$register});
    }

    /**
     * Get an item by name in the given registry
     *
     * @param string $register
     * @param string $name
     *
     * @return Item
     * @throws DefinitionException
     */
    public function get($register, $name)
    {
        if (!$this->has($register, $name)) {
            $error = sprintf('"%s" not found in "%s" definition.', $name, $register);
            throw new DefinitionException($error);
        }

        return $this->$register[$name];
    }

    /**
     * Get all items array for the given registry name
     *
     * @param string $register
     *
     * @return Item[]
     * @throws DefinitionException
     */
    public function all($register)
    {
        if (!property_exists($this, $register)) {
            $error = sprintf('Register "%s" not found in command definition.', $register);
            throw new DefinitionException($error);
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
