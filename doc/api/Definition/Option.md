[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Option

**FQN:** [Yannoff\Component\Console\Definition\Option][self]
<br/>
_**extends** [Item](/doc/api/Definition/Item.md)_<br/>


## Overview

_Option definition item_
<br/><br/>

**Properties**

- [$default](#default)
- [$hasDefault](#hasDefault)
- [$help](#help)
- [$name](#name)
- [$short](#short)
- [$type](#type)

**Methods**

- [__construct()](#__construct)
- [getDefault()](#getDefault)
- [getHelp()](#getHelp)
- [getName()](#getName)
- [getNames()](#getNames)
- [getShortcut()](#getShortcut)
- [getSynopsis()](#getSynopsis)
- [getType()](#getType)
- [getValidTypes()](#getValidTypes)
- [hasDefault()](#hasDefault)
- [isFlag()](#isFlag)
- [isValidType()](#isValidType)
- [isValue()](#isValue)
- [setHasDefault()](#setHasDefault)

---

## Properties


### <a name="default">Option::$default</a>

_inherited from: [Item](/doc/api/Definition/Item.md#default)_

_Optional default value for the item_

**type**: mixed<br/>
**access**: protected<br/>


### <a name="hasDefault">Option::$hasDefault</a>

_inherited from: [Item](/doc/api/Definition/Item.md#hasDefault)_

_Flag indicating if default value was set_

**type**: [bool](https://www.php.net/manual/language.types.bool.php)<br/>
**access**: protected<br/>


### <a name="help">Option::$help</a>

_inherited from: [Item](/doc/api/Definition/Item.md#help)_

_The item help/description message_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="name">Option::$name</a>

_inherited from: [Item](/doc/api/Definition/Item.md#name)_

_The item name_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="short">Option::$short</a>


_Optional short name for the option_

**type**: [string|null](https://www.php.net/manual-lookup.php?pattern=string|null)<br/>
**access**: protected<br/>


### <a name="type">Option::$type</a>

_inherited from: [Item](/doc/api/Definition/Item.md#type)_

_The item type_

**type**: [int](https://www.php.net/manual/language.types.int.php)<br/>
**access**: protected<br/>


---

## Methods


### <a name="__construct">Option::__construct()</a>
_Option constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|Option name. This is also the name used as a key in the Definition registry
$short|[string](https://www.php.net/manual/language.types.string.php)|Optional short name for the option
$type|[int](https://www.php.net/manual/language.types.int.php)|Type of option: value or flag
$help|[string](https://www.php.net/manual/language.types.string.php)|Description text for the option
$default|mixed|Optional default value for the option

#### Return value

_No return value._


#### Exceptions

Type|Description
----|-----------
[InvalidOptionTypeException](/doc/api/Exception/Definition/InvalidOptionTypeException.md)|


### <a name="getDefault">Option::getDefault()</a>
_Getter for the item default value_

#### Arguments

_No arguments._

#### Return value

_Type:_ mixed


### <a name="getHelp">Option::getHelp()</a>
_Getter for the item help message_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getName">Option::getName()</a>
_Getter for the item name_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getNames">Option::getNames()</a>
_Get the option invocation names (short & long)_

#### Arguments

_No arguments._

#### Return value

_Type:_ [array](https://www.php.net/manual/language.types.array.php)


### <a name="getShortcut">Option::getShortcut()</a>
_Getter for the option's short name_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php) **&#124;** [null](https://www.php.net/manual/language.types.null.php)


### <a name="getSynopsis">Option::getSynopsis()</a>
_Return the formatted help for the item_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getType">Option::getType()</a>
_Getter for the item type_

#### Arguments

_No arguments._

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php)


### <a name="getValidTypes">Option::getValidTypes()</a>
_Give the authorized values for the type property_

#### Arguments

_No arguments._

#### Return value

_Type:_ [array](https://www.php.net/manual/language.types.array.php)


### <a name="hasDefault">Option::hasDefault()</a>
_Getter for the hasDefault flag_

#### Arguments

_No arguments._

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="isFlag">Option::isFlag()</a>
_True if the option is typed as a flag_

#### Arguments

_No arguments._

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="isValidType">Option::isValidType()</a>
_Check whether the given type as a valid value_

#### Arguments

Name|Type|Description
----|----|-----------
$type|[int](https://www.php.net/manual/language.types.int.php)|

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="isValue">Option::isValue()</a>
_True if the option is typed as a value_

#### Arguments

_No arguments._

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="setHasDefault">Option::setHasDefault()</a>
_Setter for the $hasDefault flag_

#### Arguments

Name|Type|Description
----|----|-----------
$hasDefault|[bool](https://www.php.net/manual/language.types.bool.php)|

#### Return value

_Type:_ [self][self]



[self]: Option.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

