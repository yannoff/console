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

use Yannoff\Component\Console\IO\Stream\StandardError;
use Yannoff\Component\Console\IO\Stream\StandardInput;
use Yannoff\Component\Console\IO\Stream\StandardOutput;
use Yannoff\Component\Console\IO\Stream\Wrapper;

/**
 * Class StreamAware
 * Provide access to IO Stream Readers & Writers
 *
 * @property-read StandardInput  $stdin
 * @property-read StandardError  $stderr
 * @property-read StandardOutput $stdout
 *
 * @package Yannoff\Component\Console\IO
 */
class StreamAware
{
    /** @var StandardInput */
    private $stdin;

    /** @var StandardError */
    private $stderr;

    /** @var StandardOutput */
    private $stdout;

    /**
     * Magic getter method for the input/output streams
     *
     * @param string $name The stream name: stdin, stdout or stderr
     *
     * @return Wrapper
     */
    public function __get($name)
    {
        return StreamInitializer::get($this, $name);
    }
}
