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

namespace Yannoff\Component\Console\Exception\Definition;

use Exception;
use Yannoff\Component\Console\Definition\Argument;
use Yannoff\Component\Console\Exception\FatalException;
use Yannoff\Component\Console\Exception\ResolverException;

/**
 * Class MissingArgumentsException
 *
 * Thrown by ArgvResolver when some missing arguments identified (not supplied by the user which have no default value)
 *
 * @package Yannoff\Component\Console\Exception\Definition
 */
class MissingArgumentsException extends FatalException implements ResolverException
{
    /**
     * @var Argument[]
     */
    protected $args;

    /**
     * MissingArgumentsException constructor.
     *
     * @param Argument[]     $args     List of the missing queried arguments (one or more)
     * @param int            $code     Error status code to be sent to the terminal (defaults to 128)
     * @param Exception|null $previous Optional parent exception
     */
    public function __construct($args = [], $code = 128, Exception $previous = null)
    {
        $this->args = $args;

        // Force automatic type-casting thanks to the Argument::__toString() method
        $names = implode(', ', $args);

        $message = sprintf('One or more mandatory args where not supplied (and have no default value): [%s]', $names);
        parent::__construct($message, $code, $previous);
    }

    /**
     * Getter for the missing arguments
     *
     * @return Argument[]
     */
    public function getArguments()
    {
        return $this->args;
    }
}
