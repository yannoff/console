[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class ArgvResolver

**FQN:** [Yannoff\Component\Console\ArgvResolver][self]
<br/>
_**extends** [StreamAware](/doc/api/IO/StreamAware.md)_<br/>


## Overview


**Properties**

- [$arguments](#arguments)
- [$definition](#definition)
- [$options](#options)

**Methods**

- [__construct()](#__construct)
- [getArgumentDefinition()](#getArgumentDefinition)
- [getArgumentValue()](#getArgumentValue)
- [getOptionDefinition()](#getOptionDefinition)
- [getOptionValue()](#getOptionValue)
- [getType()](#getType)
- [hasArgumentDefinition()](#hasArgumentDefinition)
- [hasArgumentValue()](#hasArgumentValue)
- [hasOptionDefinition()](#hasOptionDefinition)
- [hasOptionValue()](#hasOptionValue)
- [ioerror()](#ioerror)
- [ioread()](#ioread)
- [iowrite()](#iowrite)
- [resolve()](#resolve)

---

## Properties


### <a name="arguments">ArgvResolver::$arguments</a>


_Argument values, stored by name_

**type**: [array](https://www.php.net/manual/language.types.array.php)<br/>
**access**: protected<br/>


### <a name="definition">ArgvResolver::$definition</a>


_The command arguments & options definition registry<br/>This is a pointer to the command's definition registry instance_

**type**: [Definition](/doc/api/Definition.md)<br/>
**access**: protected<br/>


### <a name="options">ArgvResolver::$options</a>


_Option values, stored by name_

**type**: [array](https://www.php.net/manual/language.types.array.php)<br/>
**access**: protected<br/>


---

## Methods


### <a name="__construct">ArgvResolver::__construct()</a>
_ArgvResolver constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$definition|[Definition](/doc/api/Definition.md)|The arguments & options definition registry, passed from the Command instance<br/>NOTE: We pass the definition registry BY REF: when the resolver is instantiated, it has not been setup yet

#### Return value

_No return value._



### <a name="getArgumentDefinition">ArgvResolver::getArgumentDefinition()</a>
_Get an argument definition by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The argument name

#### Return value

_Type:_ [Argument](/doc/api/Definition/Argument.md)

#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|If no such argument found in the definition ([LogicException](/doc/api/Exception/LogicException.md))


### <a name="getArgumentValue">ArgvResolver::getArgumentValue()</a>
_Get an argument value by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The argument name

#### Return value

_Type:_ mixed

#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|If no such argument found in the definition ([LogicException](/doc/api/Exception/LogicException.md))
[ArgumentNotSetException](/doc/api/Exception/Definition/ArgumentNotSetException.md)|If argument not provided by user & don't have a default value set ([RuntimeException](/doc/api/Exception/RuntimeException.md))


### <a name="getOptionDefinition">ArgvResolver::getOptionDefinition()</a>
_Get an option definition by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [Option](/doc/api/Definition/Option.md)

#### Exceptions

Type|Description
----|-----------
[UnknownOptionException](/doc/api/Exception/Definition/UnknownOptionException.md)|If no such option found in the definition ([LogicException](/doc/api/Exception/LogicException.md))


### <a name="getOptionValue">ArgvResolver::getOptionValue()</a>
_Get an option value by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ mixed

#### Exceptions

Type|Description
----|-----------
[UnknownOptionException](/doc/api/Exception/Definition/UnknownOptionException.md)|If no such option found in the definition ([LogicException](/doc/api/Exception/LogicException.md))


### <a name="getType">ArgvResolver::getType()</a>
_Detect command-line argument type from its name:<br/>long option, short option or argument_

#### Arguments

Name|Type|Description
----|----|-----------
$arg|[string](https://www.php.net/manual/language.types.string.php)|The raw argument from the command-line (eg: "--option" or "-o" or "argument")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php)<br />_Description: One of the TYPE_* constants_


### <a name="hasArgumentDefinition">ArgvResolver::hasArgumentDefinition()</a>
_Check for the existence of the argument definition by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The argument name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="hasArgumentValue">ArgvResolver::hasArgumentValue()</a>
_Check for the existence of the argument value by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The argument name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="hasOptionDefinition">ArgvResolver::hasOptionDefinition()</a>
_Check for the existence of the option definition by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="hasOptionValue">ArgvResolver::hasOptionValue()</a>
_Check for the existence of the option value by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="ioerror">ArgvResolver::ioerror()</a>
_Print a message to standard error with the given ending char_

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|The message to print
$ending|[string](https://www.php.net/manual/language.types.string.php)|The ending string (defaults to "\n")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_


### <a name="ioread">ArgvResolver::ioread()</a>
_Read contents from the standard input_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: The contents or **false** in case of failure_


### <a name="iowrite">ArgvResolver::iowrite()</a>
_Print a message to standard output with the given ending string_

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|The message to print
$ending|[string](https://www.php.net/manual/language.types.string.php)|The ending string (defaults to "\n")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_


### <a name="resolve">ArgvResolver::resolve()</a>
_Parse the given command line arguments and populate resolver<br/>arguments & options values accordingly_

#### Arguments

Name|Type|Description
----|----|-----------
$argv|[array](https://www.php.net/manual/language.types.array.php)|The command line arguments

#### Return value

_No return value._


#### Exceptions

Type|Description
----|-----------
[TooManyArgumentsException](/doc/api/Exception/Definition/TooManyArgumentsException.md)|If an extra argument is found when parsing ([RuntimeException](/doc/api/Exception/RuntimeException.md))
[InvalidOptionTypeException](/doc/api/Exception/Definition/InvalidOptionTypeException.md)|If the option type has an unexpected value ([LogicException](/doc/api/Exception/LogicException.md))
[UnknownOptionException](/doc/api/Exception/Definition/UnknownOptionException.md)|If an unknown option name is encountered during args parsing ([RuntimeException](/doc/api/Exception/RuntimeException.md))



[self]: ArgvResolver.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

