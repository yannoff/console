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

namespace Yannoff\Component\Console\Definition;

use Yannoff\Component\Console\Application;
use Yannoff\Component\Console\IO\ASCII;

/**
 * Class Item
 * Super-class for both Option & Argument
 *
 * @package Yannoff\Component\Console\Definition
 */
abstract class Item
{
    /**
     * The item name
     *
     * @var string
     */
    protected $name;

    /**
     * The item help/description message
     *
     * @var string
     */
    protected $help;

    /**
     * The item type
     *
     * @var int
     */
    protected $type;

    /**
     * Optional default value for the item
     *
     * @var mixed
     */
    protected $default;

    /**
     * Flag indicating if default value was set
     *
     * @var bool
     */
    protected $hasDefault = false;

    /**
     * Return the formatted help for the item
     *
     * @param string $tab   The tabulation string (defaults to `\t`)
     * @param int    $width Minimum width for the names column (defaults to `18`)
     *
     * @return string
     */
    abstract public function getSynopsis($tab = ASCII::TAB, $width = Application::PAD);

    /**
     * Give the authorized values for the type property
     *
     * @return array
     */
    abstract public static function getValidTypes();

    /**
     * Default to-string type-cast conversion for Item objects
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * Check whether the given type as a valid value
     *
     * @param int $type
     *
     * @return bool
     */
    public static function isValidType($type)
    {
        return in_array($type, static::getValidTypes());
    }

    /**
     * Getter for the item name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Getter for the item help message
     *
     * @return string
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * Getter for the item type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Getter for the item default value
     *
     * @param bool $escape Whether the special chars should be escaped
     *
     * @return mixed
     */
    public function getDefault($escape = false)
    {
        $default = $this->default;
        return $escape ? $this->escape($default) : $default;
    }

    /**
     * Getter for the hasDefault flag
     *
     * @return bool
     */
    public function hasDefault()
    {
        return $this->hasDefault;
    }

    /**
     * Setter for the $hasDefault flag
     *
     * @param bool $hasDefault
     *
     * @return self
     */
    public function setHasDefault($hasDefault)
    {
        $this->hasDefault = $hasDefault;

        return $this;
    }

    /**
     * Escape special chars in value for rendering
     *
     * @param string $value
     *
     * @return string
     */
    public function escape($value)
    {
        return str_replace(
            ["\r", "\n", "\t"],
            ['"\r"', '"\n"', '"\t"'],
            $value
        );
    }
}
