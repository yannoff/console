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
 * Class ASCII
 * ASCII character/sequence representation constants
 *
 * @package Yannoff\Component\Console\IO
 */
class ASCII
{
    /**
     * New line string representations
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
}
