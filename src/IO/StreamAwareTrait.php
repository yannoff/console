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

use Yannoff\Component\Console\IO\Output\Formatter;
use Yannoff\Component\Console\IO\Stream\IOStream;
use Yannoff\Component\Console\IO\Stream\StandardError;
use Yannoff\Component\Console\IO\Stream\StandardInput;
use Yannoff\Component\Console\IO\Stream\StandardOutput;

/**
 * Trait StreamAwareTrait
 * Provide proxy methods to IO Stream Readers & Writers
 * This trait should always be used in abstract classes,
 * this ensures that streams won't be accessed directly
 *
 * @package Yannoff\Component\Console\IO
 */
trait StreamAwareTrait
{
    /** @var StandardInput */
    private $stdin;

    /** @var StandardError */
    private $stderr;

    /** @var StandardOutput */
    private $stdout;

    /**
     * Print a message to standard output with the given ending string
     *
     * @param string $message The message to print (defaults to empty string)
     * @param string $ending  The ending string (defaults to "\n")
     *
     * @return int|false Number of bytes written or **false** on error
     */
    public function write($message = '', $ending = Formatter::LF)
    {
        $writer = StreamInitializer::getWriter($this, IOStream::STDOUT);

        return $writer->write($message . $ending);
    }

    /**
     * Print a message to standard error with the given ending char
     *
     * @param string $message The message to print (defaults to empty string)
     * @param string $ending  The ending string (defaults to "\n")
     *
     * @return int|false Number of bytes written or **false** on error
     */
    public function error($message = '', $ending = Formatter::LF)
    {
        $writer = StreamInitializer::getWriter($this, IOStream::STDERR);

        return $writer->write($message . $ending);
    }

    /**
     * Read contents from the standard input
     *
     * @param bool $interactive Whether to accept user input
     *
     * @return string|false The contents or **false** in case of failure
     */
    public function read($interactive = false)
    {
        $reader = StreamInitializer::getReader($this, IOStream::STDIN);

        return $reader->read($interactive);
    }

    /**
     * Trigger a deprecation error message
     *
     * @param string The deprecated method name
     */
    private function deprecate($method)
    {
        list(, $name) = explode('::', $method);
        $replacement = substr($name, 2);
        $error = sprintf(
            'Method "%s::%s()" will be removed in version 2.0.0, use "%s()" instead.',
            get_parent_class(static::class),
            $name,
            $replacement
        );
        trigger_error($error, \E_USER_DEPRECATED);
    }

    /**
     * Print a message to standard output with the given ending string
     *
     * @param string $message The message to print (defaults to empty string)
     * @param string $ending  The ending string (defaults to "\n")
     *
     * @return int|false Number of bytes written or **false** on error
     *
     * @deprecated Support will be removed in version 2.0.0
     */
    public function iowrite($message = '', $ending = Formatter::LF)
    {
        $this->deprecate(__METHOD__);

        return $this->write($message, $ending);
    }

    /**
     * Print a message to standard error with the given ending char
     *
     * @param string $message The message to print (defaults to empty string)
     * @param string $ending  The ending string (defaults to "\n")
     *
     * @return int|false Number of bytes written or **false** on error
     *
     * @deprecated Support will be removed in version 2.0.0
     */
    public function ioerror($message = '', $ending = Formatter::LF)
    {
        $this->deprecate(__METHOD__);

        return $this->error($message, $ending);
    }

    /**
     * Read contents from the standard input
     *
     * @param bool $interactive Whether to accept user input
     *
     * @return string|false The contents or **false** in case of failure
     *
     * @deprecated Support will be removed in version 2.0.0
     */
    public function ioread($interactive = false)
    {
        $this->deprecate(__METHOD__);

        return $this->read($interactive);
    }
}
