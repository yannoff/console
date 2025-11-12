[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Argument

**FQN:** [Yannoff\Component\Console\Definition\Argument][self]
<br/>
_**extends** [Item](/doc/api/Definition/Item.md)_
<br/>


## Overview

*Argument definition item*</br>


### Constants

- [OPTIONAL](#argumentOPTIONAL)
- [REQUIRED](#argumentREQUIRED)

### Properties

- [$default](#argumentdefault)
- [$hasDefault](#argumenthasDefault)
- [$help](#argumenthelp)
- [$name](#argumentname)
- [$type](#argumenttype)

### Methods

- [__construct()](#argument__construct)
- [__toString()](#argument__toString)
- [getDefault()](#argumentgetDefault)
- [getHelp()](#argumentgetHelp)
- [getName()](#argumentgetName)
- [getSynopsis()](#argumentgetSynopsis)
- [getType()](#argumentgetType)
- [getValidTypes()](#argumentgetValidTypes)
- [hasDefault()](#argumenthasDefault)
- [isMandatory()](#argumentisMandatory)
- [isOptional()](#argumentisOptional)
- [isRequired()](#argumentisRequired)
- [isValidType()](#argumentisValidType)
- [setHasDefault()](#argumentsetHasDefault)

---
## Constants


### <a name="OPTIONAL">`Argument::OPTIONAL`</a>

*Argument type: optional*</br>
> type: [int][php:int] <br/>
> access: public <br/>
> value: `2` <br/>

<br/>

### <a name="REQUIRED">`Argument::REQUIRED`</a>

*Argument type: required*</br>
> type: [int][php:int] <br/>
> access: public <br/>
> value: `1` <br/>

<br/>


## Properties


### <a name="default">`Argument::$default`</a>

*Optional default value for the item*</br>


> type: mixed <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemdefault)<br/>
<br/>

### <a name="hasDefault">`Argument::$hasDefault`</a>

*Flag indicating if default value was set*</br>


> type: [bool][php:bool] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemhasDefault)<br/>
<br/>

### <a name="help">`Argument::$help`</a>

*The item help/description message*</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemhelp)<br/>
<br/>

### <a name="name">`Argument::$name`</a>

*The item name*</br>


> type: [string][php:string] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemname)<br/>
<br/>

### <a name="type">`Argument::$type`</a>

*The item type*</br>


> type: [int][php:int] <br/>
> access: protected <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemtype)<br/>
<br/>


## Methods


### <a name="__construct">`Argument::__construct()`</a>

```php
Argument::__construct($name, $type, $help, $default)
```

*Argument constructor.*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The argument name<br/>
$type|[int][php:int]|The argument type: optional/required
$help|[string][php:string]|The argument help message
$default|mixed|Optional default value for the argument

#### Return value

>_No return value._


#### Exceptions

Type|Description
----|-----------
[InvalidArgumentTypeException](/doc/api/Exception/Definition/InvalidArgumentTypeException.md)|

<br/><br/>

### <a name="__toString">`Argument::__toString()`</a>

```php
Argument::__toString()
```

*Default to-string type-cast conversion for Item objects*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#item__toString) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getDefault">`Argument::getDefault()`</a>

```php
Argument::getDefault()
```

*Getter for the item default value*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemgetDefault) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: mixed


<br/><br/>

### <a name="getHelp">`Argument::getHelp()`</a>

```php
Argument::getHelp()
```

*Getter for the item help message*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemgetHelp) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getName">`Argument::getName()`</a>

```php
Argument::getName()
```

*Getter for the item name*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemgetName) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getSynopsis">`Argument::getSynopsis()`</a>

```php
Argument::getSynopsis($tab, $width)
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

### <a name="getType">`Argument::getType()`</a>

```php
Argument::getType()
```

*Getter for the item type*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemgetType) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [int][php:int]


<br/><br/>

### <a name="getValidTypes">`Argument::getValidTypes()`</a>

```php
Argument::getValidTypes()
```

*Give the authorized values for the type property*</br>


> access: public <br/>
> overridden from: [Item](/doc/api/Definition/Item.md#itemgetValidTypes) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [array][php:array]


<br/><br/>

### <a name="hasDefault">`Argument::hasDefault()`</a>

```php
Argument::hasDefault()
```

*Getter for the hasDefault flag*</br>


> access: public <br/>
> inherited from: [Item](/doc/api/Definition/Item.md#itemhasDefault) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isMandatory">`Argument::isMandatory()`</a>

```php
Argument::isMandatory()
```

*True if the argument is required AND has no default value set*</br>
*Indeed a required argument with its default value set is de facto not mandatory*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isOptional">`Argument::isOptional()`</a>

```php
Argument::isOptional()
```

*True if the argument is typed as "optional"*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isRequired">`Argument::isRequired()`</a>

```php
Argument::isRequired()
```

*True if the argument is typed as required*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isValidType">`Argument::isValidType()`</a>

```php
Argument::isValidType($type)
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

### <a name="setHasDefault">`Argument::setHasDefault()`</a>

```php
Argument::setHasDefault($hasDefault)
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


[self]: Argument.md
[php:array]: https://www.php.net/manual/language.types.array.php "PHP Built-in: array"
[php:bool]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: bool"
[php:boolean]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: boolean"
[php:callable]: https://www.php.net/manual/language.types.callable.php "PHP Built-in: callable"
[php:false]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: false"
[php:float]: https://www.php.net/manual/language.types.float.php "PHP Built-in: float"
[php:int]: https://www.php.net/manual/language.types.integer.php "PHP Built-in: int"
[php:integer]: https://www.php.net/manual/language.types.integer.php "PHP Built-in: integer"
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

<!-- Generated: 2025-11-12 11:41:42 +01:00 -->