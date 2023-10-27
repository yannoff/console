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

namespace Yannoff\Component\Console\IO\Output;

/**
 * Class Token
 *
 * Object abstraction for the PosixFormatter tokens
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class Token
{
    /**
     * Plain-text token contents
     *
     * @var string
     */
    public $raw;

    /**
     * @param string $raw The plain-text token contents
     */
    public function __construct($raw = null)
    {
        $this->raw = $raw;
    }

    /**
     * @return string The string representation of the token
     */
    public function __toString()
    {
        return $this->raw;
    }

    /**
     * @return bool
     */
    public function isTag()
    {
        return \preg_match('/^</', \ltrim($this->raw));
    }

    /**
     * @return bool
     */
    public function isText()
    {
        return (! $this->isTag());
    }
}
