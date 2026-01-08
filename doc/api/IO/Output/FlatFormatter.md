[API Reference](/doc/api/index.md) &raquo; [Yannoff](../../index.md) &raquo; [Component](../../index.md) &raquo; [Console](../../index.md) &raquo; [IO](../index.md) &raquo; [Output](./index.md) &raquo; [FlatFormatter][self]


# Class FlatFormatter

**FQN:** [Yannoff\Component\Console\IO\Output\FlatFormatter][self]
<br/>

_**implements** [Formatter](/doc/api/IO/Output/Formatter.md)_


## Overview

_The fallback formatter used in case of non-compatible OS_</br>
_Strip all tags and output raw text_</br>

Source file: [src/IO/Output/FlatFormatter.php](/src/IO/Output/FlatFormatter.php)
### Constants

- [CR](#flatformatterCR)
- [CRLF](#flatformatterCRLF)
- [LF](#flatformatterLF)
- [OS_CYGWIN](#flatformatterOS_CYGWIN)
- [OS_DARWIN](#flatformatterOS_DARWIN)
- [OS_LINUX](#flatformatterOS_LINUX)
- [PAD](#flatformatterPAD)
- [STAB](#flatformatterSTAB)
- [TAB](#flatformatterTAB)


### Methods

- [format()](#flatformatterformat)

---
## Constants


### <a name="CR">`FlatFormatter::CR`</a>

_String representation for carriage return_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"\r"` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterCR)<br/>
> *__deprecated__ Use `ASCII::CR` constant instead*

<br/>

### <a name="CRLF">`FlatFormatter::CRLF`</a>

_String representation for windows new lines_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"\r\n"` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterCRLF)<br/>
> *__deprecated__ Use `ASCII::CRLF` constant instead*

<br/>

### <a name="LF">`FlatFormatter::LF`</a>

_String representation for line-feed_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"\n"` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterLF)<br/>
> *__deprecated__ Use `ASCII::LF` constant instead*

<br/>

### <a name="OS_CYGWIN">`FlatFormatter::OS_CYGWIN`</a>

_Short name for Cygwin OS_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"Cygwin"` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterOS_CYGWIN)<br/>

<br/>

### <a name="OS_DARWIN">`FlatFormatter::OS_DARWIN`</a>

_Short name for Darwin OS_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"Darwin"` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterOS_DARWIN)<br/>

<br/>

### <a name="OS_LINUX">`FlatFormatter::OS_LINUX`</a>

_Short name for Linux OS_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"Linux"` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterOS_LINUX)<br/>

<br/>

### <a name="PAD">`FlatFormatter::PAD`</a>

_Minimal left-padding width for the name columns in help_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `18` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterPAD)<br/>
> *__deprecated__ Use `Application::PAD` constant instead*

<br/>

### <a name="STAB">`FlatFormatter::STAB`</a>

_Soft-tab string: 4 spaces_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"    "` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterSTAB)<br/>
> *__deprecated__ Use `ASCII::STAB` constant instead*

<br/>

### <a name="TAB">`FlatFormatter::TAB`</a>

_Tabulation character_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"\t"` <br/>
> inherited from: [Formatter](/doc/api/IO/Output/Formatter.md#formatterTAB)<br/>
> *__deprecated__ Use `ASCII::TAB` constant instead*

<br/>



## Methods


### <a name="format">`FlatFormatter::format()`</a>

```php
FlatFormatter::format($text)
```

_Render the given markup text into a terminal-compatible format_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The pre-formatted text to be rendered<br/>

#### Return value


> type: [string][php:string]


<br/><br/>


[self]: FlatFormatter.md
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