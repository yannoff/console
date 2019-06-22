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

use Yannoff\Component\Console\Exception\Definition\InvalidArgumentTypeException;

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
     *
     * @throws InvalidArgumentTypeException
     */
    public function __construct($name, $type = self::OPTIONAL, $help = null, $default = null)
    {
        if (!Argument::isValidType($type)) {
            throw new InvalidArgumentTypeException($name, $type);
        }

        $this->name = $name;
        $this->type = $type;
        $this->help = $help;
        $this->default = $default;
    }

    /**
     * True if the argument is typed as "optional"
     *
     * @return bool
     */
    public function isOptionnal()
    {
        return (self::OPTIONAL === $this->type);
    }

    /**
     * True if the argument is typed as required
     *
     * @return bool
     */
    public function isRequired()
    {
        return (self::REQUIRED === $this->type);
    }

    /**
     * {@inheritdoc}
     */
    public static function getValidTypes()
    {
        return [ self::REQUIRED, self::OPTIONAL ];
    }

    /**
     * {@inheritdoc}
     */
    public function getSynopsis()
    {
        $help = sprintf('\t%-18s %s', $this->name, $this->help);

        if ($this->hasDefault()) {
            $help .= sprintf(' (default: <strong>%s</strong>)', $this->default);
        }

        return $help;
    }
}
