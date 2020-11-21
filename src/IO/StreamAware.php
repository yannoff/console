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

namespace Yannoff\Component\Console\IO;

/**
 * Class StreamAware
 * The main purpose of this super class is to avoid using the trait directly
 * Indeed stream properties should NEVER be accessed directly, as they
 * may not have been instantiated yet
 *
 * @package Yannoff\Component\Console\IO
 */
class StreamAware
{
    use StreamAwareTrait;
}