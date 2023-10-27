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

use Yannoff\Component\Console\Exception\LogicException;

/**
 * Class TagMismatchException
 *
 * Thrown by PosixFormatter::format() when trying to
 * close a tag that was not previously opened
 *
 * Eg: "This is my text</strong> with a mismatch"
 *
 * @package Yannoff\Component\Console\Exception\IO
 */
class TagMismatchException extends LogicException
{
}
