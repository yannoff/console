# yannoff/console

A simple, lightweight console implementation for command-line PHP applications.


[![Latest Stable Version](https://poser.pugx.org/yannoff/console/v/stable)](https://packagist.org/packages/yannoff/console)
[![Total Downloads](https://poser.pugx.org/yannoff/console/downloads)](https://packagist.org/packages/yannoff/console)
[![License](https://poser.pugx.org/yannoff/console/license)](https://packagist.org/packages/yannoff/console)


## Why are we here ?

This component was conceived as a replacement for the [symfony/console](https://github.com/symfony/console) component.


After several years using the [symfony/console](https://github.com/symfony/console), it became more and more obvious: 
for most cases, the component was not fitting the needs.

Such a [Swiss Army Knife](https://sourcemaking.com/antipatterns/swiss-army-knife) component may be perfect for who 
has a rapid-development, short term objective, or for a proof-of-concept. 
But in most cases, only a few among the plenty of available features are necessary.

This is like sending a whole [leathernecks squadron](https://en.wikipedia.org/wiki/Leatherneck) to kill a harmless fly.

So here came the need for the [yannoff/console](https://github.com/yannoff/console) component.

Yet the idea was not to [reinvent the wheel](https://sourcemaking.com/antipatterns/reinvent-the-wheel), but merely to provide
a simpler, lighter (in size & resource) and more POSIX-compliant implementation for PHP command-line applications.

## Installation

Via [composer](https://getcomposer.org/):

```bash
$ composer require yannoff/console
```

## Usage

Here is a _Hello World_ command example:

First the application script, the script that will be invoked using `php bin/app.php`

```php
#!/usr/bin/env php
<?php
// bin/app.php

// Mute PHP deprecation warnings & notices
error_reporting(E_ERROR);

require __DIR__ . '/../vendor/autoload.php';

use Yannoff\Component\Console\Application;
use Acme\Demo\HelloCommand;

$application = new Application('acme', '0.0.0');

$application->addCommands([
    new HelloCommand('hello'),
]);

$application->run();
```

Then the command file:

```php
<?php
// src/Acme/Demo/

namespace Acme\Demo;

use Yannoff\Component\Console\Command;
use Yannoff\Component\Console\Definition\Argument;
use Yannoff\Component\Console\Definition\Option;

class HelloCommand extends Command
{
    public function configure()
    {
        $this
            ->setName('hello')
            ->setHelp('Hello world')
            ->setDescription('Hello world demo application')
            ->addArgument(
                'name',
                Argument::OPTIONAL,
                'Optional name to greet'
            )
            ->addOption(
                'upper',
                'u',
                Option::FLAG,
                'Print the greetings in upper case'
            )
            ;
    }

    public function execute()
    {
        $name = $this->getArgument('name');
        $upper = $this->getOption('upper');

        $message = 'Hello ' . (null === $name ? 'World' : $name);
        if ($upper) {
            $message = strtoupper($message);
        }

        $this->writeln($message);

        return 0;
    }
}


```

<!--
Take a look at the [API Reference](doc/api/index.md) for a full overview of the component classes & methods.
-->

People willing to migrate from symfony/console may want to have a look at the [migration](doc/migrating.md) section of the documentation.

## Licence

Licensed under the [MIT Licence](LICENSE).
