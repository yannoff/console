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

namespace Yannoff\Component\Console\IO;

use Closure;

/**
 * Class PropertyAccessor
 * The only purpose for this class is to allow StreamInitializer to access the private stream properties by reference
 *
 * It would have been simpler to include the code block directly inside StreamInitializer::initialize(),
 * but a bug introduced in PHP 5.6.x forbid us to invoke a closure that way from inside a static method
 *
 * @see https://bugs.php.net/bug.php?id=68792
 *
 * @package Yannoff\Component\Console\IO
 */
class PropertyAccessor
{
    /**
     * Return a reference to the queried property on the given object
     *
     * @source https://ocramius.github.io/blog/accessing-private-php-class-members-without-reflection/
     *
     * @param mixed  $object   Any object
     * @param string $property Property of the object
     *
     * @return mixed The property, by reference
     */
    public function & get (StreamAware $object, $property)
    {
        $value = & Closure::bind(function & () use ($property) {
            return $this->{$property};
        }, $object, $object)->__invoke();

        return $value;
    }
}
