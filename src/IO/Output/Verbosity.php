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
 * Class Verbosity
 * Home for verbosity level constants
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class Verbosity
{
    /**
     * Default log level
     * Messages of this level are ALWAYS displayed
     *
     * @var int
     */
    const ERROR = 0;

    /**
     * @var int
     */
    const WARN = 8;

    /**
     * @var int
     */
    const INFO = 16;

    /**
     * @var int
     */
    const DEBUG = 32;
}

