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

namespace Yannoff\Component\Console\IO;

use Yannoff\Component\Console\Exception\IO\UnsupportedStreamException;
use Yannoff\Component\Console\IO\Stream\IOStream;
use Yannoff\Component\Console\IO\Stream\IOWriter;
use Yannoff\Component\Console\IO\Stream\IOReader;

/**
 * Class StreamInitializer
 * External initializer for classes using StreamAwareTrait
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
    protected static function &get($target, $stream)
    {
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
     * Lazy IO reader getter & initializer method
     * Initialize the given reader (if necessary) and return it by reference
     *
     * @param object $target The object owning the reader property
     * @param string $stream The IO reader short name
     *
     * @return IOReader
     */
    public static function &getReader($target, $stream)
    {
        if (! self::supportsReader($stream)) {
            throw new UnsupportedStreamException($stream);
        }

        return self::get($target, $stream);
    }

    /**
     * Lazy IO writer getter & initializer method
     * Initialize the given writer (if necessary) and return it by reference
     *
     * @param object $target The object owning the writer property
     * @param string $stream The IO writer short name
     *
     * @return IOWriter
     */
    public static function &getWriter($target, $stream)
    {
        if (! self::supportsWriter($stream)) {
            throw new UnsupportedStreamException($stream);
        }

        return self::get($target, $stream);
    }

    /**
     * Validate the queried IO reader short name
     *
     * @param string $stream The reader's short name
     *
     * @return bool
     */
    public static function supportsReader($stream)
    {
        return in_array($stream, [ IOStream::STDIN ]);
    }

    /**
     * Validate the queried IO writer short name
     *
     * @param string $stream The writer's short name
     *
     * @return bool
     */
    public static function supportsWriter($stream)
    {
        return in_array($stream, [ IOStream::STDOUT, IOStream::STDERR ]);
    }
}
