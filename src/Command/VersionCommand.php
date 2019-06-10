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

namespace Yannoff\Component\Console\Command;

use Yannoff\Component\Console\Command;

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
    public function configure()
    {
        $this
            ->setName('version')
            ->setHelp('Display application version and exit')
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $version = $this->application->getVersion();
        $name = $this->application->getName();
        $message = sprintf('<strong>%s</strong> version <strong>%s</strong>', $name, $version);
        $this->writeln($message);

        return 0;
    }
}
