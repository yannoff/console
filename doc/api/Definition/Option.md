[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Option

**FQN:** [Yannoff\Component\Console\Definition\Option][self]
<br/>
_**extends** [Item](/doc/api/Definition/Item.md)_
<br/>


## Overview

*Option definition item*</br>


### Constants

- [FLAG](#optionFLAG)
- [MULTI](#optionMULTI)
- [VALUE](#optionVALUE)

### Properties

- [$default](#optiondefault)
- [$hasDefault](#optionhasDefault)
- [$help](#optionhelp)
- [$name](#optionname)
- [$short](#optionshort)
- [$type](#optiontype)

### Methods

- [__construct()](#option__construct)
- [__toString()](#option__toString)
- [escape()](#optionescape)
- [getDefault()](#optiongetDefault)
- [getHelp()](#optiongetHelp)
- [getName()](#optiongetName)
- [getNames()](#optiongetNames)
- [getShortcut()](#optiongetShortcut)
- [getSynopsis()](#optiongetSynopsis)
- [getType()](#optiongetType)
- [getValidTypes()](#optiongetValidTypes)
- [hasDefault()](#optionhasDefault)
- [isFlag()](#optionisFlag)
- [isValidType()](#optionisValidType)
- [isValue()](#optionisValue)
- [setHasDefault()](#optionsetHasDefault)

---
## Constants


### <a name="FLAG">`Option::FLAG`</a>

*Option type: flag*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `20` <br/>

<br/>

### <a name="MULTI">`Option::MULTI`</a>

*Option type: array (ie: multiple values)*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `40` <br/>

<br/>

### <a name="VALUE">`Option::VALUE`</a>

*Option type: value*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `10` <br/>

<br/>


## Properties


### <a name="default">`Option::$default`</a>

*Optional default value for the item*</br>


> type: [mixed][php:mixed] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemdefault)<br/>
<br/>

### <a name="hasDefault">`Option::$hasDefault`</a>

*Flag indicating if default value was set*</br>


> type: [bool][php:bool] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemhasDefault)<br/>
<br/>

### <a name="help">`Option::$help`</a>

*The item help/description message*</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemhelp)<br/>
<br/>

### <a name="name">`Option::$name`</a>

*The item name*</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemname)<br/>
<br/>

### <a name="short">`Option::$short`</a>

*Optional short name for the option*</br>


> type: [string][php:string] **&#124;** [null][php:null] <br/>
> access: protected <br/>

<br/>

### <a name="type">`Option::$type`</a>

*The item type*</br>


> type: [int][php:int] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemtype)<br/>
<br/>


## Methods


### <a name="__construct">`Option::__construct()`</a>

```php
Option::__construct($name, $short, $type, $help, $default)
```

*Option constructor.*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|Option name. This is also the name used as a key in the Definition registry<br/>
$short|[string][php:string]|Optional short name for the option
$type|[int][php:int]|Type of option: value or flag
$help|[string][php:string]|Description text for the option
$default|[mixed][php:mixed]|Optional default value for the option

#### Return value

>_No return value._


#### Exceptions

Type|Description
----|-----------
[InvalidOptionTypeException](/doc/api/Exception/Definition/InvalidOptionTypeException.md)|

<br/><br/>

### <a name="__toString">`Option::__toString()`</a>

```php
Option::__toString()
```

*Default to-string type-cast conversion for Item objects*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#item__toString) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="escape">`Option::escape()`</a>

```php
Option::escape($value)
```

*Escape special chars in value for rendering*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemescape) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$value|[string][php:string]|

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getDefault">`Option::getDefault()`</a>

```php
Option::getDefault($escape)
```

*Getter for the item default value*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemgetDefault) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$escape|[bool][php:bool]|Whether the special chars should be escaped<br/>

#### Return value


> type: [mixed][php:mixed]


<br/><br/>

### <a name="getHelp">`Option::getHelp()`</a>

```php
Option::getHelp()
```

*Getter for the item help message*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemgetHelp) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getName">`Option::getName()`</a>

```php
Option::getName()
```

*Getter for the item name*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemgetName) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getNames">`Option::getNames()`</a>

```php
Option::getNames()
```

*Get the option invocation names (short & long)*</br>


> access: protected <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [array][php:array]


<br/><br/>

### <a name="getShortcut">`Option::getShortcut()`</a>

```php
Option::getShortcut()
```

*Getter for the option's short name*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string] **&#124;** [null][php:null]


<br/><br/>

### <a name="getSynopsis">`Option::getSynopsis()`</a>

```php
Option::getSynopsis($tab, $width)
```

*Return the formatted help for the item*</br>


> access: public <br/>
> overridden from: [Item](/doc/api/Definition/Item.md#itemgetSynopsis) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$tab|[string][php:string]|The tabulation string (defaults to `\t`)<br/>
$width|[int][php:int]|Minimum width for the names column (defaults to `18`)

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getType">`Option::getType()`</a>

```php
Option::getType()
```

*Getter for the item type*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemgetType) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [int][php:int]


<br/><br/>

### <a name="getValidTypes">`Option::getValidTypes()`</a>

```php
Option::getValidTypes()
```

*Give the authorized values for the type property*</br>


> access: public <br/>
> overridden from: [Item](/doc/api/Definition/Item.md#itemgetValidTypes) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [array][php:array]


<br/><br/>

### <a name="hasDefault">`Option::hasDefault()`</a>

```php
Option::hasDefault()
```

*Getter for the hasDefault flag*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemhasDefault) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isFlag">`Option::isFlag()`</a>

```php
Option::isFlag()
```

*True if the option is typed as a flag*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isValidType">`Option::isValidType()`</a>

```php
Option::isValidType($type)
```

*Check whether the given type as a valid value*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemisValidType) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$type|[int][php:int]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isValue">`Option::isValue()`</a>

```php
Option::isValue()
```

*True if the option is typed as a value*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="setHasDefault">`Option::setHasDefault()`</a>

```php
Option::setHasDefault($hasDefault)
```

*Setter for the $hasDefault flag*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemsetHasDefault) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$hasDefault|[bool][php:bool]|

#### Return value


> type: [self][self]


<br/><br/>


[self]: Option.md
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
[php:ReflectionFunction]: https://www.php.net/manual/class.reflectionfunction.php "PHP Built-in: ReflectionFunction"
[php:ReflectionProperty]: https://www.php.net/manual/class.reflectionproperty.php "PHP Built-in: ReflectionProperty"
[php:ReflectionMethod]: https://www.php.net/manual/class.reflectionmethod.php "PHP Built-in: ReflectionMethod"
[php:ReflectionConstant]: https://www.php.net/manual/class.reflectionconstant.php "PHP Built-in: ReflectionConstant"
[php:StdClass]: https://www.php.net/manual/class.stdclass.php "PHP Built-in: StdClass"
[php:Throwable]: https://www.php.net/manual/class.throwable.php "PHP Built-in: Throwable"
[php:Traversable]: https://www.php.net/manual/class.traversable.php "PHP Built-in: Traversable"

[&laquo; Back to Table Of Contents](/doc/api/index.md)

<!-- Generated: 2025-11-17 17:34:17 +01:00 -->