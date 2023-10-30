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

namespace Yannoff\Component\Console\IO\Output\Posix;

use Yannoff\Component\Console\Exception\LogicException;

/**
 * Class TagMap
 *
 * Map pseudo-tags and terminal modifiers
 *
 * @package Yannoff\Component\Console\IO\Output\Posix
 */
class TagMap
{
    /**
     * Mapping between pseudo-tags and terminal modifiers
     */
    static protected $tags = [
        'strong'   => '01m',
        'black'    => '00;30m',
        'grey'     => '01;30m',
        'red'      => '00;31m',
        'green'    => '00;32m',
        'yellow'   => '00;33m',
        'blue'     => '00;34m',
        'magenta'  => '00;35m',
        'cyan'     => '00;36m',
        'white'    => '00;37m',
        'default'  => '00m',
        // A few Symfony Console formatter compatible tags
        'bold'     => '01m',
        'error'    => '00;31m',
        'info'     => '00;32m',
        'comment'  => '00;33m',
        'question' => '00;36m',
    ];

    /**
     * Check whether the given tag is supported
     *
     * @param string $tag The tag name
     *
     * @return bool
     */
    public static function has($tag)
    {
        return \array_key_exists($tag, self::$tags);
    }

    /**
     * Get the terminal modifier associated with the given tag
     *
     * @param string $tag The tag name
     *
     * @return string
     *
     * @throws LogicException If the queried tag is unknown
     */
    public static function get($tag)
    {
        if (! self::has($tag)) {
            $error = \sprintf('Unsupported "%s" tag', $tag);
            throw new LogicException($error);
        }
        
        return self::$tags[$tag];
    }
}
