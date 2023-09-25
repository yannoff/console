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
use Yannoff\Component\Console\Definition\Option;

/**
 * Class VersionCommand
 *
 * @package Yannoff\Component\Console\Command
 */
class VersionCommand extends Command
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
            ->setName('version')
            ->setHelp('Display application version and exit')
            ->addOption(
                'raw',
                null,
                Option::FLAG,
                'Output version as raw plain text'
            )
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $raw = $this->getOption('raw');
        $version = $this->getApplication()->getVersion();
        $name = $this->getApplication()->getName();
        $message = $raw ? $version : sprintf('<strong>%s</strong> version <strong>%s</strong>', $name, $version);
        $this->write($message);

        return 0;
    }
}
