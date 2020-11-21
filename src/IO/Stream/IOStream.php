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
 * Interface IOStream
 * Contract for both types of I/O streams: readers & writers
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
interface IOStream
{
    /**
     * Supported streams short names
     *
     * @var string
     */
    const STDIN = 'stdin';
    const STDOUT = 'stdout';
    const STDERR = 'stderr';
}