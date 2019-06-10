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

namespace Yannoff\Component\Console\IO\Output;

use Yannoff\Component\Console\IO\Output\DosOutputFormatter;
use Yannoff\Component\Console\IO\Output\FlatOutputFormatter;
use Yannoff\Component\Console\IO\Output\PosixOutputFormatter;

/**
 * Class OutputFormatter
 * Helper class for console output rendering
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class OutputFormatter
{
    /**
     * Store the singleton instance
     *
     * @var OutputFormatter
     */
    protected static $instance;

    /**
     * Mapping between pseudo-tags and terminal modifiers
     */
    protected $tags = [
        'strong' => [ 'open' => '01m', 'close' => '00m' ],
        'black' => ['open' => '00;30m', 'close' => '00m'],
        'red' => ['open' => '00;31m', 'close' => '00m'],
        'green' => ['open' => '00;32m', 'close' => '00m'],
        'yellow' => ['open' => '00;33m', 'close' => '00m'],
        'blue' => ['open' => '00;34m', 'close' => '00m'],
        'magenta' => ['open' => '00;35m', 'close' => '00m'],
        'cyan' => ['open' => '00;36m', 'close' => '00m'],
        'white' => ['open' => '00;37m', 'close' => '00m'],
        'default' => ['open' => '00m', 'close' => '00m'],
        // A few Symfony Console formatter compatible tags
        'bold' => [ 'open' => '01m', 'close' => '00m' ],
        'error' => ['open' => '00;31m', 'close' => '00m'],
        'info' => ['open' => '00;32m', 'close' => '00m'],
        'comment' => ['open' => '00;33m', 'close' => '00m'],
        'question' => ['open' => '00;36m', 'close' => '00m'],
    ];

    /**
     * Render the given string into a terminal-compatible format
     *
     * @param string $text
     *
     * @return string
     */
    public static function format($text)
    {
        return self::getInstance()->render($text);
    }

    /**
     * OutputFormatter factory method
     *
     * @param string $os The target Operating System
     * Depending on the OS, a different output formatter may be instanciated
     *
     * @return OutputFormatter
     */
    protected static function create($os = 'Linux')
    {
        switch ($os):
            case 'Linux':
            case 'Darwin':
                return new PosixOutputFormatter();

            case 'Windows':
                return new DosOutputFormatter();

            default:
                return new FlatOutputFormatter();
        endswitch;
    }

    /**
     * Static getter for the singleton instance
     *
     * @return self
     */
    protected static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = self::create();
        }

        return self::$instance;
    }

    /**
     * Render the given string into a terminal-compatible format
     *
     * @param string $text The pre-formatted text to be rendered
     *
     * @return string
     * @internal
     */
    protected function render($text)
    {
        foreach ($this->tags as $tag => $modifiers) {
            $text = $this->replace($text, $tag, $modifiers['open'], $modifiers['close']);
        }

        // Hack to remove extra backslashes added accidentally
        $text = stripcslashes($text);

        return $text;
    }

    /**
     * Substitute all tag occurences by their modifiers counterparts
     *
     * @param string $text  The text to format
     * @param string $tag   The tag to be replaced
     * @param string $open  The opening tag substitution
     * @param string $close The closing tag substitution
     *
     * @return string
     * @internal
     */
    protected function replace($text, $tag, $open, $close)
    {
        $in = sprintf('/<%1$s>([^<]*)<\/%1$s>/', $tag);
        $out = sprintf("\\\033[%s$1\\\033[%s", $open, $close);
        $text = preg_replace($in, $out, $text);

        return $text;
    }
}
