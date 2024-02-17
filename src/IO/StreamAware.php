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
 * Interface StreamAware
 * Represent objects with stream interaction capabilities
 *
 * @package Yannoff\Component\Console\IO
 */
interface StreamAware
{
    /**
     * Print text to STDERR
     *
     * @param string $text   The text to print (defaults to empty string)
     * @param string $ending Ending character or text
     *
     * @return bool|int
     */
    public function error($text = '', $ending = ASCII::LF);

    /**
     * Print text to STDOUT
     *
     * @param string $text   The text to print (defaults to empty string)
     * @param string $ending Ending character or text
     *
     * @return bool|int
     */
    public function write($text = '', $ending = ASCII::LF);

    /**
     * Read contents from the standard input
     *
     * @param bool $interactive Whether to accept user input
     *
     * @return string|false The contents or **false** in case of failure
     */
    public function read($interactive = false);
}
