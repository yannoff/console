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
 * Class StandardInput
 *
 * Reader stream for standard input (STDIN)
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
class StandardInput extends Wrapper implements IOReader
{
    /**
     * The stream short name
     */
    const NAME = self::STDIN;

    /**
     * The stream open mode
     */
    const MODE = self::READONLY;

    /**
     * {@inheritdoc}
     */
    public function read()
    {
        return stream_get_contents($this->handle);
    }
}
