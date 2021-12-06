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

/**
 * Class UndefinedConstantException
 *
 * Thrown by ConstantAccessor::get() when queried class constant is not defined
 *
 * @package Yannoff\Component\Console\Exception
 */
class UndefinedConstantException extends LogicException
{
    /**
     * Name of the undefined constant
     *
     * @var string
     */
    protected $name;

    /**
     * Name of the class supposed to define the constant
     *
     * @var string
     */
    protected $target;

    /**
     * UndefinedConstantException constructor.
     *
     * @param string         $name     Name of the undefined constant
     * @param string         $target   Class the constant should be found in
     * @param int            $code     Error status code to be sent to the terminal (defaults to 1)
     * @param Exception|null $previous Optional parent in exception chaining
     */
    public function __construct($name = '', $target = '', $code = 1, Exception $previous = null)
    {
        $this->name = $name;
        $this->target = $target;

        $message = sprintf('Undefined "%s::%s" class constant', $target, $name);
        parent::__construct($message, $code, $previous);
    }

    /**
     * Getter for the $name property
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Getter for the $target property
     *
     * @return string
     */
    public function getClass()
    {
        return $this->target;
    }
}
