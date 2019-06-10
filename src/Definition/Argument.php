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
 * Class Argument
 * Argument definition item
 *
 * @package Yannoff\Component\Console\Definition
 */
class Argument extends Item
{
    /**
     * Argument type: required
     * @var int
     */
    const REQUIRED = 1;

    /**
     * Argument type: optional
     * @var int
     */
    const OPTIONAL = 2;

    /**
     * Argument constructor.
     *
     * @param string $name    The argument name
     * @param int    $type    The argument type: optional/required
     * @param string $help    The argument help message
     * @param mixed  $default Optional default value for the argument
     */
    public function __construct($name, $type = self::OPTIONAL, $help = null, $default = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->help = $help;
        $this->default = $default;
    }

    /**
     * @return string
     */
    public function getSynopsis()
    {
        return sprintf('\t%-18s %s', $this->name, $this->help);
    }
}
