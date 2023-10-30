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

namespace Yannoff\Component\Console\IO\Output\Posix;

/**
 * Class AtomicTag
 *
 * Object representation for styling pseudo-tags
 *
 * @package Yannoff\Component\Console\IO\Output\Posix
 */
class AtomicTag
{
    /**
     * The tag name
     *
     * @var string
     */
    public $name;

    /**
     * The tag type: opening|closing
     *
     * @var string
     */
    public $type;

    /**
     * The terminal modifier sequence
     *
     * @var string
     */
    public $modifier;

    /**
     * The terminal reset sequence
     *
     * @var string
     */
    public $reset = "00m";

    /**
     * AtomicTag constructor.
     *
     * @param string $token The raw tag text
     */
    public function __construct($token)
    {
        $tag = \trim($token, '><');
        
        $this->type = ($tag[0] == '/')  ? 'close' : 'open';
        $this->name = \trim($tag, '/');
        $this->modifier = TagMap::get($this->name);
    }

    /**
     * Prefix the given character sequence with the ASCII escape (\e) char
     *
     * @param string $word The color setting or reset sequence
     *
     * @return string
     */
    protected function esc($word)
    {
        return \sprintf("\033[%s", $word);
    }

    /**
     * Return the terminal color setting sequence
     *
     * @return string
     */
    public function open()
    {
        return $this->esc($this->modifier);
    }

    /**
     * Return the terminal color reset sequence
     *
     * @return string
     */
    public function close()
    {
        return $this->esc($this->reset);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name . '(' . $this->type . '): ' . $this->modifier;
    }
}
