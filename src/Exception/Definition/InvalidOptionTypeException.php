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
 * Class InvalidOptionTypeException
 *
 * Thrown by Option constructor when an invalid value was supplied for the type property
 *
 * @package Yannoff\Component\Console\Exception\Definition
 */
class InvalidOptionTypeException extends LogicException implements DefinitionException
{
    /**
     * InvalidOptionTypeException constructor.
     *
     * @param string         $name     Name of the option with invalid type
     * @param mixed          $value    Value of the invalid option type
     * @param int            $code     Error status code to be sent to the terminal (defaults to 128)
     * @param Exception|null $previous Optional parent exception
     */
    public function __construct($name, $value = "", $code = 128, Exception $previous = null)
    {
        $message = sprintf('Invalid type "%s" for option "%s". Should be either Option::FLAG or Option::VALUE', $value, $name);
        parent::__construct($message, $code, $previous);
    }
}
