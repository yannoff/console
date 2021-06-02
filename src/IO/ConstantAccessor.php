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

namespace Yannoff\Component\Console\IO;

use Yannoff\Component\Console\Exception\UndefinedConstantException;

/**
 * Class ConstantAccessor
 *
 * Allow access to class constants
 *
 * @package Yannoff\Component\Console\IO
 */
class ConstantAccessor
{
    /**
     * Generic getter for class constants
     *
     * @param string $name   Name of the class constant
     * @param string $target Target class (defaults to *static*)
     *
     * @return mixed
     * @throws UndefinedConstantException If the queried class constant is not defined
     */
    public static function get($name = '', $target = 'static')
    {
        $constant = sprintf('%s::%s', $target, $name);

        if (!defined($constant)) {
            throw new UndefinedConstantException($name, $target);
        }

        return constant($constant);
    }
}
