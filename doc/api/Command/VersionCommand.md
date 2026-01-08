[API Reference](/doc/api/index.md) &raquo; [Yannoff](../index.md) &raquo; [Component](../index.md) &raquo; [Console](../index.md) &raquo; [Command](./index.md) &raquo; [VersionCommand][self]


# Class VersionCommand

**FQN:** [Yannoff\Component\Console\Command\VersionCommand][self]
<br/>
_**extends** [Command](/doc/api/Command.md)_
<br/>
_**implements** [StreamAware](/doc/api/IO/StreamAware.md)_


## Overview

Source file: [src/Command/VersionCommand.php](/src/Command/VersionCommand.php)
### Properties

- [$application](#versioncommandapplication)
- [$closure](#versioncommandclosure)
- [$definition](#versioncommanddefinition)
- [$desc](#versioncommanddesc)
- [$help](#versioncommandhelp)
- [$name](#versioncommandname)
- [$resolver](#versioncommandresolver)

### Methods

- [__construct()](#versioncommand__construct)
- [__get()](#versioncommand__get)
- [__toString()](#versioncommand__toString)
- [addArgument()](#versioncommandaddArgument)
- [addCommonOptions()](#versioncommandaddCommonOptions)
- [addHelpOption()](#versioncommandaddHelpOption)
- [addOption()](#versioncommandaddOption)
- [configure()](#versioncommandconfigure)
- [dmesg()](#versioncommanddmesg)
- [error()](#versioncommanderror)
- [execute()](#versioncommandexecute)
- [getApplication()](#versioncommandgetApplication)
- [getArgument()](#versioncommandgetArgument)
- [getBashComp()](#versioncommandgetBashComp)
- [getDescription()](#versioncommandgetDescription)
- [getHelp()](#versioncommandgetHelp)
- [getName()](#versioncommandgetName)
- [getOption()](#versioncommandgetOption)
- [getSynopsis()](#versioncommandgetSynopsis)
- [getUsage()](#versioncommandgetUsage)
- [isSystem()](#versioncommandisSystem)
- [output()](#versioncommandoutput)
- [read()](#versioncommandread)
- [run()](#versioncommandrun)
- [setApplication()](#versioncommandsetApplication)
- [setDescription()](#versioncommandsetDescription)
- [setHelp()](#versioncommandsetHelp)
- [setName()](#versioncommandsetName)
- [setVerbosity()](#versioncommandsetVerbosity)
- [write()](#versioncommandwrite)

---

## Properties


### <a name="application">`VersionCommand::$application`</a>

_Pointer to the main Application instance_</br>


> type: [Application](/doc/api/Application.md) <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandapplication)<br/>
<br/>

### <a name="closure">`VersionCommand::$closure`</a>

_Optional closure to be launch by the execute method_</br>


> type: [Closure][php:Closure] <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandclosure)<br/>
<br/>

### <a name="definition">`VersionCommand::$definition`</a>

_Argument & option definitions registry_</br>


> type: [Definition](/doc/api/Definition.md) <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commanddefinition)<br/>
<br/>

### <a name="desc">`VersionCommand::$desc`</a>

_The command description message_</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commanddesc)<br/>
<br/>

### <a name="help">`VersionCommand::$help`</a>

_The command help message_</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandhelp)<br/>
<br/>

### <a name="name">`VersionCommand::$name`</a>

_The command name_</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandname)<br/>
<br/>

### <a name="resolver">`VersionCommand::$resolver`</a>

_The command-line arguments resolver_</br>


> type: [ArgvResolver](/doc/api/ArgvResolver.md) <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandresolver)<br/>
<br/>


## Methods


### <a name="__construct">`VersionCommand::__construct()`</a>

```php
VersionCommand::__construct($name, $closure)
```

_Command constructor._</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#command__construct) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string] &#124; [null][php:null]|The command name
$closure|[Closure][php:Closure] &#124; [null][php:null]|Optional executable code (anonymous function or closure) to be run by execute()

#### Return value

>_No return value._


<br/><br/>

### <a name="__get">`VersionCommand::__get()`</a>

```php
VersionCommand::__get($name)
```

_Magic getter method for the input/output streams pseudo-properties_</br>

_In case one may need to define a proper magic getter in the class using IOHelper,_</br>
_this method should be imported as an alias, and called by the final `__get()` implementation_</br>

_Ex:_</br>

```php
class AcmeClass {

    // Import method as an alias
    use IOHelper {
        __get as __stream_get;
    }

    // Implement proper magic getter
    public function __get($name)
    {
        // Put user-defined logic here
        // ...

        // Finally call the trait method
        return $this->__stream_get($name);
    }
}
```




> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelper__get) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The stream name: stdin, stdout or stderr<br/>

#### Return value

__

> type: [IOStream](/doc/api/IO/Stream/IOStream.md)


#### Exceptions

Type|Description
----|-----------
[UnsupportedStreamException](/doc/api/Exception/IO/UnsupportedStreamException.md)|If the requested stream is not stdin, stdout or stderr

<br/><br/>

### <a name="__toString">`VersionCommand::__toString()`</a>

```php
VersionCommand::__toString()
```

_Return a string representation of a command: its name_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#command__toString) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="addArgument">`VersionCommand::addArgument()`</a>

```php
VersionCommand::addArgument($name, $type, $help, $default)
```

_Add an argument definition to the command_</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandaddArgument) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The argument name
$type|[int][php:int]|The argument type: required or optional
$help|[string][php:string]|The argument help message
$default|[mixed][php:mixed]|Optional default value for the argument<br/>

#### Return value


> type: [self][self]


#### Exceptions

Type|Description
----|-----------
[InvalidArgumentTypeException](/doc/api/Exception/Definition/InvalidArgumentTypeException.md)|

<br/><br/>

### <a name="addCommonOptions">`VersionCommand::addCommonOptions()`</a>

```php
VersionCommand::addCommonOptions()
```

_Add the options common to every command_</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandaddCommonOptions) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [self][self]


<br/><br/>

### <a name="addHelpOption">`VersionCommand::addHelpOption()`</a>

```php
VersionCommand::addHelpOption()
```

_Base method to add the --help and --bash-comp options_</br>

_This method might be overwritten in extending classes_</br>
_(for instance to avoid shortname collision between options)_</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandaddHelpOption) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [self][self]


<br/><br/>

### <a name="addOption">`VersionCommand::addOption()`</a>

```php
VersionCommand::addOption($name, $short, $type, $help, $default)
```

_Add an option definition to the command_</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandaddOption) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|Long name for the option
$short|[string][php:string]|Optional short name for the option
$type|[int][php:int]|The option type: value or flag
$help|[string][php:string]|The option help message
$default|[mixed][php:mixed]|Optional default value for the option<br/>

#### Return value


> type: [self][self]


#### Exceptions

Type|Description
----|-----------
[InvalidOptionTypeException](/doc/api/Exception/Definition/InvalidOptionTypeException.md)|

<br/><br/>

### <a name="configure">`VersionCommand::configure()`</a>

```php
VersionCommand::configure()
```

_The command initialization method_</br>
_This is where all the command setup instructions must reside:_</br>
_setting name, help, description, options & arguments definitions_</br>

_This method is intended to be overridden in extending classes_</br>

> access: public <br/>
> overridden from: [Command](/doc/api/Command.md#commandconfigure) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="dmesg">`VersionCommand::dmesg()`</a>

```php
VersionCommand::dmesg($message, $level)
```

_Print a message on stderr if priority is relevant compared to the main verbosity level_</br>


> access: protected <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperdmesg) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string][php:string]|
$level|[int][php:int]|

#### Return value

>_No return value._


<br/><br/>

### <a name="error">`VersionCommand::error()`</a>

```php
VersionCommand::error($text, $ending)
```

_Print text to STDERR_</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelpererror) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>

### <a name="execute">`VersionCommand::execute()`</a>

```php
VersionCommand::execute()
```

_Placeholder for the main command code_</br>

_This method is to be overriden in child command classes_</br>

_However, if a closure was passed to the constructor it_</br>
_will be executed here_</br>


> access: public <br/>
> overridden from: [Command](/doc/api/Command.md#commandexecute) <br/>

#### Arguments

>_No arguments._

#### Return value

_The command exit status code_

> type: [int][php:int]


<br/><br/>

### <a name="getApplication">`VersionCommand::getApplication()`</a>

```php
VersionCommand::getApplication()
```

_Getter for the Application instance_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetApplication) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [Application](/doc/api/Application.md)


<br/><br/>

### <a name="getArgument">`VersionCommand::getArgument()`</a>

```php
VersionCommand::getArgument($name)
```

_Retrieve an argument value by its name_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetArgument) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The name of the queried argument<br/>

#### Return value


> type: [mixed][php:mixed]


#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|
[RuntimeException](/doc/api/Exception/RuntimeException.md)|

<br/><br/>

### <a name="getBashComp">`VersionCommand::getBashComp()`</a>

```php
VersionCommand::getBashComp($glue)
```

_Build a bash completion formatted list of all options_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetBashComp) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$glue|[string][php:string]|The string used to join options items<br/>

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getDescription">`VersionCommand::getDescription()`</a>

```php
VersionCommand::getDescription()
```

_Getter for the command description_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetDescription) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getHelp">`VersionCommand::getHelp()`</a>

```php
VersionCommand::getHelp()
```

_Getter for the command short help_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetHelp) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getName">`VersionCommand::getName()`</a>

```php
VersionCommand::getName()
```

_Getter for the command name_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetName) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getOption">`VersionCommand::getOption()`</a>

```php
VersionCommand::getOption($name)
```

_Retrieve an option value by its name_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetOption) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The name of the queried option<br/>

#### Return value


> type: [mixed][php:mixed]


#### Exceptions

Type|Description
----|-----------
[UndefinedOptionException](/doc/api/Exception/Definition/UndefinedOptionException.md)|

<br/><br/>

### <a name="getSynopsis">`VersionCommand::getSynopsis()`</a>

```php
VersionCommand::getSynopsis($tab)
```

_Get the command synopsis_</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetSynopsis) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$tab|[string][php:string]|The tabulation string (defaults to `\t`)<br/>

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getUsage">`VersionCommand::getUsage()`</a>

```php
VersionCommand::getUsage($tab, $width)
```

_Build the whole command usage/help message with all options/arguments documented_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetUsage) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$tab|[string][php:string]|The tabulation string (defaults to `\t`)
$width|[int][php:int]|Minimum width for the option/argument names column (defaults to `18`)<br/>

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="isSystem">`VersionCommand::isSystem()`</a>

```php
VersionCommand::isSystem()
```

_Discriminate user-defined vs built-in commands_</br>


> access: public <br/>
> overridden from: [Command](/doc/api/Command.md#commandisSystem) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="output">`VersionCommand::output()`</a>

```php
VersionCommand::output($stream, $contents, $ending)
```

_Print contents to the given output_</br>


> access: private <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperoutput) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[IOWriter](/doc/api/IO/Stream/IOWriter.md)|The output stream wrapper
$contents|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text (defaults to "\n")<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>

### <a name="read">`VersionCommand::read()`</a>

```php
VersionCommand::read($interactive)
```

_Read contents from the standard input_</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperread) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$interactive|[bool][php:bool]|Whether to accept user input<br/>

#### Return value

_The contents or **false** in case of failure_

> type: [string][php:string] **&#124;** [false][php:false]


<br/><br/>

### <a name="run">`VersionCommand::run()`</a>

```php
VersionCommand::run($args)
```

_Method running the command_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandrun) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$args|[array][php:array]|List of the arguments passed via the command-line<br/>

#### Return value

_The command exit status code (O for success)_
<br/>__

> type: [int][php:int]


#### Exceptions

Type|Description
----|-----------
[LogicException](/doc/api/Exception/LogicException.md)|
[MissingArgumentsException](/doc/api/Exception/Definition/MissingArgumentsException.md)|

<br/><br/>

### <a name="setApplication">`VersionCommand::setApplication()`</a>

```php
VersionCommand::setApplication($application)
```

_Setter for the Application instance pointer_</br>
_NOTA BENE: Application is passed BY-REF_</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandsetApplication) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$application|[Application](/doc/api/Application.md)|The Application instance reference<br/>

#### Return value


> type: [self][self]


<br/><br/>

### <a name="setDescription">`VersionCommand::setDescription()`</a>

```php
VersionCommand::setDescription($desc)
```

_Setter for the command description_</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandsetDescription) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$desc|[string][php:string]|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="setHelp">`VersionCommand::setHelp()`</a>

```php
VersionCommand::setHelp($help)
```

_Setter for the command help_</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandsetHelp) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$help|[string][php:string]|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="setName">`VersionCommand::setName()`</a>

```php
VersionCommand::setName($name)
```

_Setter for the command name_</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandsetName) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="setVerbosity">`VersionCommand::setVerbosity()`</a>

```php
VersionCommand::setVerbosity($verbosity)
```

_Change the main application verbosity level_</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelpersetVerbosity) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$verbosity|[int][php:int]|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="write">`VersionCommand::write()`</a>

```php
VersionCommand::write($text, $ending)
```

_Print text to STDOUT_</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperwrite) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>


[self]: VersionCommand.md
[php:array]: https://www.php.net/manual/language.types.array.php "PHP Built-in: array"
[php:bool]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: bool"
[php:boolean]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: boolean"
[php:callable]: https://www.php.net/manual/language.types.callable.php "PHP Built-in: callable"
[php:false]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: false"
[php:float]: https://www.php.net/manual/language.types.float.php "PHP Built-in: float"
[php:int]: https://www.php.net/manual/language.types.integer.php "PHP Built-in: int"
[php:integer]: https://www.php.net/manual/language.types.integer.php "PHP Built-in: integer"
[php:mixed]: https://www.php.net/manual/language.types.mixed.php "PHP Built-in: mixed"
[php:null]: https://www.php.net/manual/language.types.null.php "PHP Built-in: null"
[php:object]: https://www.php.net/manual/language.types.object.php "PHP Built-in: object"
[php:resource]: https://www.php.net/manual/language.types.resource.php "PHP Built-in: resource"
[php:string]: https://www.php.net/manual/language.types.string.php "PHP Built-in: string"
[php:true]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: true"
[php:ArrayAccess]: https://www.php.net/manual/class.arrayaccess.php "PHP Built-in: ArrayAccess"
[php:Closure]: https://www.php.net/manual/class.closure.php "PHP Built-in: Closure"
[php:Countable]: https://www.php.net/manual/class.countable.php "PHP Built-in: Countable"
[php:Directory]: https://www.php.net/manual/class.directory.php "PHP Built-in: Directory"
[php:Error]: https://www.php.net/manual/class.error.php "PHP Built-in: Error"
[php:Exception]: https://www.php.net/manual/class.exception.php "PHP Built-in: Exception"
[php:LogicException]: https://www.php.net/manual/class.logicexception.php "PHP Built-in: LogicException"
[php:Iterable]: https://www.php.net/manual/class.iterable.php "PHP Built-in: Iterable"
[php:Iterator]: https://www.php.net/manual/class.iterator.php "PHP Built-in: Iterator"
[php:RuntimeException]: https://www.php.net/manual/class.runtimeexception.php "PHP Built-in: RuntimeException"
[php:Reflector]: https://www.php.net/manual/class.reflector.php "PHP Built-in: Reflector"
[php:ReflectionClass]: https://www.php.net/manual/class.reflectionclass.php "PHP Built-in: ReflectionClass"
[php:ReflectionClassConstant]: https://www.php.net/manual/class.reflectionclassconstant.php "PHP Built-in: ReflectionClassConstant"
[php:ReflectionConstant]: https://www.php.net/manual/class.reflectionconstant.php "PHP Built-in: ReflectionConstant"
[php:ReflectionException]: https://www.php.net/manual/class.reflectionexception.php "PHP Built-in: ReflectionException"
[php:ReflectionFunction]: https://www.php.net/manual/class.reflectionfunction.php "PHP Built-in: ReflectionFunction"
[php:ReflectionMethod]: https://www.php.net/manual/class.reflectionmethod.php "PHP Built-in: ReflectionMethod"
[php:ReflectionProperty]: https://www.php.net/manual/class.reflectionproperty.php "PHP Built-in: ReflectionProperty"
[php:ReflectionParameter]: https://www.php.net/manual/class.reflectionparameter.php "PHP Built-in: ReflectionParameter"
[php:StdClass]: https://www.php.net/manual/class.stdclass.php "PHP Built-in: StdClass"
[php:Throwable]: https://www.php.net/manual/class.throwable.php "PHP Built-in: Throwable"
[php:Traversable]: https://www.php.net/manual/class.traversable.php "PHP Built-in: Traversable"


<!-- Generated: 2026-01-08 16:50:57 +01:00 -->