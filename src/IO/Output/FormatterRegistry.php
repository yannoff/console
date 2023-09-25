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

use Yannoff\Component\Console\IO\Stream\IOWriter;

/**
 * Class FormatterRegistry
 * Registry for the console output formatters
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class FormatterRegistry
{
    /**
     * @var array
     */
    protected static $formatters = [];

    /**
     * Output formatter resolver
     * Find the appropriate formatter for the given OS and output type
     *
     * @param IOWriter $stream The output stream wrapper
     * @param string   $os     The target Operating System (defaults to 'Linux')
     *
     * @return string
     */
    public static function resolve(IOWriter $stream, $os = Formatter::OS_LINUX)
    {
        // If output is a pipe or a regular file, use flat formatter
        if ($stream->isPiped() || $stream->isFile()) {
            return FlatFormatter::class;
        }

        switch ($os):
            case Formatter::OS_LINUX:
            case Formatter::OS_DARWIN:
                return PosixFormatter::class;

            case Formatter::OS_CYGWIN:
                return CygwinFormatter::class;

            // In case of unsupported OS, use the flat output formatter
            default:
                return FlatFormatter::class;
        endswitch;
    }

    /**
     * Output formatter getter
     *
     * @param IOWriter $stream The output stream wrapper
     * @param string   $os     The target Operating System (defaults to 'Linux')
     *
     * @return Formatter
     */
    public static function get(IOWriter $stream, $os = Formatter::OS_LINUX)
    {
        $formatter = self::resolve($stream, $os);

        if (\array_key_exists($formatter, self::$formatters)) {
            return self::$formatters[$formatter];
        }

        return self::add($formatter);
    }

    /**
     * Create a new formatter instance and store it in the registry
     *
     * @param string $formatter The formatter fully-qualified class name
     *
     * @return Formatter
     */
    public static function add($formatter)
    {
        $instance = new $formatter();

        self::$formatters[$formatter] = $instance;

        return $instance;
    }
}
