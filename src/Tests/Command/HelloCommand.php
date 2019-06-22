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

namespace Yannoff\Component\Console\Tests\Command;

use Yannoff\Component\Console\Command;
use Yannoff\Component\Console\Definition\Argument;
use Yannoff\Component\Console\Definition\Option;

/**
 * Class HelloCommand
 * Demo command for the component
 *
 * @package Yannoff\Component\Console\Tests\Command
 */
class HelloCommand extends Command
{
    public function configure()
    {
        // the content of the configure method is almost identical...
        $this
            ->setName('hello')
            ->setHelp('Hello world')
            ->setDescription('Hello world demo application')
            // ...except for argument type delaration
            ->addArgument(
                'name',
                Argument::OPTIONAL,
                'Optional name to greet',
                'World'
            )
            // ...as well as for option type delaration
            ->addOption(
                'upper',
                'u',
                Option::FLAG,
                'Print the greetings in upper case'
            )
            ;
    }

    // no more (InputInterface $input, OutputInterface $output)
    // the execute() method takes no parameters
    public function execute()
    {
        // the argument getter method is part of the Command class
        $name = $this->getArgument('name');
        // the same goes for the option getter
        $upper = $this->getOption('upper');

        $message = 'Hello ' . $name;
        if ($upper) {
            $message = strtoupper($message);
        }

        $this->writeln($message);

        return 0;
    }
}
