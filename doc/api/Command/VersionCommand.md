[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class VersionCommand

**FQN:** [Yannoff\Component\Console\Command\VersionCommand][self]
<br/>
_**extends** [Command](/doc/api/Command.md)_<br/>
_**implements** [FormatterAware](/doc/api/IO/Output/FormatterAware.md)_


## Overview


**Properties**

- [$application](#application)
- [$definition](#definition)
- [$desc](#desc)
- [$formatter](#formatter)
- [$help](#help)
- [$name](#name)
- [$resolver](#resolver)

**Methods**

- [__construct()](#__construct)
- [addArgument()](#addArgument)
- [addCommonOptions()](#addCommonOptions)
- [addOption()](#addOption)
- [configure()](#configure)
- [errorln()](#errorln)
- [execute()](#execute)
- [getApplication()](#getApplication)
- [getArgument()](#getArgument)
- [getDescription()](#getDescription)
- [getFormatter()](#getFormatter)
- [getHelp()](#getHelp)
- [getName()](#getName)
- [getOption()](#getOption)
- [getSynopsis()](#getSynopsis)
- [getUsage()](#getUsage)
- [ioerror()](#ioerror)
- [ioread()](#ioread)
- [iowrite()](#iowrite)
- [run()](#run)
- [setApplication()](#setApplication)
- [setDescription()](#setDescription)
- [setFormatter()](#setFormatter)
- [setHelp()](#setHelp)
- [setName()](#setName)
- [writeln()](#writeln)

---

## Properties


### <a name="application">VersionCommand::$application</a>

_inherited from: [Command](/doc/api/Command.md#application)_

_Pointer to the main Application instance_

**type**: [Application](/doc/api/Application.md)<br/>
**access**: protected<br/>


### <a name="definition">VersionCommand::$definition</a>

_inherited from: [Command](/doc/api/Command.md#definition)_

_Argument & option definitions registry_

**type**: [Definition](/doc/api/Definition.md)<br/>
**access**: protected<br/>


### <a name="desc">VersionCommand::$desc</a>

_inherited from: [Command](/doc/api/Command.md#desc)_

_The command description message_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="formatter">VersionCommand::$formatter</a>

_inherited from: [Command](/doc/api/Command.md#formatter)_

_The formatter instance_

**type**: [Formatter](/doc/api/IO/Output/Formatter.md)<br/>
**access**: protected<br/>


### <a name="help">VersionCommand::$help</a>

_inherited from: [Command](/doc/api/Command.md#help)_

_The command help message_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="name">VersionCommand::$name</a>

_inherited from: [Command](/doc/api/Command.md#name)_

_The command name_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="resolver">VersionCommand::$resolver</a>

_inherited from: [Command](/doc/api/Command.md#resolver)_

_The command-line arguments resolver_

**type**: [ArgvResolver](/doc/api/ArgvResolver.md)<br/>
**access**: protected<br/>


---

## Methods


### <a name="__construct">VersionCommand::__construct()</a>
_Command constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php) &#124; [null](https://www.php.net/manual/language.types.null.php)|The command name

#### Return value

_No return value._



### <a name="addArgument">VersionCommand::addArgument()</a>
_Add an argument definition to the command_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The argument name
$type|[int](https://www.php.net/manual/language.types.int.php)|The argument type: required or optional
$help|[string](https://www.php.net/manual/language.types.string.php)|The argument help message
$default|mixed|Optional default value for the argument

#### Return value

_Type:_ [self][self]

#### Exceptions

Type|Description
----|-----------
[InvalidArgumentTypeException](/doc/api/Exception/Definition/InvalidArgumentTypeException.md)|If the passed argument type is not recognized ([LogicException](/doc/api/Exception/LogicException.md))


### <a name="addCommonOptions">VersionCommand::addCommonOptions()</a>
_Add the options common to every command_

#### Arguments

_No arguments._

#### Return value

_Type:_ [self][self]


### <a name="addOption">VersionCommand::addOption()</a>
_Add an option definition to the command_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|Long name for the option
$short|[string](https://www.php.net/manual/language.types.string.php)|Optional short name for the option
$type|[int](https://www.php.net/manual/language.types.int.php)|The option type: value or flag
$help|[string](https://www.php.net/manual/language.types.string.php)|The option help message
$default|mixed|Optional default value for the option

#### Return value

_Type:_ [self][self]

#### Exceptions

Type|Description
----|-----------
[InvalidOptionTypeException](/doc/api/Exception/Definition/InvalidOptionTypeException.md)|If the passed option type is not recognized ([LogicException](/doc/api/Exception/LogicException.md))


### <a name="configure">VersionCommand::configure()</a>
_The command initialization method<br/>This is where all the command setup instructions must reside:<br/>setting name, help, description, options & arguments definitions<br/>This method is intended to be overridden in extending classes_

#### Arguments

_No arguments._

#### Return value

_No return value._



### <a name="errorln">VersionCommand::errorln()</a>
_Print text to STDERR_

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string](https://www.php.net/manual/language.types.string.php)|The text to print
$options|[null](https://www.php.net/manual/language.types.null.php)|Kept for symfony BC, but ignored

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php) **&#124;** [int](https://www.php.net/manual/language.types.int.php)


### <a name="execute">VersionCommand::execute()</a>
_Placeholder for the main command code_

#### Arguments

_No arguments._

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php)<br />_Description: The command exit status code_


### <a name="getApplication">VersionCommand::getApplication()</a>
_Getter for the Application instance_

#### Arguments

_No arguments._

#### Return value

_Type:_ [Application](/doc/api/Application.md)


### <a name="getArgument">VersionCommand::getArgument()</a>
_Retrieve an argument value by its name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The name of the queried argument

#### Return value

_Type:_ mixed

#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|If no such argument found in the definition ([LogicException](/doc/api/Exception/LogicException.md))
[ArgumentNotSetException](/doc/api/Exception/Definition/ArgumentNotSetException.md)|If argument not provided by user & don't have a default value set ([RuntimeException](/doc/api/Exception/RuntimeException.md))


### <a name="getDescription">VersionCommand::getDescription()</a>
_Getter for the command description_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getFormatter">VersionCommand::getFormatter()</a>
_Getter for the formatter instance<br/>If no formatter was set for the command, fallback to the global application-wide formatter_

#### Arguments

_No arguments._

#### Return value

_Type:_ [Formatter](/doc/api/IO/Output/Formatter.md)


### <a name="getHelp">VersionCommand::getHelp()</a>
_Getter for the command short help_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getName">VersionCommand::getName()</a>
_Getter for the command name_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getOption">VersionCommand::getOption()</a>
_Retrieve an option value by its name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The name of the queried option

#### Return value

_Type:_ mixed

#### Exceptions

Type|Description
----|-----------
[UndefinedOptionException](/doc/api/Exception/Definition/UndefinedOptionException.md)|If no such option found in the definition ([LogicException](/doc/api/Exception/LogicException.md))


### <a name="getSynopsis">VersionCommand::getSynopsis()</a>
_Get the command synopsis_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getUsage">VersionCommand::getUsage()</a>
_Build the whole command usage/help message with all options/arguments documented_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="ioerror">VersionCommand::ioerror()</a>
_Print a message to standard error with the given ending char_

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|The message to print
$ending|[string](https://www.php.net/manual/language.types.string.php)|The ending string (defaults to "\n")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_


### <a name="ioread">VersionCommand::ioread()</a>
_Read contents from the standard input_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: The contents or **false** in case of failure_


### <a name="iowrite">VersionCommand::iowrite()</a>
_Print a message to standard output with the given ending string_

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|The message to print
$ending|[string](https://www.php.net/manual/language.types.string.php)|The ending string (defaults to "\n")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_


### <a name="run">VersionCommand::run()</a>
_Method running the command_

#### Arguments

Name|Type|Description
----|----|-----------
$args|[array](https://www.php.net/manual/language.types.array.php)|List of the arguments passed via the command-line

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php)<br />_Description: The command exit status code (O for success)_

#### Exceptions

Type|Description
----|-----------
[LogicException](/doc/api/Exception/LogicException.md)|


### <a name="setApplication">VersionCommand::setApplication()</a>
_Setter for the Application instance pointer<br/>NOTA BENE: Application is passed BY-REF_

#### Arguments

Name|Type|Description
----|----|-----------
$application|[Application](/doc/api/Application.md)|The Application instance reference

#### Return value

_Type:_ [self][self]


### <a name="setDescription">VersionCommand::setDescription()</a>
_Setter for the command description_

#### Arguments

Name|Type|Description
----|----|-----------
$desc|[string](https://www.php.net/manual/language.types.string.php)|The description text

#### Return value

_Type:_ [self][self]


### <a name="setFormatter">VersionCommand::setFormatter()</a>
_Setter for the formatter instance property_

#### Arguments

Name|Type|Description
----|----|-----------
$formatter|[Formatter](/doc/api/IO/Output/Formatter.md)|The formatter instance

#### Return value

_Type:_ [static](https://www.php.net/manual-lookup.php?pattern=static)<br />_Description: The instance of the caller class_


### <a name="setHelp">VersionCommand::setHelp()</a>
_Setter for the command help_

#### Arguments

Name|Type|Description
----|----|-----------
$help|[string](https://www.php.net/manual/language.types.string.php)|The help text

#### Return value

_Type:_ [self][self]


### <a name="setName">VersionCommand::setName()</a>
_Setter for the command name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The command name

#### Return value

_Type:_ [self][self]


### <a name="writeln">VersionCommand::writeln()</a>
_Print text to STDOUT_

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string](https://www.php.net/manual/language.types.string.php)|The text to print
$options|[null](https://www.php.net/manual/language.types.null.php)|Kept for symfony BC, but ignored

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php) **&#124;** [int](https://www.php.net/manual/language.types.int.php)



[self]: VersionCommand.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

