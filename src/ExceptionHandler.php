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

namespace Yannoff\Component\Console;

use Exception;
use Yannoff\Component\Console\Exception\Definition\MissingArgumentsException;
use Yannoff\Component\Console\IO\StreamAware;

/**
 * Class ExceptionHandler
 * Handler for all kinds of exceptions
 *
 * @package Yannoff\Component\Console
 */
class ExceptionHandler
{
    /**
     * Handler method for exceptions
     *
     * @param Exception   $exception The thrown exception
     * @param StreamAware $callee    The object calling this method
     *
     * @return int The exception status code
     */
    public static function process(Exception $exception, StreamAware $callee)
    {
        $type = get_class($exception);

        switch ($type):
            case MissingArgumentsException::class:
                /** @var MissingArgumentsException $exception */
                foreach ($exception->getArguments() as $arg) {
                    $callee->error("Error: Mandatory argument '{$arg}' is missing");
                }
                break;

            default:
                $callee->error((string) $exception);
                break;
        endswitch;

        $callee->error('Exiting.');

        return $exception->getCode();
    }
}
