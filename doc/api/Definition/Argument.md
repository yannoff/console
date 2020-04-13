[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Argument

**FQN:** [Yannoff\Component\Console\Definition\Argument][self]
<br/>
_**extends** [Item](/doc/api/Definition/Item.md)_<br/>


## Overview

_Argument definition item_
<br/><br/>

**Properties**

- [$default](#default)
- [$hasDefault](#hasDefault)
- [$help](#help)
- [$name](#name)
- [$type](#type)

**Methods**

- [__construct()](#__construct)
- [getDefault()](#getDefault)
- [getHelp()](#getHelp)
- [getName()](#getName)
- [getSynopsis()](#getSynopsis)
- [getType()](#getType)
- [getValidTypes()](#getValidTypes)
- [hasDefault()](#hasDefault)
- [isOptional()](#isOptional)
- [isRequired()](#isRequired)
- [isValidType()](#isValidType)
- [setHasDefault()](#setHasDefault)

---

## Properties


### <a name="default">Argument::$default</a>

_inherited from: [Item](/doc/api/Definition/Item.md#default)_

_Optional default value for the item_

**type**: mixed<br/>
**access**: protected<br/>


### <a name="hasDefault">Argument::$hasDefault</a>

_inherited from: [Item](/doc/api/Definition/Item.md#hasDefault)_

_Flag indicating if default value was set_

**type**: [bool](https://www.php.net/manual/language.types.bool.php)<br/>
**access**: protected<br/>


### <a name="help">Argument::$help</a>

_inherited from: [Item](/doc/api/Definition/Item.md#help)_

_The item help/description message_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="name">Argument::$name</a>

_inherited from: [Item](/doc/api/Definition/Item.md#name)_

_The item name_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="type">Argument::$type</a>

_inherited from: [Item](/doc/api/Definition/Item.md#type)_

_The item type_

**type**: [int](https://www.php.net/manual/language.types.int.php)<br/>
**access**: protected<br/>


---

## Methods


### <a name="__construct">Argument::__construct()</a>
_Argument constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The argument name
$type|[int](https://www.php.net/manual/language.types.int.php)|The argument type: optional/required
$help|[string](https://www.php.net/manual/language.types.string.php)|The argument help message
$default|mixed|Optional default value for the argument

#### Return value

_No return value._


#### Exceptions

Type|Description
----|-----------
[InvalidArgumentTypeException](/doc/api/Exception/Definition/InvalidArgumentTypeException.md)|


### <a name="getDefault">Argument::getDefault()</a>
_Getter for the item default value_

#### Arguments

_No arguments._

#### Return value

_Type:_ mixed


### <a name="getHelp">Argument::getHelp()</a>
_Getter for the item help message_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getName">Argument::getName()</a>
_Getter for the item name_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getSynopsis">Argument::getSynopsis()</a>
_Return the formatted help for the item_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getType">Argument::getType()</a>
_Getter for the item type_

#### Arguments

_No arguments._

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php)


### <a name="getValidTypes">Argument::getValidTypes()</a>
_Give the authorized values for the type property_

#### Arguments

_No arguments._

#### Return value

_Type:_ [array](https://www.php.net/manual/language.types.array.php)


### <a name="hasDefault">Argument::hasDefault()</a>
_Getter for the hasDefault flag_

#### Arguments

_No arguments._

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="isOptional">Argument::isOptional()</a>
_True if the argument is typed as "optional"_

#### Arguments

_No arguments._

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="isRequired">Argument::isRequired()</a>
_True if the argument is typed as required_

#### Arguments

_No arguments._

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="isValidType">Argument::isValidType()</a>
_Check whether the given type as a valid value_

#### Arguments

Name|Type|Description
----|----|-----------
$type|[int](https://www.php.net/manual/language.types.int.php)|

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="setHasDefault">Argument::setHasDefault()</a>
_Setter for the $hasDefault flag_

#### Arguments

Name|Type|Description
----|----|-----------
$hasDefault|[bool](https://www.php.net/manual/language.types.bool.php)|

#### Return value

_Type:_ [self][self]



[self]: Argument.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

