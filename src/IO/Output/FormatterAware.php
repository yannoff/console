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

/**
 * Interface FormatterAware
 * Contract for classes having a Formatter instance injected
 *
 * @package Yannoff\Component\Console\IO\Output
 */
interface FormatterAware
{
    /**
     * Setter for the formatter instance property
     *
     * @param Formatter $formatter The formatter instance
     *
     * @return self The instance of the caller class
     */
    public function setFormatter(Formatter &$formatter);

    /**
     * Getter for the formatter instance property
     *
     * @return Formatter The formatter instance
     */
    public function getFormatter();
}
