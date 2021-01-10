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

namespace Yannoff\Component\Console\IO\Stream;

use Yannoff\Component\Console\Exception\IO\StreamLogicException;
use Yannoff\Component\Console\Exception\UndefinedConstantException;
use Yannoff\Component\Console\IO\ConstantAccessor;

/**
 * Class Wrapper
 *
 * Super-class for PHP I/O Stream wrappers (both writers & readers)
 *
 * @package Yannoff\Component\Console\IO\Stream
 */
class Wrapper
{
    /**
     * Handle to the stream wrapper
     *
     * @var resource
     */
    protected $handle;

    /**
     * Wrapper constructor.
     */
    public function __construct()
    {
        $this->bind();
    }

    /**
     * Wrapper destructor
     * Free the stream handle resource
     */
    public function __destruct()
    {
        $this->free();
    }

    /**
     * Bind the wrapper stream resource
     */
    protected function bind()
    {
        $this->handle = fopen($this->getURI(), $this->getOpenMode());
    }

    /**
     * Unbind the wrapper stream resource
     */
    protected function free()
    {
        is_resource($this->handle) && fclose($this->handle);
    }

    /**
     * Build the PHP stream wrapper URI using the child class NAME constant
     *
     * @return string
     */
    public function getURI()
    {
        $wrapper = $this->constant('NAME');

        return sprintf('php://%s', $wrapper);
    }

    /**
     * Build the PHP stream wrapper fopen() mode using the child class MODE constant
     *
     * @return string
     */
    public function getOpenMode()
    {
        return $this->constant('MODE');
    }

    /**
     * Generic getter for Wrapper child classes constants
     *
     * @param string $name The class constant name
     *
     * @return mixed
     * @throws StreamLogicException If the queried constant is not defined
     */
    protected function constant($name = '')
    {
        try {
            return ConstantAccessor::get($name, static::class);
        } catch (UndefinedConstantException $e) {
            $message = sprintf('Classes extending "%s" must have the "%s" constant defined', __CLASS__, $e->getName());
            throw new StreamLogicException($message);
        }
    }
}
