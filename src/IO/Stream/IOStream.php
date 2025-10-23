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
 * Interface IOStream
 * Contract for both types of I/O streams: readers & writers
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
interface IOStream
{
    /**
     * Supported streams short names
     */

    /** @var string Short name for standard input stream */
    const STDIN = 'stdin';

    /** @var string Short name for standard output stream */
    const STDOUT = 'stdout';

    /** @var string Short name for standard error stream */
    const STDERR = 'stderr';

    /**
     * Available modes for fopen()
     */

    /** @var string fopen() mode: append */
    const APPEND = 'a+';

    /** @var string fopen() mode: read */
    const READONLY = 'r';
}
