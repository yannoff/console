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

namespace Yannoff\Component\Console\IO\Stream;

use Yannoff\Component\Console\IO\Output\Formatter;

/**
 * Interface IOWriter
 * Contract for I/O writer streams
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
interface IOWriter extends IOStream
{
    /**
     * Write contents to the output stream
     *
     * @param string $contents The contents to write
     * @param string $ending   Character or text to be appended (defaults to "\n")
     *
     * @return int|false Number of bytes written or **false** on error
     */
    public function write($contents, $ending = Formatter::LF);
}
