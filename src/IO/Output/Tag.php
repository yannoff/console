<?php
/**
 * This file is part of the yannoff/console library
 * (c) Yannoff (https://github.com/yannoff)
 *
 * @project   yannoff/console
 * @link      https://github.com/yannoff/console
 * @license   https://github.com/yannoff/console/blob/master/LICENSE
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yannoff\Component\Console\IO\Output;

/**
 * Class Tag
 * Object representation for styling pseudo-tags
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class Tag
{
    /**
     * The tag name
     *
     * @var string
     */
    protected $name;

    /**
     * The terminal color setting sequence
     *
     * @var string
     */
    protected $tput;

    /**
     * The terminal color reset sequence
     *
     * @var string
     */
    protected $reset;

    /**
     * Tag constructor.
     *
     * @param string $name  The tag name
     * @param string $tput  The terminal color sequence
     * @param string $reset The terminal reset sequence
     */
    public function __construct($name, $tput, $reset = '00m')
    {
        $this->name = $name;
        $this->tput = $tput;
        $this->reset = $reset;
    }

    /**
     * Prefix the given character sequence with the ASCII escape (\e) char
     *
     * @param string $word The color setting or reset sequence
     *
     * @return string
     */
    protected function esc($word)
    {
        return sprintf("\033[%s", $word);
    }

    /**
     * Return the XML opening tag representation
     *
     * @return string
     */
    public function open()
    {
        return sprintf('<%s>', $this->name);
    }

    /**
     * Return the XML closing tag representation
     *
     * @return string
     */
    public function close()
    {
        return sprintf('</%s>', $this->name);
    }

    /**
     * Return the terminal color setting representation
     *
     * @return string
     */
    public function tput()
    {
        return $this->esc($this->tput);
    }

    /**
     * Return the terminal color reset representation
     *
     * @return string
     */
    public function reset()
    {
        return $this->esc($this->reset);
    }
}
