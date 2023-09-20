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
     * Handler method for runtime exceptions
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
                    $error = sprintf('%s: Missing argument "%s".', 'Error', $arg);
                    $callee->error($error);
                }
                break;

            default:
                $error = sprintf('%s: %s.', 'Error', $exception->getMessage());
                $callee->error($error);
                break;
        endswitch;

        return $exception->getCode();
    }
}
