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

namespace Yannoff\Component\Console\IO\Stream;

use Yannoff\Component\Console\IO\Output\Formatter;

/**
 * Class StandardError
 *
 * Writer stream for standard error (STDERR)
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
class StandardError extends Wrapper implements IOWriter
{
    /**
     * The stream short name
     */
    const NAME = self::STDERR;

    /**
     * The stream open mode
     */
    const MODE = self::APPEND;

    /**
     * {@inheritdoc}
     */
    public function write($contents, $ending = Formatter::LF)
    {
        return fwrite($this->handle, $contents . $ending);
    }
}
