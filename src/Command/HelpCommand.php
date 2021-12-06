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
 * Class HelpCommand
 * The command invoked when application is called with
 * help, --usage or --help
 *
 * @package Yannoff\Component\Console\Command
 */
class HelpCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this
            ->setName('help')
            ->setHelp('Display global or command-specific help message')
            ->addArgument('command', Argument::OPTIONAL)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $command = $this->getArgument('command');

        $usage = null === $command ? $this->application->getUsage() : $this->application->get($command)->getUsage();

        $this->writeln($usage);

        return 0;
    }
}
