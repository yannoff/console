<?php

/**
 * This file is part of the yannoff/console library
 * (c) Yannoff (https://github.com/yannoff)
 *
 * @project   yannoff/console
 * @link      https://github.com/yannoff/console
 * @license   https://github.com/yannoff/console/blob/master/LICENSE
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yannoff\Component\Console;

use Yannoff\Component\Console\IO\IOHelper;

/**
 * Class Logger
 *
 * Application-wide accessible logging facade
 *
 * @package Yannoff\Component\Console
 */
class Logger
{
    use IOHelper;

    /**
     * Singleton instance holder
     *
     * @var self
     */
    static protected $instance;

    /**
     * Getter/Initializer for the singleton instance
     *
     * @return self
     */
    protected function get()
    {
        if (null === self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    /**
     * Print the message to STDOUT
     *
     * @param string $message
     *
     * @return self
     */
    static public function out($message)
    {
        self::get()->stdout->write($message);

        return static;
    }

    /**
     * Print the message to STDERR
     *
     * @param string $message
     *
     * @return self
     */
    static public function err($message)
    {
        self::get()->stderr->write($message);

        return static;
    }
}
