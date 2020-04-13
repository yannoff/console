[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Definition

**FQN:** [Yannoff\Component\Console\Definition][self]
<br/>



## Overview

_The registry which holds options & arguments definitions_
<br/><br/>

**Properties**

- [$aliases](#aliases)
- [$arguments](#arguments)
- [$options](#options)

**Methods**

- [addArgument()](#addArgument)
- [addOption()](#addOption)
- [all()](#all)
- [countArguments()](#countArguments)
- [getArgSynopsis()](#getArgSynopsis)
- [getArgument()](#getArgument)
- [getArguments()](#getArguments)
- [getLongOption()](#getLongOption)
- [getNameByPosition()](#getNameByPosition)
- [getOption()](#getOption)
- [getOptionalArgs()](#getOptionalArgs)
- [getRequiredArgs()](#getRequiredArgs)
- [getShortOption()](#getShortOption)
- [hasArgument()](#hasArgument)
- [hasLongOption()](#hasLongOption)
- [hasOption()](#hasOption)
- [hasShortOption()](#hasShortOption)

---

## Properties


### <a name="aliases">Definition::$aliases</a>


_Mapping between option definitions short & long names_

**type**: [array](https://www.php.net/manual/language.types.array.php)<br/>
**access**: protected<br/>


### <a name="arguments">Definition::$arguments</a>


_Registry for argument definitions<br/>Each argument is stored using its name as a key_

**type**: [Argument[]](/doc/api/Definition/Argument.md)<br/>
**access**: protected<br/>


### <a name="options">Definition::$options</a>


_Registry for option definitions<br/>Each option is stored using its long name as a key_

**type**: [Option[]](/doc/api/Definition/Option.md)<br/>
**access**: protected<br/>


---

## Methods


### <a name="addArgument">Definition::addArgument()</a>
_Register an argument definition_

#### Arguments

Name|Type|Description
----|----|-----------
$argument|[Argument](/doc/api/Definition/Argument.md)|

#### Return value

_Type:_ [self][self]


### <a name="addOption">Definition::addOption()</a>
_Register an option definition_

#### Arguments

Name|Type|Description
----|----|-----------
$option|[Option](/doc/api/Definition/Option.md)|

#### Return value

_Type:_ [self][self]


### <a name="all">Definition::all()</a>
_Get all items array for the given registry name_

#### Arguments

Name|Type|Description
----|----|-----------
$registry|[string](https://www.php.net/manual/language.types.string.php)|The registry name

#### Return value

_Type:_ [Item[]](/doc/api/Definition/Item.md)

#### Exceptions

Type|Description
----|-----------
[LogicException](/doc/api/Exception/LogicException.md)|If the queried registry does not exist


### <a name="countArguments">Definition::countArguments()</a>
_Return the total number of defined arguments_

#### Arguments

_No arguments._

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php)


### <a name="getArgSynopsis">Definition::getArgSynopsis()</a>
_Return the list of arguments, pre-formatted for Command help_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getArgument">Definition::getArgument()</a>
_Get an argument from the registry by its name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The argument name

#### Return value

_Type:_ [Argument](/doc/api/Definition/Argument.md)

#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|If not found in the registry


### <a name="getArguments">Definition::getArguments()</a>
_Return the arguments list, optionally filtered by a custom callback_

#### Arguments

Name|Type|Description
----|----|-----------
$callback|[callable](https://www.php.net/manual/language.types.callable.php) &#124; [null](https://www.php.net/manual/language.types.null.php)|Optional filtering callback

#### Return value

_Type:_ [Argument[]](/doc/api/Definition/Argument.md)


### <a name="getLongOption">Definition::getLongOption()</a>
_Get an option from the registry by its long name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [Option](/doc/api/Definition/Option.md)


### <a name="getNameByPosition">Definition::getNameByPosition()</a>
_Get the name of the item from its positional index in the given registry_

#### Arguments

Name|Type|Description
----|----|-----------
$registry|[string](https://www.php.net/manual/language.types.string.php)|The registry name
$idx|[int](https://www.php.net/manual/language.types.int.php)|The item position

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getOption">Definition::getOption()</a>
_Get an option by its name, searching both long & short names_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [Option](/doc/api/Definition/Option.md)

#### Exceptions

Type|Description
----|-----------
[UndefinedOptionException](/doc/api/Exception/Definition/UndefinedOptionException.md)|If not found either by short or long name


### <a name="getOptionalArgs">Definition::getOptionalArgs()</a>
_Return the optional arguments list_

#### Arguments

_No arguments._

#### Return value

_Type:_ [Argument[]](/doc/api/Definition/Argument.md)


### <a name="getRequiredArgs">Definition::getRequiredArgs()</a>
_Return the mandatory arguments list_

#### Arguments

_No arguments._

#### Return value

_Type:_ [Argument[]](/doc/api/Definition/Argument.md)


### <a name="getShortOption">Definition::getShortOption()</a>
_Get an option from the registry by its short name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [Option](/doc/api/Definition/Option.md)


### <a name="hasArgument">Definition::hasArgument()</a>
_Check for existence of the given argument in the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The argument name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="hasLongOption">Definition::hasLongOption()</a>
_Check for existence of the given option in the registry by its long name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="hasOption">Definition::hasOption()</a>
_Check for existence of the given option in the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="hasShortOption">Definition::hasShortOption()</a>
_Check for existence of the given option in the registry by its short name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The option name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)



[self]: Definition.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

