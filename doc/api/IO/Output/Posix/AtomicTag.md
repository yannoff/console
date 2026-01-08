[API Reference](/doc/api/index.md) &raquo; [Yannoff](../../../index.md) &raquo; [Component](../../../index.md) &raquo; [Console](../../../index.md) &raquo; [IO](../../index.md) &raquo; [Output](../index.md) &raquo; [Posix](./index.md) &raquo; [AtomicTag][self]


# Class AtomicTag

**FQN:** [Yannoff\Component\Console\IO\Output\Posix\AtomicTag][self]
<br/>



## Overview

_Object representation for styling pseudo-tags_</br>

Source file: [src/IO/Output/Posix/AtomicTag.php](/src/IO/Output/Posix/AtomicTag.php)
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

_The terminal modifier sequence_</br>


> type: [string][php:string] <br/>
> access: public <br/>

<br/>

### <a name="name">`AtomicTag::$name`</a>

_The tag name_</br>


> type: [string][php:string] <br/>
> access: public <br/>

<br/>

### <a name="reset">`AtomicTag::$reset`</a>

_The terminal reset sequence_</br>


> type: [string][php:string] <br/>
> access: public <br/>

<br/>

### <a name="type">`AtomicTag::$type`</a>

_The tag type: opening|closing_</br>


> type: [string][php:string] <br/>
> access: public <br/>

<br/>


## Methods


### <a name="__construct">`AtomicTag::__construct()`</a>

```php
AtomicTag::__construct($token)
```

_AtomicTag constructor._</br>


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

_Return the terminal color reset sequence_</br>


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

_Prefix the given character sequence with the ASCII escape (\e) char_</br>


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

_Return the terminal color setting sequence_</br>


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