[API Reference](/doc/api/index.md) &raquo; [Yannoff](./index.md) &raquo; [Component](./index.md) &raquo; [Console](./index.md) &raquo; [Application][self]


# Class Application

**FQN:** [Yannoff\Component\Console\Application][self]
<br/>

_**implements** [StreamAware](/doc/api/IO/StreamAware.md)_

_**uses** [IOHelper](/doc/api/IO/IOHelper.md)_


## Overview

Source file: [src/Application.php](/src/Application.php)
### Constants

- [COMMAND_HELP](#applicationCOMMAND_HELP)
- [COMMAND_VERS](#applicationCOMMAND_VERS)
- [PAD](#applicationPAD)

### Properties

- [$commands](#applicationcommands)
- [$mono](#applicationmono)
- [$name](#applicationname)
- [$script](#applicationscript)
- [$version](#applicationversion)

### Methods

- [__construct()](#application__construct)
- [__get()](#application__get)
- [add()](#applicationadd)
- [addBaseCommands()](#applicationaddBaseCommands)
- [addCommands()](#applicationaddCommands)
- [dmesg()](#applicationdmesg)
- [error()](#applicationerror)
- [find()](#applicationfind)
- [get()](#applicationget)
- [getDefault()](#applicationgetDefault)
- [getName()](#applicationgetName)
- [getScript()](#applicationgetScript)
- [getUsage()](#applicationgetUsage)
- [getUserCommands()](#applicationgetUserCommands)
- [getVersion()](#applicationgetVersion)
- [has()](#applicationhas)
- [init()](#applicationinit)
- [isMono()](#applicationisMono)
- [output()](#applicationoutput)
- [parse()](#applicationparse)
- [read()](#applicationread)
- [run()](#applicationrun)
- [setMono()](#applicationsetMono)
- [setVerbosity()](#applicationsetVerbosity)
- [write()](#applicationwrite)

---
## Constants


### <a name="COMMAND_HELP">`Application::COMMAND_HELP`</a>

_Name used for the `help` command_</br>

> type: [string][php:string] <br/>
> access: public <br/>
> value: `"help"` <br/>

<br/>

### <a name="COMMAND_VERS">`Application::COMMAND_VERS`</a>

_Name used for the `version` command_</br>

> type: [string][php:string] <br/>
> access: public <br/>
> value: `"version"` <br/>

<br/>

### <a name="PAD">`Application::PAD`</a>

_Default width for the name columns in help_</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `18` <br/>

<br/>


## Properties


### <a name="commands">`Application::$commands`</a>

_Stored commands registry_</br>


> type: [Command[]](/doc/api/Command.md) <br/>
> access: protected <br/>

<br/>

### <a name="mono">`Application::$mono`</a>

_Is this application a Mono-Command Application ?_</br>


> type: [bool][php:bool] <br/>
> access: protected <br/>

<br/>

### <a name="name">`Application::$name`</a>

_The application name_</br>


> type: [string][php:string] <br/>
> access: protected <br/>

<br/>

### <a name="script">`Application::$script`</a>

_The called script name_</br>


> type: [string][php:string] <br/>
> access: protected <br/>

<br/>

### <a name="version">`Application::$version`</a>

_The application version_</br>


> type: [string][php:string] <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="__construct">`Application::__construct()`</a>

```php
Application::__construct($name, $version, $main)
```

_Application constructor._</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The application name
$version|[string][php:string]|The application version
$main|[Command](/doc/api/Command.md) &#124; [null][php:null]|Main command (only for MCA)

#### Return value

>_No return value._


<br/><br/>

### <a name="__get">`Application::__get()`</a>

```php
Application::__get($name)
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

### <a name="add">`Application::add()`</a>

```php
Application::add($command)
```

_Add a command to the registry_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$command|[Command](/doc/api/Command.md)|The command to register<br/>

#### Return value


> type: [self][self]


<br/><br/>

### <a name="addBaseCommands">`Application::addBaseCommands()`</a>

```php
Application::addBaseCommands()
```

_Add base common commands_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [self][self]


<br/><br/>

### <a name="addCommands">`Application::addCommands()`</a>

```php
Application::addCommands($commands)
```

_Add several commands in one shot_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$commands|[Command[]](/doc/api/Command.md)|The commands to be registered<br/>

#### Return value


> type: [self][self]


<br/><br/>

### <a name="dmesg">`Application::dmesg()`</a>

```php
Application::dmesg($message, $level)
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

### <a name="error">`Application::error()`</a>

```php
Application::error($text, $ending)
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

### <a name="find">`Application::find()`</a>

```php
Application::find($name)
```

_Proxy to Application::find() method_</br>
_Implemented for backward compatibility with Symfony inheriting applications_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The requested command name<br/>

#### Return value


> type: [Command](/doc/api/Command.md)


#### Exceptions

Type|Description
----|-----------
[UnknownCommandException](/doc/api/Exception/Command/UnknownCommandException.md)|

<br/><br/>

### <a name="get">`Application::get()`</a>

```php
Application::get($name)
```

_Get a command by its name from the registry_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The requested command name<br/>

#### Return value


> type: [Command](/doc/api/Command.md)


#### Exceptions

Type|Description
----|-----------
[UnknownCommandException](/doc/api/Exception/Command/UnknownCommandException.md)|

<br/><br/>

### <a name="getDefault">`Application::getDefault()`</a>

```php
Application::getDefault()
```

_Getter for the default command name_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


#### Exceptions

Type|Description
----|-----------
[LogicException](/doc/api/Exception/LogicException.md)|If the application has no user-defined command

<br/><br/>

### <a name="getName">`Application::getName()`</a>

```php
Application::getName()
```

_Getter for the application name_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getScript">`Application::getScript()`</a>

```php
Application::getScript()
```

_Getter for the script property_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getUsage">`Application::getUsage()`</a>

```php
Application::getUsage($tab, $width)
```

_Build application usage/help message upon the registered commands and return it_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$tab|[string][php:string]|The tabulation string (defaults to `\t`)
$width|[int][php:int]|Minimum width for the command names column (defaults to `18`)<br/>

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getUserCommands">`Application::getUserCommands()`</a>

```php
Application::getUserCommands()
```


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [Command[]](/doc/api/Command.md)


<br/><br/>

### <a name="getVersion">`Application::getVersion()`</a>

```php
Application::getVersion()
```

_Getter for the application version_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="has">`Application::has()`</a>

```php
Application::has($name)
```

_Check for the presence of the named command in the registry_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The searched command name<br/>

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="init">`Application::init()`</a>

```php
Application::init()
```

_Hook for initialization tasks, called at the end of the constructor:_</br>
_- add common commands (help, version)_</br>

> access: protected <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="isMono">`Application::isMono()`</a>

```php
Application::isMono()
```

_Getter for the mono-command application flag_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="output">`Application::output()`</a>

```php
Application::output($stream, $contents, $ending)
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

### <a name="parse">`Application::parse()`</a>

```php
Application::parse($args)
```

_Find command name and arguments from the command-line invocation_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$args|[array][php:array]|The command-line parameters list<br/>

#### Return value

_An associative array of the form ['command' => '...', 'args' => array(...)]_

> type: [array][php:array]


<br/><br/>

### <a name="read">`Application::read()`</a>

```php
Application::read($interactive)
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

### <a name="run">`Application::run()`</a>

```php
Application::run($args)
```

_Run the application_</br>
_This is the entrypoint method._</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$args|[array][php:array]|Optional invocation arguments (defaults to $_SERVER['argv'])<br/>

#### Return value

_The command exit status code_

> type: [int][php:int]


<br/><br/>

### <a name="setMono">`Application::setMono()`</a>

```php
Application::setMono($mono)
```

_Setter for the mono-command application flag_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$mono|[bool][php:bool]|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="setVerbosity">`Application::setVerbosity()`</a>

```php
Application::setVerbosity($verbosity)
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

### <a name="write">`Application::write()`</a>

```php
Application::write($text, $ending)
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


[self]: Application.md
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