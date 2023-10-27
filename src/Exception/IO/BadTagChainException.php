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
 * Class BadTagChainException
 *
 * Thrown by PosixFormatter::format() when tags precedence
 * is not respected
 *
 * Eg: "<strong>My bad<blue>chain</strong> text</blue>"
 *
 * @package Yannoff\Component\Console\Exception\IO
 */
class BadTagChainException extends LogicException
{
}
