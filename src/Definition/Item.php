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

namespace Yannoff\Component\Console\Definition;

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
     * Return the formatted help for the item
     *
     * @return string
     */
    abstract public function getSynopsis();

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
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }
}
