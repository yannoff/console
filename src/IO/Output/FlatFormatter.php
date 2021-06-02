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
 * Class FlatFormatter
 * The fallback formatter used in case of non-compatible OS
 * Strip all tags and output raw text
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class FlatFormatter implements Formatter
{
    /**
     * {@inheritdoc}
     */
    public function format($text)
    {
        return strip_tags($text);
    }
}
