[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Item

**FQN:** [Yannoff\Component\Console\Definition\Item][self]
<br/>



## Overview

*Super-class for both Option & Argument*</br>


### Properties

- [$default](#itemdefault)
- [$hasDefault](#itemhasDefault)
- [$help](#itemhelp)
- [$name](#itemname)
- [$type](#itemtype)

### Methods

- [__toString()](#item__toString)
- [escape()](#itemescape)
- [getDefault()](#itemgetDefault)
- [getHelp()](#itemgetHelp)
- [getName()](#itemgetName)
- [getSynopsis()](#itemgetSynopsis)
- [getType()](#itemgetType)
- [getValidTypes()](#itemgetValidTypes)
- [hasDefault()](#itemhasDefault)
- [isValidType()](#itemisValidType)
- [setHasDefault()](#itemsetHasDefault)

---

## Properties


### <a name="default">`Item::$default`</a>

*Optional default value for the item*</br>


> type: [mixed][php:mixed] <br/>
> access: protected <br/>

<br/>

### <a name="hasDefault">`Item::$hasDefault`</a>

*Flag indicating if default value was set*</br>


> type: [bool][php:bool] <br/>
> access: protected <br/>

<br/>

### <a name="help">`Item::$help`</a>

*The item help/description message*</br>


> type: [string][php:string] <br/>
> access: protected <br/>

<br/>

### <a name="name">`Item::$name`</a>

*The item name*</br>


> type: [string][php:string] <br/>
> access: protected <br/>

<br/>

### <a name="type">`Item::$type`</a>

*The item type*</br>


> type: [int][php:int] <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="__toString">`Item::__toString()`</a>

```php
Item::__toString()
```

*Default to-string type-cast conversion for Item objects*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="escape">`Item::escape()`</a>

```php
Item::escape($value)
```

*Escape special chars in value for rendering*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$value|[string][php:string]|

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getDefault">`Item::getDefault()`</a>

```php
Item::getDefault($escape)
```

*Getter for the item default value*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$escape|[bool][php:bool]|Whether the special chars should be escaped (default: `false`)<br/>

#### Return value

_Either the escaped or raw value_

> type: [mixed][php:mixed]


<br/><br/>

### <a name="getHelp">`Item::getHelp()`</a>

```php
Item::getHelp()
```

*Getter for the item help message*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getName">`Item::getName()`</a>

```php
Item::getName()
```

*Getter for the item name*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getSynopsis">`Item::getSynopsis()`</a>

```php
Item::getSynopsis($tab, $width)
```

*Return the formatted help for the item*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$tab|[string][php:string]|The tabulation string (defaults to `\t`)<br/>
$width|[int][php:int]|Minimum width for the names column (defaults to `18`)

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getType">`Item::getType()`</a>

```php
Item::getType()
```

*Getter for the item type*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [int][php:int]


<br/><br/>

### <a name="getValidTypes">`Item::getValidTypes()`</a>

```php
Item::getValidTypes()
```

*Give the authorized values for the type property*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [array][php:array]


<br/><br/>

### <a name="hasDefault">`Item::hasDefault()`</a>

```php
Item::hasDefault()
```

*Getter for the hasDefault flag*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isValidType">`Item::isValidType()`</a>

```php
Item::isValidType($type)
```

*Check whether the given type as a valid value*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$type|[int][php:int]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="setHasDefault">`Item::setHasDefault()`</a>

```php
Item::setHasDefault($hasDefault)
```

*Setter for the $hasDefault flag*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$hasDefault|[bool][php:bool]|

#### Return value


> type: [self][self]


<br/><br/>


[self]: Item.md
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

<!-- Generated: 2025-11-18 12:05:19 +01:00 -->