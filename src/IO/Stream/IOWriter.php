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

namespace Yannoff\Component\Console\IO\Stream;

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
     *
     * @return int|false Number of bytes written or **false** on error
     */
    public function write($contents);
}
