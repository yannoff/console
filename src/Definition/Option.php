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
 * Class Option
 * Option definition item
 *
 * @package Yannoff\Component\Console\Definition
 */
class Option extends Item
{
    /**
     * Option type: value
     *
     * @var int
     */
    const VALUE = 10;

    /**
     * Option type: flag
     *
     * @var int
     */
    const FLAG = 20;

    /**
     * Optional short name for the option
     *
     * @var string|null
     */
    protected $short;

    /**
     * Option constructor.
     *
     * @param string $name    Option name. This is also the name used as a key in the Definition registry
     * @param string $short   Optional short name for the option
     * @param int    $type    Type of option: value or flag
     * @param string $help    Description text for the option
     * @param mixed  $default Optional default value for the option
     */
    public function __construct($name, $short = null, $type = self::FLAG, $help = '', $default = null)
    {
        $this->name = $name;
        $this->short = $short;
        $this->type = $type;
        $this->help = $help;
        $this->default = $default;
    }

    /**
     * Getter for the option's short name
     *
     * @return string|null
     */
    public function getShortcut()
    {
        return $this->short;
    }

    /**
     * @return string
     */
    public function getSynopsis()
    {
        $names = [];

        if (!empty($this->short)) {
            $names[] = sprintf('-%s', $this->short);
        }

        $names[] = sprintf('--%s', $this->name);

        $synopsis = implode(', ', $names);

        if (self::VALUE === $this->type) {
            $synopsis .= sprintf(' %s', 'VALUE');
        }

        return sprintf('\t%-18s %s', $synopsis, $this->help);
    }
}
