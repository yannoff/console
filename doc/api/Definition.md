[API Reference](/doc/api/index.md) &raquo; [Yannoff](./index.md) &raquo; [Component](./index.md) &raquo; [Console](./index.md) &raquo; [Definition][self]


# Class Definition

**FQN:** [Yannoff\Component\Console\Definition][self]
<br/>



## Overview

_The registry which holds options & arguments definitions_</br>

Source file: [src/Definition.php](/src/Definition.php)
### Properties

- [$aliases](#definitionaliases)
- [$arguments](#definitionarguments)
- [$options](#definitionoptions)

### Methods

- [addArgument()](#definitionaddArgument)
- [addOption()](#definitionaddOption)
- [all()](#definitionall)
- [countArguments()](#definitioncountArguments)
- [getArgSynopsis()](#definitiongetArgSynopsis)
- [getArgument()](#definitiongetArgument)
- [getArguments()](#definitiongetArguments)
- [getLongOption()](#definitiongetLongOption)
- [getMandatoryArgs()](#definitiongetMandatoryArgs)
- [getNameByPosition()](#definitiongetNameByPosition)
- [getOption()](#definitiongetOption)
- [getOptionalArgs()](#definitiongetOptionalArgs)
- [getRequiredArgs()](#definitiongetRequiredArgs)
- [getShortOption()](#definitiongetShortOption)
- [hasArgument()](#definitionhasArgument)
- [hasLongOption()](#definitionhasLongOption)
- [hasOption()](#definitionhasOption)
- [hasShortOption()](#definitionhasShortOption)

---

## Properties


### <a name="aliases">`Definition::$aliases`</a>

_Mapping between option definitions short & long names_</br>


> type: [array][php:array] <br/>
> access: protected <br/>

<br/>

### <a name="arguments">`Definition::$arguments`</a>

_Registry for argument definitions_</br>
_Each argument is stored using its name as a key_</br>


> type: [Argument[]](/doc/api/Definition/Argument.md) <br/>
> access: protected <br/>

<br/>

### <a name="options">`Definition::$options`</a>

_Registry for option definitions_</br>
_Each option is stored using its long name as a key_</br>


> type: [Option[]](/doc/api/Definition/Option.md) <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="addArgument">`Definition::addArgument()`</a>

```php
Definition::addArgument($argument)
```

_Register an argument definition_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$argument|[Argument](/doc/api/Definition/Argument.md)|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="addOption">`Definition::addOption()`</a>

```php
Definition::addOption($option)
```

_Register an option definition_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$option|[Option](/doc/api/Definition/Option.md)|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="all">`Definition::all()`</a>

```php
Definition::all($register)
```

_Get all items array for the given registry name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$register|[string][php:string]|

#### Return value


> type: [Item[]](/doc/api/Definition/Item.md)


#### Exceptions

Type|Description
----|-----------
[LogicException](/doc/api/Exception/LogicException.md)|

<br/><br/>

### <a name="countArguments">`Definition::countArguments()`</a>

```php
Definition::countArguments()
```

_Return the total number of defined arguments_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [int][php:int]


<br/><br/>

### <a name="getArgSynopsis">`Definition::getArgSynopsis()`</a>

```php
Definition::getArgSynopsis()
```

_Return the list of arguments, pre-formatted for Command help_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getArgument">`Definition::getArgument()`</a>

```php
Definition::getArgument($name)
```

_Get argument from the registry by its name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [Argument](/doc/api/Definition/Argument.md)


#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|

<br/><br/>

### <a name="getArguments">`Definition::getArguments()`</a>

```php
Definition::getArguments($callback)
```

_Return the arguments list, optionally filtered by a custom callback_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$callback|[callable][php:callable] &#124; [null][php:null]|Optional filtering callback<br/>

#### Return value


> type: [Argument[]](/doc/api/Definition/Argument.md)


<br/><br/>

### <a name="getLongOption">`Definition::getLongOption()`</a>

```php
Definition::getLongOption($name)
```

_Get option from the registry by its long name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [Option](/doc/api/Definition/Option.md)


<br/><br/>

### <a name="getMandatoryArgs">`Definition::getMandatoryArgs()`</a>

```php
Definition::getMandatoryArgs()
```

_Return the mandatory arguments list_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [Argument[]](/doc/api/Definition/Argument.md)


<br/><br/>

### <a name="getNameByPosition">`Definition::getNameByPosition()`</a>

```php
Definition::getNameByPosition($register, $idx)
```

_Calculate the index of the queried item in the given registry_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$register|[string][php:string]|
$idx|[int][php:int]|

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getOption">`Definition::getOption()`</a>

```php
Definition::getOption($name)
```

_Get option by its name, searching both long & short names_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [Option](/doc/api/Definition/Option.md)


#### Exceptions

Type|Description
----|-----------
[UndefinedOptionException](/doc/api/Exception/Definition/UndefinedOptionException.md)|

<br/><br/>

### <a name="getOptionalArgs">`Definition::getOptionalArgs()`</a>

```php
Definition::getOptionalArgs()
```

_Return the optional arguments list_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [Argument[]](/doc/api/Definition/Argument.md)


<br/><br/>

### <a name="getRequiredArgs">`Definition::getRequiredArgs()`</a>

```php
Definition::getRequiredArgs()
```

_Return the required arguments list_</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [Argument[]](/doc/api/Definition/Argument.md)


<br/><br/>

### <a name="getShortOption">`Definition::getShortOption()`</a>

```php
Definition::getShortOption($name)
```

_Get option from the registry by its short name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [Option](/doc/api/Definition/Option.md)


<br/><br/>

### <a name="hasArgument">`Definition::hasArgument()`</a>

```php
Definition::hasArgument($name)
```

_Check for existence of the given argument in the registry_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="hasLongOption">`Definition::hasLongOption()`</a>

```php
Definition::hasLongOption($name)
```

_Check for existence of the given option in the registry by its long name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="hasOption">`Definition::hasOption()`</a>

```php
Definition::hasOption($name)
```

_Check for existence of the given option in the registry_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="hasShortOption">`Definition::hasShortOption()`</a>

```php
Definition::hasShortOption($name)
```

_Check for existence of the given option in the registry by its short name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [bool][php:bool]


<br/><br/>


[self]: Definition.md
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