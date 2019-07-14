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
 * Class StandardOutput
 * Writer stream for standard output (STDOUT)
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
class StandardOutput implements IOWriter
{
    /**
     * The stream short name
     */
    const NAME = IOStream::STDOUT;

    /**
     * Handle to the writable stream
     *
     * @var resource
     */
    protected $handle = STDOUT;

    /**
     * {@inheritdoc}
     */
    public function write($contents)
    {
        return fwrite($this->handle, $contents);
    }
}
