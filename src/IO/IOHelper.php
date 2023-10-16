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

use Yannoff\Component\Console\Exception\IO\UnsupportedStreamException;
use Yannoff\Component\Console\IO\Output\FormatterRegistry;
use Yannoff\Component\Console\IO\Output\Verbosity;
use Yannoff\Component\Console\IO\Stream\IOStream;
use Yannoff\Component\Console\IO\Stream\IOWriter;
use Yannoff\Component\Console\IO\Stream\StandardError;
use Yannoff\Component\Console\IO\Stream\StandardInput;
use Yannoff\Component\Console\IO\Stream\StandardOutput;

/**
 * Class IOHelper
 * Provide a set of I/O read & write helper methods
 *
 * @property-read StandardInput  $stdin
 * @property-read StandardError  $stderr
 * @property-read StandardOutput $stdout
 *
 * @package Yannoff\Component\Console\IO
 */
trait IOHelper
{
    /**
     * Magic getter method for the input/output streams pseudo-properties
     *
     * In case one may need to define a proper magic getter in the class using IOHelper,
     * this method should be imported as an alias, and called by the final __get() implementation
     * Ex:
     * 
     * class AcmeClass {
     *
     *     // Import method as an alias
     *     use IOHelper {
     *         __get as __stream_get;
     *     }
     *
     *     // Implement proper magic getter
     *     public function __get($name)
     *     {
     *         // Put user-defined logic here
     *         // ...
     *
     *         // Finally call the trait method
     *         return $this->__stream_get($name);
     *     }
     * }
     *
     * @param string $name The stream name: stdin, stdout or stderr
     *
     * @return IOStream
     *
     * @throws UnsupportedStreamException If the requested stream is not stdin, stdout or stderr
     */
    final public function __get($name)
    {
        return StreamRegistry::get($name);
    }

    /**
     * Change the main application verbosity level
     *
     * @param int $verbosity
     *
     * @return self
     */
    public function setVerbosity($verbosity)
    {
        Verbosity::set($verbosity);

        return $this;
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
        return $this->stdin->read($interactive);
    }

    /**
     * Print text to STDERR
     *
     * @param string $text   The text to print (defaults to empty string)
     * @param string $ending Ending character or text
     *
     * @return bool|int
     */
    public function error($text = '', $ending = ASCII::LF)
    {
        return $this->output($this->stderr, $text, $ending);
    }

    /**
     * Print text to STDOUT
     *
     * @param string $text   The text to print (defaults to empty string)
     * @param string $ending Ending character or text
     *
     * @return bool|int
     */
    public function write($text = '', $ending = ASCII::LF)
    {
        return $this->output($this->stdout, $text, $ending);
    }

    /**
     * Print a message on stderr if priority is relevant compared to the main verbosity level
     *
     * @param string $message
     * @param int    $level
     */
    protected function dmesg($message, $level = Verbosity::ERROR)
    {
        if ($level <= Verbosity::$level) {
            $this->output($this->stderr, $message);
        }
    }

    /**
     * Print contents to the given output
     *
     * @param IOWriter $stream   The output stream wrapper
     * @param string   $contents The text to print (defaults to empty string)
     * @param string   $ending   Ending character or text (defaults to "\n")
     *
     * @return bool|int
     */
    private function output(IOWriter $stream, $contents = '', $ending = ASCII::LF)
    {
        $contents = FormatterRegistry::get($stream)->format($contents);

        return $stream->write($contents, $ending);
    }
}
