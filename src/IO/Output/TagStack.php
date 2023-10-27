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

use Yannoff\Component\Console\IO\Output\Posix\AtomicTag;

/**
 * Class TagStack
 *
 * First class collection for opened tags list
 *
 * @package Yannoff\Component\Console\IO\Output;
 */
class TagStack
{
    /**
     * The stacked tags array
     *
     * @var AtomicTag[]
     */
    protected $tags = [];

    /**
     * Empty the stack
     */
    public function clear()
    {
        $this->tags = [];
    }

    /**
     * Return the number of tags in the stack
     *
     * @return int
     */
    public function count()
    {
        return \count($this->tags);
    }
    
    /**
     * Add a new tag on top of the stack
     *
     * @param AtomicTag $tag
     */
    public function push(AtomicTag $tag)
    {
        $this->tags[] = $tag;
    }

    /**
     * Remove the last tag of the stack and return it
     *
     * @return AtomicTag
     */
    public function pop()
    {
        return \array_pop($this->tags);
    }

    /**
     * Set the stack internal pointer to the last tag & return it
     *
     * @return AtomicTag
     */
    public function last()
    {
        return \end($this->tags);
    }
}
