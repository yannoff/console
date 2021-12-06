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

namespace Yannoff\Component\Console\Exception\Definition;

use Exception;
use Yannoff\Component\Console\Exception\ResolverException;
use Yannoff\Component\Console\Exception\RuntimeException;

/**
 * Class TooManyArgumentsException
 *
 * Thrown when the command is invoked with an excessive number of arguments
 *
 * @package Yannoff\Component\Console\Exception\Definition
 */
class TooManyArgumentsException extends RuntimeException implements ResolverException
{
    /**
     * TooManyArgumentsException constructor.
     *
     * @param mixed          $value    Overflowing argument value
     * @param int            $pos      Overflowing argument position
     * @param int            $max      Total number of defined arguments
     * @param int            $code     Error status code to be sent to the terminal (defaults to 128)
     * @param Exception|null $previous Optional parent exception
     */
    public function __construct($value, $pos, $max, $code = 128, Exception $previous = null)
    {
        $message = sprintf('Too many arguments (%s): max: %s, given: %s', $value, $max, $pos);
        parent::__construct($message, $code, $previous);
    }
}
