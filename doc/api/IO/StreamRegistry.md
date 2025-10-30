[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class StreamRegistry

**FQN:** [Yannoff\Component\Console\IO\StreamRegistry][self]
<br/>



## Overview

*Registry for I/O writers & readers*</br>


### Properties

- [$streams](#streamregistrystreams)

### Methods

- [add()](#streamregistryadd)
- [get()](#streamregistryget)
- [supports()](#streamregistrysupports)

---

## Properties


### <a name="streams">`StreamRegistry::$streams`</a>


> type: [IOStream[]](/doc/api/IO/Stream/IOStream.md) <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="add">`StreamRegistry::add()`</a>

```php
StreamRegistry::add($stream)
```

*Create a new stream wrapper instance and store it in the registry*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[string][php:string]|The stream short name<br/>

#### Return value


> type: [IOStream](/doc/api/IO/Stream/IOStream.md)


<br/><br/>

### <a name="get">`StreamRegistry::get()`</a>

```php
StreamRegistry::get($stream)
```

*Lazy stream getter & initializer method*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[string][php:string]|The stream short name<br/>

#### Return value


> type: [IOStream](/doc/api/IO/Stream/IOStream.md)


<br/><br/>

### <a name="supports">`StreamRegistry::supports()`</a>

```php
StreamRegistry::supports($stream)
```

*Validate the queried IO stream short name*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[string][php:string]|The stream short name<br/>

#### Return value


> type: [bool][php:bool]


<br/><br/>


[self]: StreamRegistry.md
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

<!-- Generated: 2025-05-11 14:17:53 +01:00 -->