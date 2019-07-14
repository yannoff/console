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

namespace Yannoff\Component\Console\IO\Stream;

/**
 * Class StandardInput
 * Reader stream for standard input (STDIN)
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
class StandardInput implements IOReader
{
    /**
     * The stream short name
     */
    const NAME = IOStream::STDIN;

    /**
     * Handle to the stream to read from
     *
     * @var bool|resource
     */
    protected $handle = STDIN;

    /**
     * {@inheritdoc}
     */
    public function read()
    {
        return stream_get_contents($this->handle);
    }
}
