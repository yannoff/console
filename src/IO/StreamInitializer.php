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
use Yannoff\Component\Console\IO\Stream\IOWriter;
use Yannoff\Component\Console\IO\Stream\IOReader;

/**
 * Class StreamInitializer
 * External initializer for Stream Aware classes
 *
 * @package Yannoff\Component\Console\IO
 */
final class StreamInitializer
{
    /**
     * Singleton instance to the property accessor
     * Avoid creating a new instance each time initialize() is invoked
     *
     * @var PropertyAccessor
     */
    protected static $accessor;

    /**
     * Lazy stream getter & initializer method
     * Initialize the given stream (if necessary) and return it by reference
     *
     * @param object $target The object owning the stream property
     * @param string $stream The stream short name
     *
     * @return IOReader|IOWriter
     */
    public static function &get($target, $stream)
    {
        if (!self::supports($stream)) {
            throw new UnsupportedStreamException($stream);
        }

        $member = & self::getStream($target, $stream);

        if (null === $member) {
            $member = StreamFactory::create($stream);
        }

        return $member;
    }

    /**
     * Accessor method for any given object's stream property
     *
     * @param object $target
     * @param string $stream
     *
     * @return mixed A reference to the queried stream property
     */
    protected static function &getStream($target, $stream)
    {
        if (null === self::$accessor) {
            self::$accessor = new PropertyAccessor();
        }

        return self::$accessor->get($target, $stream);
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
