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

namespace Yannoff\Component\Console\Command;

use Yannoff\Component\Console\Command;
use Yannoff\Component\Console\Definition\Argument;

/**
 * Class BashCompCommand
 *
 * The command invoked via the --comp switch
 *
 * @package Yannoff\Component\Console\Command
 */
class BashCompCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    public function isSystem()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this
            ->setName('bash-comp')
            ->setHelp('Output a list of commands for bash completion')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $commands = array_keys($this->application->getUserCommands());

        $this->write(implode(' ', $commands), null);

        return 0;
    }
}
