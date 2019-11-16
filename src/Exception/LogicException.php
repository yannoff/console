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

namespace Yannoff\Component\Console\Exception;

use LogicException as BaseLogicException;
use Exception;

/**
 * Class LogicException
 *
 * Base class for exceptions raised by a misconception in the command or application code
 *
 * @package Yannoff\Component\Console\Exception
 */
class LogicException extends BaseLogicException
{
    /**
     * LogicException constructor.
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
     * Default string cast-type formatter for LogicExceptions
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('Fatal: %s (code: %s)', $this->message, $this->code);
    }
}