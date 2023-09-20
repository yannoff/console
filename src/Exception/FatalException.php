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

namespace Yannoff\Component\Console\Exception;

/**
 * Class FatalException
 * Represent a blocking exception: when raised code execution should terminate
 *
 * @package Yannoff\Component\Console\Exception
 */
class FatalException extends RuntimeException
{
    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return sprintf('Fatal: %s (code: %s)', $this->message, $this->code);
    }
}
