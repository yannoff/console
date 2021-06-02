<?php
/**
 * This file is part of the yannoff/console library
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

use Yannoff\Component\Console\Exception\Definition\InvalidOptionTypeException;

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
     *
     * @throws InvalidOptionTypeException
     */
    public function __construct($name, $short = null, $type = self::FLAG, $help = '', $default = null)
    {
        if (!Option::isValidType($type)) {
            throw new InvalidOptionTypeException($name, $type);
        }

        $this->name = $name;
        $this->short = $short;
        $this->type = $type;
        $this->help = $help;
        // Override default value for flags => false
        if (self::FLAG === $type) {
            $default = false;
        }
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
     * True if the option is typed as a flag
     *
     * @return bool
     */
    public function isFlag()
    {
        return (self::FLAG === $this->type);
    }

    /**
     * True if the option is typed as a value
     *
     * @return bool
     */
    public function isValue()
    {
        return (self::VALUE === $this->type);
    }

    /**
     * {@inheritdoc}
     */
    public static function getValidTypes()
    {
        return [ self::VALUE, self::FLAG ];
    }

    /**
     * {@inheritdoc}
     */
    public function getSynopsis()
    {
        $synopsis = implode(', ', $this->getNames());

        if ($this->isValue()) {
            $synopsis .= sprintf(' %s', 'VALUE');
        }

        $help = sprintf('\t%-18s %s', $synopsis, $this->help);

        if ($this->hasDefault()) {
            $help .= sprintf(' (default: <strong>%s</strong>)', $this->default);
        }

        return $help;
    }

    /**
     * Get the option invocation names (short & long)
     *
     * @return array
     */
    protected function getNames()
    {
        $names = [];

        if (!empty($this->short)) {
            $names[] = sprintf('-%s', $this->short);
        }

        $names[] = sprintf('--%s', $this->name);

        return $names;
    }
}
