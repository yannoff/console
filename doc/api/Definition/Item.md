[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Item

**FQN:** [Yannoff\Component\Console\Definition\Item][self]
<br/>



## Overview

_Super-class for both Option & Argument_
<br/><br/>

**Properties**

- [$default](#default)
- [$hasDefault](#hasDefault)
- [$help](#help)
- [$name](#name)
- [$type](#type)

**Methods**

- [getDefault()](#getDefault)
- [getHelp()](#getHelp)
- [getName()](#getName)
- [getSynopsis()](#getSynopsis)
- [getType()](#getType)
- [getValidTypes()](#getValidTypes)
- [hasDefault()](#hasDefault)
- [isValidType()](#isValidType)
- [setHasDefault()](#setHasDefault)

---

## Properties


### <a name="default">Item::$default</a>


_Optional default value for the item_

**type**: mixed<br/>
**access**: protected<br/>


### <a name="hasDefault">Item::$hasDefault</a>


_Flag indicating if default value was set_

**type**: [bool](https://www.php.net/manual/language.types.bool.php)<br/>
**access**: protected<br/>


### <a name="help">Item::$help</a>


_The item help/description message_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="name">Item::$name</a>


_The item name_

**type**: [string](https://www.php.net/manual/language.types.string.php)<br/>
**access**: protected<br/>


### <a name="type">Item::$type</a>


_The item type_

**type**: [int](https://www.php.net/manual/language.types.int.php)<br/>
**access**: protected<br/>


---

## Methods


### <a name="getDefault">Item::getDefault()</a>
_Getter for the item default value_

#### Arguments

_No arguments._

#### Return value

_Type:_ mixed


### <a name="getHelp">Item::getHelp()</a>
_Getter for the item help message_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getName">Item::getName()</a>
_Getter for the item name_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getSynopsis">Item::getSynopsis()</a>
_Return the formatted help for the item_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="getType">Item::getType()</a>
_Getter for the item type_

#### Arguments

_No arguments._

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php)


### <a name="getValidTypes">Item::getValidTypes()</a>
_Give the authorized values for the type property_

#### Arguments

_No arguments._

#### Return value

_Type:_ [array](https://www.php.net/manual/language.types.array.php)


### <a name="hasDefault">Item::hasDefault()</a>
_Getter for the hasDefault flag_

#### Arguments

_No arguments._

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="isValidType">Item::isValidType()</a>
_Check whether the given type as a valid value_

#### Arguments

Name|Type|Description
----|----|-----------
$type|[int](https://www.php.net/manual/language.types.int.php)|

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="setHasDefault">Item::setHasDefault()</a>
_Setter for the $hasDefault flag_

#### Arguments

Name|Type|Description
----|----|-----------
$hasDefault|[bool](https://www.php.net/manual/language.types.bool.php)|

#### Return value

_Type:_ [self][self]



[self]: Item.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

