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

namespace Yannoff\Component\Console\Exception\Command;

use Exception;
use Yannoff\Component\Console\Exception\CommandException;
use Yannoff\Component\Console\Exception\RuntimeException;

/**
 * Class UnknownCommandException
 *
 * Thrown when the application script is invoked with a command name unknown to the registry
 *
 * @package Yannoff\Component\Console\Exception\Command
 */
class UnknownCommandException extends RuntimeException implements CommandException
{
    /**
     * UnknownCommandException constructor.
     *
     * @param string         $name     Name of the queried command
     * @param int            $code     Error status code to be sent to the terminal (defaults to 127)
     * @param Exception|null $previous Optional parent exception
     */
    public function __construct($name = "", $code = 127, Exception $previous = null)
    {
        $message = sprintf('Command with name "%s" not found by the application', $name);
        parent::__construct($message, $code, $previous);
    }
}
