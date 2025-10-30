[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Interface IOWriter

**FQN:** [Yannoff\Component\Console\IO\Stream\IOWriter][self]
<br/>

_**implements** [IOStream](/doc/api/IO/Stream/IOStream.md)_


## Overview

*Contract for I/O writer streams*</br>


### Constants

- [APPEND](#iowriterAPPEND)
- [READONLY](#iowriterREADONLY)
- [STDERR](#iowriterSTDERR)
- [STDIN](#iowriterSTDIN)
- [STDOUT](#iowriterSTDOUT)


### Methods

- [write()](#iowriterwrite)

---
## Constants


### <a name="APPEND">`IOWriter::APPEND`</a>

*fopen() mode: append*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"a+"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamAPPEND)<br/>

<br/>

### <a name="READONLY">`IOWriter::READONLY`</a>

*fopen() mode: read*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"r"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamREADONLY)<br/>

<br/>

### <a name="STDERR">`IOWriter::STDERR`</a>

*Short name for standard error stream*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stderr"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDERR)<br/>

<br/>

### <a name="STDIN">`IOWriter::STDIN`</a>

*Short name for standard input stream*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stdin"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDIN)<br/>

<br/>

### <a name="STDOUT">`IOWriter::STDOUT`</a>

*Short name for standard output stream*</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"stdout"` <br/>
> inherited from: [IOStream](/doc/api/IO/Stream/IOStream.md#iostreamSTDOUT)<br/>

<br/>



## Methods


### <a name="write">`IOWriter::write()`</a>

```php
IOWriter::write($contents, $ending)
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


[self]: IOWriter.md
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