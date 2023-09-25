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

/**
 * Interface Formatter
 * Contract for console output formatters
 *
 * @package Yannoff\Component\Console\IO\Output
 */
interface Formatter
{
    /**
     * Supported Operating Systems
     *
     * @var string
     */
    const OS_LINUX = 'Linux';
    const OS_DARWIN = 'Darwin';
    const OS_CYGWIN = 'Cygwin';

    /**
     * Line feed characters or strings
     *
     * @var string
     */
    const LF = "\n";
    const CR = "\r";
    const CRLF = "\r\n";

    /**
     * Tabulation character
     *
     * @var string
     */
    const TAB = "\t";

    /**
     * Soft-tab string: 4 spaces
     *
     * @var string
     */
    const STAB = "    ";

    /**
     * Minimal left-padding width for the name columns in help
     */
    const PAD = 18;

    /**
     * Render the given markup text into a terminal-compatible format
     *
     * @param string $text The pre-formatted text to be rendered
     *
     * @return string
     */
    public function format($text);
}
