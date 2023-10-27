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

namespace Yannoff\Component\Console\IO\Output;

use Yannoff\Component\Console\Exception\IO\BadTagChainException;
use Yannoff\Component\Console\Exception\IO\TagMismatchException;
use Yannoff\Component\Console\IO\Output\Posix\AtomicTag;

/**
 * Class PosixFormatter
 *
 * POSIX flavored output formatter
 *
 * @package Yannoff\Component\Console\IO\Output
 */
class PosixFormatter implements Formatter
{
    /**
     * Stack used for tag processing
     *
     * @var TagStack
     */
    protected $stack;

    /**
     * PosixFormatter constructor.
     */
    public function __construct()
    {
        $this->stack = new TagStack();
    }

    /**
     * {@inheritdoc}
     */
    public function format($text)
    {
        $output = [];

        $this->stack->clear();

        foreach ($this->tokenize($text) as $token) {

            // CASE 1: Token is a regular text (not a tag)
            if ($token->isText()) {
                // Add the raw token without processing
                $output[] = (string) $token;
                // Process next token
                continue;
            }

            $tag = new AtomicTag((string) $token);

            // CASE 2: Token is an opening tag
            if ($tag->type == 'open') {
                // If a tag was previously opened, reset before applying the new modifier
                if ($this->stack->count() > 0) {
                    $output[] = $this->stack->last()->close();
                }
                // Add current tag to the opened tags stack
                $this->stack->push($tag);
                // Send current modifier to the terminal
                $output[] = $tag->open();
                // Process next token
                continue;
            } 

            // CASE 3: Token is a closing tag
            if ($this->stack->count() == 0) {
                throw new TagMismatchException(sprintf('Tag open/close mismatch (closing "%s" that was never opened)', $tag->name));
            }
            
            $previous = $this->stack->last();
            
            if ($tag->name != $previous->name) {
                throw new BadTagChainException('Tags precedence was not respected (wrongly nested closing tag)');
            }

            // Close the tag and remove it from the stack
            $output[] = $this->stack->pop()->close();

            // If a tag was previously opened, re-apply its modifier
            if ($this->stack->count() > 0) {
                $output[] = $this->stack->last()->open();
            }
        }

        return implode("", $output);
    }

    /**
     * Tokenize the given markup text
     *
     * @param string $text The pre-formatted text
     *
     * @return Token[]
     */
    public function tokenize($text)
    {
        // Use the ASCII bell character to prevent collision with text contents
        $text = preg_replace('/>(.)/', ">\b\$1", $text);
        $text = preg_replace('/(.)</', "\$1\b<", $text);
        $lines = explode("\b",  $text);

        return array_map(function ($line) { return new Token($line); }, $lines);
    }
}
