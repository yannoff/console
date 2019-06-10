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

/**
 * Class IOStream
 * Helper class for standard input/output streams interactions
 *
 * @package Yannoff\Component\Console\IO
 */
class IOStream
{
    /** @var int File descriptor 0 : STDIN */
    const FD0 = 0;

    /** @var int File descriptor 1 : STDOUT */
    const FD1 = 1;

    /** @var int File descriptor 2 : STDERR */
    const FD2 = 2;

    /**
     * Read & return the given stream or file contents
     *
     * @param mixed $name The stream to read from
     *
     * @return bool|false|string
     */
    public static function get($name = null)
    {
        switch ($name):
            case self::FD0:
            case STDIN:
            case null:
                return stream_get_contents(STDIN);

            // TODO Handle exotic file descriptors (eg: /dev/fd/63)
            default:
                return file_get_contents($name);
        endswitch;
    }

    /**
     * Write contents to the given stream or file
     *
     * @param mixed $name     The stream to write to
     * @param mixed $contents The contents to write
     *
     * @return bool|int
     */
    public static function put($name, $contents = null)
    {
        switch ($name):
            case self::FD1:
            case STDOUT:
                $fh = STDOUT;
                break;

            case self::FD2:
            case STDERR:
                $fh = STDERR;
                break;

            default:
                $fh = fopen($name, 'ab');
                break;
        endswitch;

        return fwrite($fh, $contents);
    }
}
