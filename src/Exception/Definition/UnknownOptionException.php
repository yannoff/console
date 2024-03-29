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
 * Class UnknownOptionException
 *
 * Thrown when the command is invoked with an unknown option
 *
 * @package Yannoff\Component\Console\Exception\Definition
 */
class UnknownOptionException extends RuntimeException implements ResolverException
{
    /**
     * UnknownOptionException constructor.
     *
     * @param string         $name     Name of the queried option
     * @param int            $code     Error status code to be sent to the terminal (defaults to 128)
     * @param Exception|null $previous Optional parent exception
     */
    public function __construct($name = "", $code = 128, Exception $previous = null)
    {
        $message = sprintf('Unrecognized "%s" option', $name);
        parent::__construct($message, $code, $previous);
    }
}
