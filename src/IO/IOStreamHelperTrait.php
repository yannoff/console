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

namespace Yannoff\Component\Console\IO;

use Yannoff\Component\Console\IO\Output\OutputFormatter;

/**
 * Trait IOStreamTrait
 * Provide helper methods to interact with standard input/output streams
 *
 * @package Yannoff\Component\Console\IO
 */
trait IOStreamHelperTrait
{
    /**
     * Fetch contents from standard input (STDIN)
     *
     * @return bool|false|string
     */
    public function in()
    {
        return IOStream::get();
    }

    /**
     * Print text to standard error (STDERR)
     *
     * @param string $text The text to print
     * @param bool   $nl   Wether to append a new line feed after the text
     *
     * @return bool|int
     */
    public function err($text, $nl = true)
    {
        $text = $this->addLineFeed($text, $nl);
        return IOStream::put(IOStream::FD2, $text);
    }

    /**
     * Print text to standard output (STDOUT)
     *
     * @param string $text The text to print
     * @param bool   $nl   Wether to append a new line feed after the text
     *
     * @return bool|int
     */
    public function out($text, $nl = true)
    {
        $text = $this->addLineFeed($text, $nl);
        return IOStream::put(IOStream::FD1, $text);
    }

    /**
     * Print text either to STDOUT or STDERR
     *
     * @param string $text    The text to print
     * @param null   $options Kept for symfony BC, but ignored
     * @param mixed  $stream  Where to redirect output (defaults to STDOUT)
     *
     * @return bool|int
     */
    public function writeln($text, $options = null, $stream = IOStream::FD1)
    {
        $text = OutputFormatter::format($text);
        $text .= $this->getLineFeed();

        return IOStream::put($stream, $text);
    }

    /**
     * Give the new line feed character(s)
     *
     * @return string
     */
    protected function getLineFeed()
    {
        return "\n";
    }

    /**
     * Decorate text, appending a new line feed if requested
     *
     * @param string $text The text to decorate
     * @param bool   $feed Enable or disable new line feed
     *
     * @return string
     */
    protected function addLineFeed($text, $feed = true)
    {
        if (false === $feed) {
            return $text;
        }

        return sprintf("%s%s", $text, $this->getLineFeed());
    }
}
