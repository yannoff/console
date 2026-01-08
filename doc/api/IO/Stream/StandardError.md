[API Reference](/doc/api/index.md) &raquo; [Yannoff](../../index.md) &raquo; [Component](../../index.md) &raquo; [Console](../../index.md) &raquo; [IO](../index.md) &raquo; [Stream](./index.md) &raquo; [StandardError][self]


# Class StandardError

**FQN:** [Yannoff\Component\Console\IO\Stream\StandardError][self]
<br/>
_**extends** [Wrapper](/doc/api/IO/Stream/Wrapper.md)_
<br/>
_**implements** [IOWriter](/doc/api/IO/Stream/IOWriter.md), [IOStream](/doc/api/IO/Stream/IOStream.md)_


## Overview

_Writer stream for standard error (STDERR)_</br>

Source file: [src/IO/Stream/StandardError.php](/src/IO/Stream/StandardError.php)
### Constants

- [APPEND](#standarderrorAPPEND)
- [MODE](#standarderrorMODE)
- [NAME](#standarderrorNAME)
- [READONLY](#standarderrorREADONLY)
- [STDERR](#standarderrorSTDERR)
- [STDIN](#standarderrorSTDIN)
- [STDOUT](#standarderrorSTDOUT)

### Properties

- [$handle](#standarderrorhandle)

### Methods

- [__construct()](#standarderror__construct)
- [__destruct()](#standarderror__destruct)
- [bind()](#standarderrorbind)
- [constant()](#standarderrorconstant)
- [free()](#standarderrorfree)
- [getOpenMode()](#standarderrorgetOpenMode)
- [getURI()](#standarderrorgetURI)
- [isFile()](#standarderrorisFile)
- [isPiped()](#standarderrorisPiped)
- [write()](#standarderrorwrite)

---
## Constants


### <a name="APPEND">`StandardError::APPEND`</a>

_fopen() mode: append_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"a+"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamAPPEND)<br/>

<br/>

### <a name="MODE">`StandardError::MODE`</a>

_The stream open mode_</br>

> access: public <br/>
> value: `"a+"` <br/>

<br/>

### <a name="NAME">`StandardError::NAME`</a>

_The stream short name_</br>

> access: public <br/>
> value: `"stderr"` <br/>

<br/>

### <a name="READONLY">`StandardError::READONLY`</a>

_fopen() mode: read_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"r"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamREADONLY)<br/>

<br/>

### <a name="STDERR">`StandardError::STDERR`</a>

_Short name for standard error stream_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stderr"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDERR)<br/>

<br/>

### <a name="STDIN">`StandardError::STDIN`</a>

_Short name for standard input stream_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stdin"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDIN)<br/>

<br/>

### <a name="STDOUT">`StandardError::STDOUT`</a>

_Short name for standard output stream_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stdout"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDOUT)<br/>

<br/>


## Properties


### <a name="handle">`StandardError::$handle`</a>

_Handle to the stream wrapper_</br>


> type: [resource][php:resource] <br/>
> access: protected <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperhandle)<br/>
<br/>


## Methods


### <a name="__construct">`StandardError::__construct()`</a>

```php
StandardError::__construct()
```

_Wrapper constructor._</br>

> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapper__construct) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="__destruct">`StandardError::__destruct()`</a>

```php
StandardError::__destruct()
```

_Wrapper destructor_</br>
_Free the stream handle resource_</br>

> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapper__destruct) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="bind">`StandardError::bind()`</a>

```php
StandardError::bind()
```

_Bind the wrapper stream resource_</br>

> access: protected <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperbind) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="constant">`StandardError::constant()`</a>

```php
StandardError::constant($name)
```

_Generic getter for Wrapper child classes constants_</br>


> access: protected <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperconstant) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The class constant name<br/>

#### Return value


> type: [mixed][php:mixed]


#### Exceptions

Type|Description
----|-----------
[StreamLogicException](/doc/api/Exception/IO/StreamLogicException.md)|If the queried constant is not defined

<br/><br/>

### <a name="free">`StandardError::free()`</a>

```php
StandardError::free()
```

_Unbind the wrapper stream resource_</br>

> access: protected <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperfree) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="getOpenMode">`StandardError::getOpenMode()`</a>

```php
StandardError::getOpenMode()
```

_Build the PHP stream wrapper fopen() mode using the child class MODE constant_</br>


> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrappergetOpenMode) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getURI">`StandardError::getURI()`</a>

```php
StandardError::getURI()
```

_Build the PHP stream wrapper URI using the child class NAME constant_</br>


> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrappergetURI) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="isFile">`StandardError::isFile()`</a>

```php
StandardError::isFile()
```

_Check whether the stream is a regular file redirect_</br>


> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperisFile) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isPiped">`StandardError::isPiped()`</a>

```php
StandardError::isPiped()
```

_Check whether the stream is a FIFO_</br>


> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperisPiped) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="write">`StandardError::write()`</a>

```php
StandardError::write($contents, $ending)
```

_Write contents to the output stream_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$contents|[string][php:string]|The contents to write
$ending|[string][php:string]|Character or text to be appended (defaults to "\n")<br/>

#### Return value

_Number of bytes written or **false** on error_

> type: [int][php:int] **&#124;** [false][php:false]


<br/><br/>


[self]: StandardError.md
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