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

use Yannoff\Component\Console\IO\Output\OutputFormatter;

/**
 * Class DosOutputFormatter
 * The formatter used in case of non-compatible OS
 * Strip all tags and output raw text
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class FlatOutputFormatter extends OutputFormatter
{

    /**
     * {@inheritdoc}
     */
    protected function render($text)
    {
        foreach ($this->tags as $tag => $modifiers) {
            $text = $in = sprintf('/<%1$s>([^<]*)<\/%1$s>/', $tag);
            $text = preg_replace($in, '', $text);
        }

        return $text;
    }
}
