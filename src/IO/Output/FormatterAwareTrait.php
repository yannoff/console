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

namespace Yannoff\Component\Console\IO\Output;

/**
 * Trait FormatterAwareTrait
 * Provide property & setter for the Formatter instance
 *
 * Purposely, the getter is not included: classes using this trait
 * may need to implement their own business logic
 *
 * @package Yannoff\Component\Console\IO\Output
 */
trait FormatterAwareTrait
{
    /**
     * The formatter instance
     *
     * @var Formatter
     */
    protected $formatter;

    /**
     * Setter for the formatter instance property
     *
     * @param Formatter $formatter The formatter instance
     *
     * @return static The instance of the caller class
     */
    public function setFormatter(Formatter &$formatter)
    {
        $this->formatter = $formatter;

        return $this;
    }
}
