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

/**
 * Interface IOReader
 * Contract for I/O reader streams
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
interface IOReader extends IOStream
{
    /**
     * Fetch contents from the input stream
     *
     * @return string|false The contents or **false** in case of failure
     */
    public function read();
}
