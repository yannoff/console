[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class VersionCommand

**FQN:** [Yannoff\Component\Console\Command\VersionCommand][self]
<br/>
_**extends** [Command](/doc/api/Command.md)_
<br/>
_**implements** [StreamAware](/doc/api/IO/StreamAware.md)_


## Overview


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

*Pointer to the main Application instance*</br>


> type: [Application](/doc/api/Application.md) <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandapplication)<br/>
<br/>

### <a name="closure">`VersionCommand::$closure`</a>

*Optional closure to be launch by the execute method*</br>


> type: [Closure][php:Closure] <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandclosure)<br/>
<br/>

### <a name="definition">`VersionCommand::$definition`</a>

*Argument & option definitions registry*</br>


> type: [Definition](/doc/api/Definition.md) <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commanddefinition)<br/>
<br/>

### <a name="desc">`VersionCommand::$desc`</a>

*The command description message*</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commanddesc)<br/>
<br/>

### <a name="help">`VersionCommand::$help`</a>

*The command help message*</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandhelp)<br/>
<br/>

### <a name="name">`VersionCommand::$name`</a>

*The command name*</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandname)<br/>
<br/>

### <a name="resolver">`VersionCommand::$resolver`</a>

*The command-line arguments resolver*</br>


> type: [ArgvResolver](/doc/api/ArgvResolver.md) <br/>
> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandresolver)<br/>
<br/>


## Methods


### <a name="__construct">`VersionCommand::__construct()`</a>

```php
VersionCommand::__construct($name, $closure)
```

*Command constructor.*</br>


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

*Magic getter method for the input/output streams pseudo-properties*</br>

*In case one may need to define a proper magic getter in the class using IOHelper,*</br>
*this method should be imported as an alias, and called by the final __get() implementation*</br>

*Ex:*</br>

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

*Return a string representation of a command: its name*</br>


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

*Add an argument definition to the command*</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandaddArgument) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The argument name<br/>
$type|[int][php:int]|The argument type: required or optional
$help|[string][php:string]|The argument help message
$default|mixed|Optional default value for the argument

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

*Add the options common to every command*</br>


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

*Base method to add the --help option*</br>

*This method might be overwritten in extending classes*</br>
*(for instance to avoid shortname collision between options)*</br>


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

*Add an option definition to the command*</br>


> access: protected <br/>
> inherited from: [Command](/doc/api/Command.md#commandaddOption) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|Long name for the option<br/>
$short|[string][php:string]|Optional short name for the option
$type|[int][php:int]|The option type: value or flag
$help|[string][php:string]|The option help message
$default|mixed|Optional default value for the option

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

*The command initialization method*</br>
*This is where all the command setup instructions must reside:*</br>
*setting name, help, description, options & arguments definitions*</br>

*This method is intended to be overridden in extending classes*</br>

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

*Print a message on stderr if priority is relevant compared to the main verbosity level*</br>


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

*Print text to STDERR*</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelpererror) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The text to print (defaults to empty string)<br/>
$ending|[string][php:string]|Ending character or text

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>

### <a name="execute">`VersionCommand::execute()`</a>

```php
VersionCommand::execute()
```

*Placeholder for the main command code*</br>

*This method is to be overriden in child command classes*</br>

*However, if a closure was passed to the constructor it*</br>
*will be executed here*</br>


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

*Getter for the Application instance*</br>


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

*Retrieve an argument value by its name*</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetArgument) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The name of the queried argument<br/>

#### Return value


> type: mixed


#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|
[RuntimeException](/doc/api/Exception/RuntimeException.md)|

<br/><br/>

### <a name="getDescription">`VersionCommand::getDescription()`</a>

```php
VersionCommand::getDescription()
```

*Getter for the command description*</br>


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

*Getter for the command short help*</br>


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

*Getter for the command name*</br>


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

*Retrieve an option value by its name*</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetOption) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The name of the queried option<br/>

#### Return value


> type: mixed


#### Exceptions

Type|Description
----|-----------
[UndefinedOptionException](/doc/api/Exception/Definition/UndefinedOptionException.md)|

<br/><br/>

### <a name="getSynopsis">`VersionCommand::getSynopsis()`</a>

```php
VersionCommand::getSynopsis($tab)
```

*Get the command synopsis*</br>


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

*Build the whole command usage/help message with all options/arguments documented*</br>


> access: public <br/>
> inherited from: [Command](/doc/api/Command.md#commandgetUsage) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$tab|[string][php:string]|The tabulation string (defaults to `\t`)<br/>
$width|[int][php:int]|Minimum width for the option/argument names column (defaults to `18`)

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="isSystem">`VersionCommand::isSystem()`</a>

```php
VersionCommand::isSystem()
```

*Discriminate user-defined vs built-in commands*</br>


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

*Print contents to the given output*</br>


> access: private <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperoutput) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[IOWriter](/doc/api/IO/Stream/IOWriter.md)|The output stream wrapper<br/>
$contents|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text (defaults to "\n")

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>

### <a name="read">`VersionCommand::read()`</a>

```php
VersionCommand::read($interactive)
```

*Read contents from the standard input*</br>


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

*Method running the command*</br>


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

*Setter for the Application instance pointer*</br>
*NOTA BENE: Application is passed BY-REF*</br>


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

*Setter for the command description*</br>


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

*Setter for the command help*</br>


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

*Setter for the command name*</br>


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

*Change the main application verbosity level*</br>


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

*Print text to STDOUT*</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperwrite) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The text to print (defaults to empty string)<br/>
$ending|[string][php:string]|Ending character or text

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
[php:ReflectionFunction]: https://www.php.net/manual/class.reflectionfunction.php "PHP Built-in: ReflectionFunction"
[php:ReflectionProperty]: https://www.php.net/manual/class.reflectionproperty.php "PHP Built-in: ReflectionProperty"
[php:ReflectionMethod]: https://www.php.net/manual/class.reflectionmethod.php "PHP Built-in: ReflectionMethod"
[php:ReflectionConstant]: https://www.php.net/manual/class.reflectionconstant.php "PHP Built-in: ReflectionConstant"
[php:StdClass]: https://www.php.net/manual/class.stdclass.php "PHP Built-in: StdClass"
[php:Throwable]: https://www.php.net/manual/class.throwable.php "PHP Built-in: Throwable"
[php:Traversable]: https://www.php.net/manual/class.traversable.php "PHP Built-in: Traversable"

[&laquo; Back to Table Of Contents](/doc/api/index.md)

<!-- Generated: 2025-11-12 11:41:42 +01:00 -->