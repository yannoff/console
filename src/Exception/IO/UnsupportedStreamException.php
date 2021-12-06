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

namespace Yannoff\Component\Console\Exception\IO;

use Exception;

/**
 * Class UnsupportedStreamException
 *
 * Thrown by StreamFactory when queried an unsupported stream short name
 *
 * @package Yannoff\Component\Console\Exception\IO
 */
class UnsupportedStreamException extends StreamLogicException
{
    /**
     * UnsupportedStreamException constructor.
     *
     * @param string         $stream   Queried stream short name
     * @param int            $code     Error status code to be sent to the terminal (defaults to 1)
     * @param Exception|null $previous Optional parent exception
     */
    public function __construct($stream = "", $code = 1, Exception $previous = null)
    {
        $message = sprintf('Unsupported "%s" stream', $stream);
        parent::__construct($message, $code, $previous);
    }
}
