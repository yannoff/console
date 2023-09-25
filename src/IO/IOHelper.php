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

use Yannoff\Component\Console\Exception\LogicException;
use Yannoff\Component\Console\IO\Output\Formatter;
use Yannoff\Component\Console\IO\Output\FormatterRegistry;
use Yannoff\Component\Console\IO\Output\Verbosity;
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
 */
trait IOHelper
{
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
        $this->check();

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
    public function error($text = '', $ending = Formatter::LF)
    {
        $this->check();

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
    public function write($text = '', $ending = Formatter::LF)
    {
        $this->check();

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
            $message = \sprintf("[%s] %s", $this->application->getName(), $message);
            $this->error($message);
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
    private function output(IOWriter $stream, $contents = '', $ending = Formatter::LF)
    {
        $contents = FormatterRegistry::get($stream)->format($contents);

        return $stream->write($contents, $ending);
    }

    /**
     * Check that the class using this trait meet the requirements
     *
     * @throws LogicException
     */
    final private function check()
    {
        if (!$this instanceof StreamAware) {
            throw new LogicException('Classes using IOHelperTrait must inherit from StreamAware');
        }
    }
}
