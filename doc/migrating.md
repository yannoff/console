# Migrating from symfony/console

As stated in the [README](../README.md), this component was conceived as a replacement for the [symfony/console](https://github.com/symfony/console): many of the original facade methods signature have been kept _-as much as possible-_ unchanged.

However, there are a few significant changes worth to be considered:

## Changes listed by class & method

In general, method signatures remain the same but with some light differences.

List fo symfony/console (v3.4.x) methods and their equivalence, if any

### Application

|symfony/console|yannoff/console|changes
|---------------|---------------|-------
__construct($name, $version)|__construct($name, $version)|-
add($command)|add($command)|[Details](#applicationadd)
addCommands($commands)|addCommands($commands)|[Details](#applicationaddcommands)
all($namespace)|-|
areExceptionsCaught()|-|
configureIO($input, $output)|-|
doRenderException($e, $output)|-|
doRunCommand($command, $input, $output)|-|
doRun($input, $output)|-|
extractAllNamespaces($name)|-|
extractNamespace($name, $limit)|-|
findAlternatives($name, $collection)|-|
find($name)|find($name)|[Details](#applicationfind)
findNamespace($namespace)|-|
getAbbreviations($names)|-|
getAbbreviationSuggestions($abbrevs)|-|
getCommandName($input)|-|
getDefaultCommands()|-|
getDefaultHelperSet()|-|
getDefaultInputDefinition()|-|
getDefinition()|-|
getHelp()|getHelp()|-
getHelperSet()|-|
getLongVersion()|-|
get($name)|get($name)|[Details](#applicationget)
getName()|getName()|-
getNamespaces()|-|
getTerminalDimensions()|-|
getTerminalHeight()|-|
getTerminalWidth()|-|
getVersion()|getVersion()|-
has($name)|-|
init()|-|
isAutoExitEnabled()|-|
isSingleCommand()|-|
register($name)|-|
renderException($e, $output)|-|
run($input, $output)|run()|[Details](#applicationrun)
setAutoExit($boolean)|-|
setCatchExceptions($boolean)|-|
setCommandLoader($commandLoader)|-|
setDefaultCommand($commandName, $isSingleCommand)|-|
setDefinition($definition)|
setDispatcher($dispatcher)|-|
setHelperSet($helperSet)|-|
setName($name)|setName($name)|-
setTerminalDimensions($width, $height)|-|
setVersion($version)|setVersion($version)|
splitStringByWidth($string, $width)|-|

### Command

|symfony/console|yannoff/console|changes
|---------------|---------------|-------
__construct($name)|__construct($name)|-
addArgument($name, $mode, $description, $default)|addArgument($name, $type, $description, $default)|[Details](#commandaddargument)
addOption($name, $shortcut, $mode, $description, $default)|addOption($name, $shortcut, $type, $description, $default)|[Details](#commandaddoption)
addUsage($usage)|-|
configure()|configure()|[Details](#commandconfigure)
execute($input, $output)|execute()|[Details](#commandexecute)
getAliases()|-|
getApplication()|getApplication()|[Details](#commandgetapplication)
getDefaultName()|-|
getDefinition()|getDefinition()|[Details](#commandgetdefinition)
getDescription()|getDescription()|-
getHelp()|getHelp()|-
getHelper($name)|-|
getHelperSet()|-|
getName()|getName()|-
getNativeDefinition()|-|
getProcessedHelp()|-|
getSynopsis($short)|getSynopsis()|[Details](#commandgetsynopsis)
getUsages()|-|
ignoreValidationErrors()|-|
initialize($input, $output)|-|
interact($input, $output)|-|
isEnabled()|-|
isHidden()|-|
mergeApplicationDefinition($mergeArgs)|-|
run($input, $output)|run()|[Details](#commandrun)
setAliases($aliases)|-|
setApplication($application)|setApplication($application)|[Details](#commandsetapplication)
setCode(callable $code)|-|
setDefinition($definition)|-|
setDescription($description)|setDescription($description)|-
setHelperSet(HelperSet $helperSet)|-|
setHelp($help)|setHelp($help)|-
setHidden($hidden)|-|
setName($name)|setName($name)|-
setProcessTitle($title)|-|
validateName($name)|-|

### Other

|symfony/console|yannoff/console
|---------------|---------------
|InputInterface::getArgument($name)|Moved to [Command::getArgument($name)](#commandgetargument)
|InputInterface::getOption($name)|Moved to [Command::getOption($name)](#commandgetoption)
|OutputInterface::writeln($message, $options)|Moved to [Command::writeln($message, $options)](#commandwriteln)

### Application methods

#### Application::add()

Identical, but expects a `Yannoff\Component\Console\Command` instead of `Symfony\Component\Console\Command\Command` as only argument.

#### Application::addCommands()

Identical, but expects an array of`Yannoff\Component\Console\Command` instead of `Symfony\Component\Console\Command\Command` as only argument.

#### Application::find()

This method has been replaced by its alias `Command::get()`.

The `find()` proxy method have been implemented for BC with Symfony applications, but is to be removed in future versions.

### Command methods

#### Command::addArgument()

Possible values for the `$type` argument have been kept identical _(OPTIONAL: 2, REQUIRED: 1)_.

Anyway, be sure to replace all `InputArgument::OPTIONAL` / `InputArgument::REQUIRED` by their respective counterparts class constants defined in `Yannoff\Component\Console\Definition\Argument`.

:warning: _NOTE: For now, only *OPTIONAL* arguments are supported, which means setting an argument type to `Argument::REQUIRED` will have no effect._

#### Command::addOption()

Option types are stored as class constants in `Yannoff\Component\Console\Definition\Option`. Beware to change all symfony `InputOption::XXX` constants in your code accordingly.

Only 2 possible types are implemented:

- `Option::FLAG` : A flag option, `true` if the command is invoked passing the option, `false` otherwise.
- `Option::VALUE`: An option expecting a value, will raise an exception if the option is passed without a value.

#### Command::configure()

This method has the exact same purpose as in Symfony console commands: called at the end of the constructor, this is where command must be set up.

#### Command::execute()

The execute() method achieve the same job than in the original class, this is where the command core code lives.

But there are major changes:

- In the signature: _No more `(InputInterface $input, OuputInterface $output)`, the method takes no arguments_.
- The method is defined _abstract_ so it **must be implemented** in extending classes.

#### Command::getArgument()

Same behavior.

:warning: Return a `Yannoff\Component\Console\Definition\Argument` instead of a `Symfony\Component\Console\Input\InputArgument`.

#### Command::getOption()

Same behavior.

:warning: Return a `Yannoff\Component\Console\Definition\Option` instead of a `Symfony\Component\Console\Input\InputOption`.

#### Command::getSynopsis()

Behave differently from the original method.

This method return the one-line help that is used to build the command list resume when the application is invoked with `help` or `list`.

#### Command::getUsage()

As opposite to the original command class, usage messages are not stored as a class property.

Extending class should implement their own `getUsage()` method, responsible for building the help message string.

#### Command::run()

The run() method achieve the same job than in the original class, it is responsible for running the command.

Anyway, it signature differs significantly from its ancestry: it takes only **one argument**: the `argv` array, deduced from the command invocation.

:warning: Any call to this method need to be changed, it does not take the classical `(InputInterface $input, OuputInterface $output)` couple arguments, and will raise an error if invoked the old way.

#### Command::setApplication() / Command::getApplication()

The application getter/setter achieve the same goal than in the original class.

However it's important to note that the command only keep **a reference** to the `Application` instance, not a copy.

The advantages are twice:

- saves memory by avoiding the creation of a new `Application` object
- command is always _aware_ of any state change of the application instance

#### Command::writeln()

The verbosity argument placeholder have been kept for compatibility, but will be ignored.

Indeed verbosity levels are not implemented in this component.

A third argument has been added, allowing to choose between STDOUT (by default) or STDIN for the output.

## Full migration example

Now, let's put it all together with a concrete example:

The content of the main application file is identical:

```php
#!/usr/bin/env php
<?php
// bin/app.php
require __DIR__ . '/../vendor/autoload.php';

use Yannoff\Component\Console\Application;
use Acme\Demo\HelloCommand;

$application = new Application('acme', '0.0.0');

$application->addCommands([
    new HelloCommand('hello'),
]);

$application->run();
```

The command file however, is a little different:

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
        // the content of the configure method is almost identical...
        $this
            ->setName('hello')
            ->setHelp('Hello world')
            ->setDescription('Hello world demo application')
            // ...except for argument type declaration
            ->addArgument(
                'name',
                Argument::OPTIONAL,
                'Optional name to greet'
            )
            // ...as well as for option type declaration
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

        $message = 'Hello ' . (null === $name ? 'World' : $name);
        if ($upper) {
            $message = strtoupper($message);
        }

        // the writeln() method is implemented in the Command as well
        $this->writeln($message);

        return 0;
    }
}


```
