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

use Yannoff\Component\Console\Application;
use Yannoff\Component\Console\IO\ASCII;

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
     */

    /** @var string Short name for Linux OS */
    const OS_LINUX = 'Linux';

    /** @var string Short name for Darwin OS */
    const OS_DARWIN = 'Darwin';

    /** @var string Short name for Cygwin OS */
    const OS_CYGWIN = 'Cygwin';

    /**
     * New line characters or strings
     *
     */

    /**
     * String representation for line-feed
     *
     * @deprecated Use `ASCII::LF` constant instead
     *
     * @var string
     */
    const LF = ASCII::LF;

    /**
     * String representation for carriage return
     *
     * @deprecated Use `ASCII::CR` constant instead
     *
     * @var string
     */
    const CR = ASCII::CR;

    /**
     * String representation for windows new lines
     *
     * @deprecated Use `ASCII::CRLF` constant instead
     *
     * @var string
     */
    const CRLF = ASCII::CRLF;

    /**
     * Tabulation character
     *
     * @deprecated Use `ASCII::TAB` constant instead
     *
     * @var string
     */
    const TAB = ASCII::TAB;

    /**
     * Soft-tab string: 4 spaces
     *
     * @deprecated Use `ASCII::STAB` constant instead
     *
     * @var string
     */
    const STAB = ASCII::STAB;

    /**
     * Minimal left-padding width for the name columns in help
     *
     * @deprecated Use `Application::PAD` constant instead
     *
     * @var string
     */
    const PAD = Application::PAD;

    /**
     * Render the given markup text into a terminal-compatible format
     *
     * @param string $text The pre-formatted text to be rendered
     *
     * @return string
     */
    public function format($text);
}
