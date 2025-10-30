[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class StandardOutput

**FQN:** [Yannoff\Component\Console\IO\Stream\StandardOutput][self]
<br/>
_**extends** [Wrapper](/doc/api/IO/Stream/Wrapper.md)_
<br/>
_**implements** [IOWriter](/doc/api/IO/Stream/IOWriter.md), [IOStream](/doc/api/IO/Stream/IOStream.md)_


## Overview

*Writer stream for standard output (STDOUT)*</br>


### Constants

- [APPEND](#standardoutputAPPEND)
- [MODE](#standardoutputMODE)
- [NAME](#standardoutputNAME)
- [READONLY](#standardoutputREADONLY)
- [STDERR](#standardoutputSTDERR)
- [STDIN](#standardoutputSTDIN)
- [STDOUT](#standardoutputSTDOUT)

### Properties

- [$handle](#standardoutputhandle)

### Methods

- [__construct()](#standardoutput__construct)
- [__destruct()](#standardoutput__destruct)
- [bind()](#standardoutputbind)
- [constant()](#standardoutputconstant)
- [free()](#standardoutputfree)
- [getOpenMode()](#standardoutputgetOpenMode)
- [getURI()](#standardoutputgetURI)
- [isFile()](#standardoutputisFile)
- [isPiped()](#standardoutputisPiped)
- [write()](#standardoutputwrite)

---
## Constants


### <a name="APPEND">`StandardOutput::APPEND`</a>

*fopen() mode: append*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"a+"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamAPPEND)<br/>

<br/>

### <a name="MODE">`StandardOutput::MODE`</a>

*The stream open mode*</br>

> access: public <br/>
> value: `"a+"` <br/>

<br/>

### <a name="NAME">`StandardOutput::NAME`</a>

*The stream short name*</br>

> access: public <br/>
> value: `"stdout"` <br/>

<br/>

### <a name="READONLY">`StandardOutput::READONLY`</a>

*fopen() mode: read*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"r"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamREADONLY)<br/>

<br/>

### <a name="STDERR">`StandardOutput::STDERR`</a>

*Short name for standard error stream*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stderr"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDERR)<br/>

<br/>

### <a name="STDIN">`StandardOutput::STDIN`</a>

*Short name for standard input stream*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stdin"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDIN)<br/>

<br/>

### <a name="STDOUT">`StandardOutput::STDOUT`</a>

*Short name for standard output stream*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stdout"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDOUT)<br/>

<br/>


## Properties


### <a name="handle">`StandardOutput::$handle`</a>

*Handle to the stream wrapper*</br>


> type: [resource][php:resource] <br/>
> access: protected <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperhandle)<br/>
<br/>


## Methods


### <a name="__construct">`StandardOutput::__construct()`</a>

```php
StandardOutput::__construct()
```

*Wrapper constructor.*</br>

> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapper__construct) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="__destruct">`StandardOutput::__destruct()`</a>

```php
StandardOutput::__destruct()
```

*Wrapper destructor*</br>
*Free the stream handle resource*</br>

> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapper__destruct) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="bind">`StandardOutput::bind()`</a>

```php
StandardOutput::bind()
```

*Bind the wrapper stream resource*</br>

> access: protected <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperbind) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="constant">`StandardOutput::constant()`</a>

```php
StandardOutput::constant($name)
```

*Generic getter for Wrapper child classes constants*</br>


> access: protected <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperconstant) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The class constant name<br/>

#### Return value


> type: mixed


#### Exceptions

Type|Description
----|-----------
[StreamLogicException](/doc/api/Exception/IO/StreamLogicException.md)|If the queried constant is not defined

<br/><br/>

### <a name="free">`StandardOutput::free()`</a>

```php
StandardOutput::free()
```

*Unbind the wrapper stream resource*</br>

> access: protected <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperfree) <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="getOpenMode">`StandardOutput::getOpenMode()`</a>

```php
StandardOutput::getOpenMode()
```

*Build the PHP stream wrapper fopen() mode using the child class MODE constant*</br>


> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrappergetOpenMode) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getURI">`StandardOutput::getURI()`</a>

```php
StandardOutput::getURI()
```

*Build the PHP stream wrapper URI using the child class NAME constant*</br>


> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrappergetURI) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="isFile">`StandardOutput::isFile()`</a>

```php
StandardOutput::isFile()
```

*Check whether the stream is a regular file redirect*</br>


> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperisFile) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isPiped">`StandardOutput::isPiped()`</a>

```php
StandardOutput::isPiped()
```

*Check whether the stream is a FIFO*</br>


> access: public <br/>
> inherited from: [Wrapper](/doc/api/IO/Stream/Wrapper.md#wrapperisPiped) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="write">`StandardOutput::write()`</a>

```php
StandardOutput::write($contents, $ending)
```

*Write contents to the output stream*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$contents|[string][php:string]|The contents to write<br/>
$ending|[string][php:string]|Character or text to be appended (defaults to "\n")

#### Return value

_Number of bytes written or **false** on error_

> type: [int][php:int] **&#124;** [false][php:false]


<br/><br/>


[self]: StandardOutput.md
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