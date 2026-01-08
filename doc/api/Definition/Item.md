[API Reference](/doc/api/index.md) &raquo; [Yannoff](../index.md) &raquo; [Component](../index.md) &raquo; [Console](../index.md) &raquo; [Definition](./index.md) &raquo; [Item][self]


# Class Item

**FQN:** [Yannoff\Component\Console\Definition\Item][self]
<br/>



## Overview

_Super-class for both Option & Argument_</br>

Source file: [src/Definition/Item.php](/src/Definition/Item.php)
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

_Optional default value for the item_</br>


> type: [mixed][php:mixed] <br/>
> access: protected <br/>

<br/>

### <a name="hasDefault">`Item::$hasDefault`</a>

_Flag indicating if default value was set_</br>


> type: [bool][php:bool] <br/>
> access: protected <br/>

<br/>

### <a name="help">`Item::$help`</a>

_The item help/description message_</br>


> type: [string][php:string] <br/>
> access: protected <br/>

<br/>

### <a name="name">`Item::$name`</a>

_The item name_</br>


> type: [string][php:string] <br/>
> access: protected <br/>

<br/>

### <a name="type">`Item::$type`</a>

_The item type_</br>


> type: [int][php:int] <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="__toString">`Item::__toString()`</a>

```php
Item::__toString()
```

_Default to-string type-cast conversion for Item objects_</br>


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

_Escape special chars in value for rendering_</br>


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

_Getter for the item default value_</br>


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

_Getter for the item help message_</br>


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

_Getter for the item name_</br>


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

_Return the formatted help for the item_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$tab|[string][php:string]|The tabulation string (defaults to `\t`)
$width|[int][php:int]|Minimum width for the names column (defaults to `18`)<br/>

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getType">`Item::getType()`</a>

```php
Item::getType()
```

_Getter for the item type_</br>


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

_Give the authorized values for the type property_</br>


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

_Getter for the hasDefault flag_</br>


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

_Check whether the given type as a valid value_</br>


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

_Setter for the $hasDefault flag_</br>


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


<!-- Generated: 2026-01-08 15:51:59 +01:00 -->