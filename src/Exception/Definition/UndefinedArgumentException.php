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

namespace Yannoff\Component\Console\Exception\Definition;

use Exception;
use Yannoff\Component\Console\Exception\DefinitionException;
use Yannoff\Component\Console\Exception\LogicException;

/**
 * Class UndefinedArgumentException
 *
 * Thrown when an undefined argument is queried via Definition::getArgument()
 *
 * @package Yannoff\Component\Console\Exception\Definition
 */
class UndefinedArgumentException extends LogicException implements DefinitionException
{
    /**
     * UndefinedArgumentException constructor.
     *
     * @param string         $name     Name of the queried argument
     * @param int            $code     Error status code to be sent to the terminal (defaults to 128)
     * @param Exception|null $previous Optional parent exception
     */
    public function __construct($name = "", $code = 128, Exception $previous = null)
    {
        $message = sprintf('Queried argument "%s" is not defined', $name);
        parent::__construct($message, $code, $previous);
    }
}
