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
 * Class FormatterFactory
 * Factory for the console output formatter instance
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class FormatterFactory
{
    /**
     * Output formatter factory method
     *
     * @param string $os The target Operating System (defaults to 'Linux')
     *                   Depending on the OS, a different output formatter may be instantiated
     *
     * @return Formatter
     */
    public static function create($os = Formatter::OS_LINUX)
    {
        switch ($os):
            case Formatter::OS_LINUX:
            case Formatter::OS_DARWIN:
                return new PosixFormatter();

            case Formatter::OS_CYGWIN:
                return new CygwinFormatter();

            // In case of unsupported OS, use the flat output formatter
            default:
                return new FlatFormatter();
        endswitch;
    }
}
