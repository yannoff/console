[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class AtomicTag

**FQN:** [Yannoff\Component\Console\IO\Output\Posix\AtomicTag][self]
<br/>



## Overview

*Object representation for styling pseudo-tags*</br>


### Properties

- [$modifier](#atomictagmodifier)
- [$name](#atomictagname)
- [$reset](#atomictagreset)
- [$type](#atomictagtype)

### Methods

- [__construct()](#atomictag__construct)
- [__toString()](#atomictag__toString)
- [close()](#atomictagclose)
- [esc()](#atomictagesc)
- [open()](#atomictagopen)

---

## Properties


### <a name="modifier">`AtomicTag::$modifier`</a>

*The terminal modifier sequence*</br>


> type: [string][php:string] <br/>
> access: public <br/>

<br/>

### <a name="name">`AtomicTag::$name`</a>

*The tag name*</br>


> type: [string][php:string] <br/>
> access: public <br/>

<br/>

### <a name="reset">`AtomicTag::$reset`</a>

*The terminal reset sequence*</br>


> type: [string][php:string] <br/>
> access: public <br/>

<br/>

### <a name="type">`AtomicTag::$type`</a>

*The tag type: opening|closing*</br>


> type: [string][php:string] <br/>
> access: public <br/>

<br/>


## Methods


### <a name="__construct">`AtomicTag::__construct()`</a>

```php
AtomicTag::__construct($token)
```

*AtomicTag constructor.*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$token|[string][php:string]|The raw tag text

#### Return value

>_No return value._


<br/><br/>

### <a name="__toString">`AtomicTag::__toString()`</a>

```php
AtomicTag::__toString()
```


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="close">`AtomicTag::close()`</a>

```php
AtomicTag::close()
```

*Return the terminal color reset sequence*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="esc">`AtomicTag::esc()`</a>

```php
AtomicTag::esc($word)
```

*Prefix the given character sequence with the ASCII escape (\e) char*</br>


> access: protected <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$word|[string][php:string]|The color setting or reset sequence<br/>

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="open">`AtomicTag::open()`</a>

```php
AtomicTag::open()
```

*Return the terminal color setting sequence*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>


[self]: AtomicTag.md
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