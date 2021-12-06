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

/**
 * Class StandardOutput
 *
 * Writer stream for standard output (STDOUT)
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
class StandardOutput extends Wrapper implements IOWriter
{
    /**
     * The stream short name
     */
    const NAME = self::STDOUT;

    /**
     * The stream open mode
     */
    const MODE = self::APPEND;

    /**
     * {@inheritdoc}
     */
    public function write($contents)
    {
        return fwrite($this->handle, $contents);
    }
}
