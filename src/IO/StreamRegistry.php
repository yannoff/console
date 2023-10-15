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

/**
 * Class StreamRegistry
 * Registry for I/O writers & readers
 *
 * @package Yannoff\Component\Console\IO
 */
class StreamRegistry
{
    /**
     * @var IOStream[]
     */
    protected static $streams = [];

    /**
     * Lazy stream getter & initializer method
     *
     * @param string $stream The stream short name
     *
     * @return IOStream
     */
    public static function get($stream)
    {
        if (!self::supports($stream)) {
            throw new UnsupportedStreamException($stream);
        }

        if (\array_key_exists($stream, self::$streams)) {
            return self::$streams[$stream];
        }

        return self::add($stream);
    }

    /**
     * Create a new stream wrapper instance and store it in the registry
     *
     * @param string $stream The stream short name
     *
     * @return IOStream
     */
    public static function add($stream)
    {
        $member = StreamFactory::create($stream);

        return self::$streams[$stream] = $member;
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
        return in_array($stream, [IOStream::STDIN, IOStream::STDOUT, IOStream::STDERR]);
    }
}
