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

namespace Yannoff\Component\Console\IO;

use Yannoff\Component\Console\Exception\IO\UnsupportedStreamException;
use Yannoff\Component\Console\IO\Stream\IOStream;
use Yannoff\Component\Console\IO\Stream\StandardError;
use Yannoff\Component\Console\IO\Stream\StandardInput;
use Yannoff\Component\Console\IO\Stream\StandardOutput;

/**
 * Class StreamFactory
 * Factory for I/O writers & readers
 *
 * @package Yannoff\Component\Console\IO
 */
class StreamFactory
{
    /**
     * Array map of the available streams, indexed by their short names
     *
     * @var array
     */
    protected static $streams = [
        IOStream::STDIN => StandardInput::class,
        IOStream::STDERR => StandardError::class,
        IOStream::STDOUT => StandardOutput::class,
    ];

    /**
     * Create a new instance of the queried stream
     *
     * @param string $name The stream's short name
     *
     * @return IOStream
     */
    public static function create($name)
    {
        if (! self::supports($name)){
            throw new UnsupportedStreamException($name);
        }

        $class = self::$streams[$name];

        return new $class();
    }

    /**
     * Validate the queried IO stream short name
     *
     * @param string $stream The stream short name
     *
     * @return bool
     */
    public static function supports($stream)
    {
        return \array_key_exists($stream, self::$streams);
    }
}
