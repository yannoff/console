[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Application

**FQN:** [Yannoff\Component\Console\Application][self]
<br/>
_**extends** [StreamAware](/doc/api/IO/StreamAware.md)_<br/>
_**implements** [FormatterAware](/doc/api/IO/Output/FormatterAware.md)_


## Overview


**Properties**

- [$commands](#commands)
- [$formatter](#formatter)
- [$name](#name)
- [$script](#script)
- [$version](#version)

**Methods**

- [__construct()](#__construct)
- [add()](#add)
- [addCommands()](#addCommands)
- [find()](#find)
- [get()](#get)
- [getFormatter()](#getFormatter)
- [getName()](#getName)
- [getScript()](#getScript)
- [getUsage()](#getUsage)
- [getVersion()](#getVersion)
- [has()](#has)
- [init()](#init)
- [ioerror()](#ioerror)
- [ioread()](#ioread)
- [iowrite()](#iowrite)
- [run()](#run)
- [setFormatter()](#setFormatter)

---

## Properties


### <a name="commands">Application::$commands</a>


_Stored commands registry_

**type**: [Command[]](/doc/api/Command.md)<br/>
**access**: protected<br/>


### <a name="formatter">Application::$formatter</a>


_The formatter instance_

**type**: [Formatter](/doc/api/IO/Output/Formatter.md)<br/>
**access**: protected<br/>


### <a name="name">Application::$name</a>


_The application name_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="script">Application::$script</a>


_The called script name_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="version">Application::$version</a>


_The application version_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


---

## Methods


### <a name="__construct">Application::__construct()</a>
_Application constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The application name
$version|[string](https://www.php.net/manual/language.types.string.php)|The application version

#### Return value

_No return value._



### <a name="add">Application::add()</a>
_Add a command to the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$command|[Command](/doc/api/Command.md)|The command to register

#### Return value

_Type:_ [self][self]


### <a name="addCommands">Application::addCommands()</a>
_Add several commands in one shot_

#### Arguments

Name|Type|Description
----|----|-----------
$commands|[Command[]](/doc/api/Command.md)|The commands to be registered

#### Return value

_Type:_ [self][self]


### <a name="find">Application::find()</a>
_Proxy to Application::get() method<br/>Implemented for backward compatibility with Symfony inheriting applications_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The requested command name

#### Return value

_Type:_ [Command](/doc/api/Command.md)

#### Exceptions

Type|Description
----|-----------
[UnknownCommandException](/doc/api/Exception/Command/UnknownCommandException.md)|If the queried command cannot be found


### <a name="get">Application::get()</a>
_Get a command by its name from the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The requested command name

#### Return value

_Type:_ [Command](/doc/api/Command.md)

#### Exceptions

Type|Description
----|-----------
[UnknownCommandException](/doc/api/Exception/Command/UnknownCommandException.md)|If the queried command cannot be found


### <a name="getFormatter">Application::getFormatter()</a>
_Getter for the formatter instance_

#### Arguments

_No arguments._

#### Return value

_Type:_ [Formatter](/doc/api/IO/Output/Formatter.md)


### <a name="getName">Application::getName()</a>
_Getter for the application name_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getScript">Application::getScript()</a>
_Getter for the script property_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getUsage">Application::getUsage()</a>
_Build application usage/help message upon the registered commands and return it_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getVersion">Application::getVersion()</a>
_Getter for the application version_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="has">Application::has()</a>
_Check for the presence of the named command in the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The searched command name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="init">Application::init()</a>
_Hook for initialization tasks, called at the end of the constructor:<br/>- add common commands (help, version)_

#### Arguments

_No arguments._

#### Return value

_No return value._



### <a name="ioerror">Application::ioerror()</a>
_Print a message to standard error with the given ending char_

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|The message to print
$ending|[string](https://www.php.net/manual/language.types.string.php)|The ending string (defaults to "\n")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_


### <a name="ioread">Application::ioread()</a>
_Read contents from the standard input_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: The contents or **false** in case of failure_


### <a name="iowrite">Application::iowrite()</a>
_Print a message to standard output with the given ending string_

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|The message to print
$ending|[string](https://www.php.net/manual/language.types.string.php)|The ending string (defaults to "\n")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_


### <a name="run">Application::run()</a>
_Run the application<br/>This is the entrypoint method._

#### Arguments

Name|Type|Description
----|----|-----------
$args|[array](https://www.php.net/manual/language.types.array.php)|Optional invocation arguments (defaults to $_SERVER['argv'])

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php)<br />_Description: The command exit status code_


### <a name="setFormatter">Application::setFormatter()</a>
_Setter for the formatter instance property_

#### Arguments

Name|Type|Description
----|----|-----------
$formatter|[Formatter](/doc/api/IO/Output/Formatter.md)|The formatter instance

#### Return value

_Type:_ [static](https://www.php.net/manual-lookup.php?pattern=static)<br />_Description: The instance of the caller class_



[self]: Application.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

