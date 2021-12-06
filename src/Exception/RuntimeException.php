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

namespace Yannoff\Component\Console\Exception;

use Exception;
use RuntimeException as BaseRuntimeException;

/**
 * Class RuntimeException
 *
 * Base class for exceptions raised by an application user mistaken usage
 *
 * @package Yannoff\Component\Console\Exception
 */
class RuntimeException extends BaseRuntimeException
{
    /**
     * RuntimeException constructor.
     *
     * @param string         $message  Error message
     * @param int            $code     Error status code to be sent to the terminal (defaults to 1)
     * @param Exception|null $previous Optional parent in exception chaining
     */
    public function __construct($message = "", $code = 1, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Default string cast-type formatter for RuntimeExceptions
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('Warning: %s (code: %s)', $this->message, $this->code);
    }
}
