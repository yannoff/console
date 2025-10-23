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

/**
 * Class FStat
 * Handle the inode file statistics
 *
 * @source https://stackoverflow.com/a/11327451
 *
 * @package Yannoff\Component\Console\IO
 */
class FStat
{
    /**
     * Octal mode values from libc headers
     */

    /**
     * Octal formatting value
     * (used to build FStat::imode() method result)
     *
     * @var octal
     */
    const S_IFMT   = 0170000;

    /**
     * Octal mode value for FIFO
     *
     * @var octal
     */
    const S_IFIFO  = 0010000;

    /**
     * Octal mode value for character device
     *
     * @var octal
     */
    const S_IFCHR  = 0020000;

    /**
     * Octal mode value for directory
     *
     * @var octal
     */
    const S_IFDIR  = 0040000;

    /**
     * Octal mode value for block device
     *
     * @var octal
     */
    const S_IFBLK  = 0060000;

    /**
     * Octal mode value for regular file redirect
     *
     * @var octal
     */
    const S_IFREG  = 0100000;

    /**
     * Octal mode value for symlink
     *
     * @var octal
     */
    const S_IFLNK  = 0120000;

    /**
     * Octal mode value for socket
     *
     * @var octal
     */
    const S_IFSOCK = 0140000;

    /**
     * Get the handle current protection mode
     *
     * @param resource $handle
     *
     * @return int
     */
    protected static function imode($handle)
    {
        $stat = fstat($handle);
        return $stat['mode'] & self::S_IFMT;
    }

    /**
     * Check whether the handle is a FIFO
     *
     * @param resource $handle
     *
     * @return bool
     */
    public static function isFifo($handle)
    {
        return self::imode($handle) == self::S_IFIFO;
    }

    /**
     * Check whether the handle is a character
     *
     * @param resource $handle
     *
     * @return bool
     */
    public static function isChar($handle)
    {
        return self::imode($handle) == self::S_IFCHR;
    }

    /**
     * Check whether the handle is a directory
     *
     * @param resource $handle
     *
     * @return bool
     */
    public static function isDir($handle)
    {
        return self::imode($handle) == self::S_IFDIR;
    }

    /**
     * Check whether the handle is a block device
     *
     * @param resource $handle
     *
     * @return bool
     */
    public static function isBlock($handle)
    {
        return self::imode($handle) == self::S_IFBLK;
    }

    /**
     * Check whether the handle is a regular file redirect
     *
     * @param resource $handle
     *
     * @return bool
     */
    public static function isRegularFile($handle)
    {
        return self::imode($handle) == self::S_IFREG;
    }

    /**
     * Check whether the handle is a symlink
     *
     * @param resource $handle
     *
     * @return bool
     */
    public static function isLink($handle)
    {
        return self::imode($handle) == self::S_IFLNK;
    }

    /**
     * Check whether the handle is a socket
     *
     * @param resource $handle
     *
     * @return bool
     */
    public static function isSocket($handle)
    {
        return self::imode($handle) == self::S_IFSOCK;
    }

    /**
     * Check whether the handle is a TTY
     *
     * @param resource $handle
     *
     * @return bool
     */
    public static function isTTY($handle)
    {
        return in_array(self::imode($handle), [self::S_IFIFO, self::S_IFREG]);
    }
}
