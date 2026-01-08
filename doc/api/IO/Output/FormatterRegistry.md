[API Reference](/doc/api/index.md) &raquo; [Yannoff](../../index.md) &raquo; [Component](../../index.md) &raquo; [Console](../../index.md) &raquo; [IO](../index.md) &raquo; [Output](./index.md) &raquo; [FormatterRegistry][self]


# Class FormatterRegistry

**FQN:** [Yannoff\Component\Console\IO\Output\FormatterRegistry][self]
<br/>



## Overview

_Registry for the console output formatters_</br>

Source file: [src/IO/Output/FormatterRegistry.php](/src/IO/Output/FormatterRegistry.php)
### Properties

- [$formatters](#formatterregistryformatters)

### Methods

- [add()](#formatterregistryadd)
- [get()](#formatterregistryget)
- [resolve()](#formatterregistryresolve)

---

## Properties


### <a name="formatters">`FormatterRegistry::$formatters`</a>


> type: [array][php:array] <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="add">`FormatterRegistry::add()`</a>

```php
FormatterRegistry::add($formatter)
```

_Create a new formatter instance and store it in the registry_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$formatter|[string][php:string]|The formatter fully-qualified class name<br/>

#### Return value


> type: [Formatter](/doc/api/IO/Output/Formatter.md)


<br/><br/>

### <a name="get">`FormatterRegistry::get()`</a>

```php
FormatterRegistry::get($stream, $os)
```

_Output formatter getter_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[IOWriter](/doc/api/IO/Stream/IOWriter.md)|The output stream wrapper
$os|[string][php:string]|The target Operating System (defaults to 'Linux')<br/>

#### Return value


> type: [Formatter](/doc/api/IO/Output/Formatter.md)


<br/><br/>

### <a name="resolve">`FormatterRegistry::resolve()`</a>

```php
FormatterRegistry::resolve($stream, $os)
```

_Output formatter resolver_</br>
_Find the appropriate formatter for the given OS and output type_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[IOWriter](/doc/api/IO/Stream/IOWriter.md)|The output stream wrapper
$os|[string][php:string]|The target Operating System (defaults to 'Linux')<br/>

#### Return value


> type: [string][php:string]


<br/><br/>


[self]: FormatterRegistry.md
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