[API Reference](/doc/api/index.md) &raquo; [Yannoff](../../index.md) &raquo; [Component](../../index.md) &raquo; [Console](../../index.md) &raquo; [IO](../index.md) &raquo; [Output](./index.md) &raquo; [Formatter][self]


# Interface Formatter

**FQN:** [Yannoff\Component\Console\IO\Output\Formatter][self]
<br/>



## Overview

_Contract for console output formatters_</br>

Source file: [src/IO/Output/Formatter.php](/src/IO/Output/Formatter.php)
### Constants

- [CR](#formatterCR)
- [CRLF](#formatterCRLF)
- [LF](#formatterLF)
- [OS_CYGWIN](#formatterOS_CYGWIN)
- [OS_DARWIN](#formatterOS_DARWIN)
- [OS_LINUX](#formatterOS_LINUX)
- [PAD](#formatterPAD)
- [STAB](#formatterSTAB)
- [TAB](#formatterTAB)


### Methods

- [format()](#formatterformat)

---
## Constants


### <a name="CR">`Formatter::CR`</a>

_String representation for carriage return_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"\r"` <br/>
> *__deprecated__ Use `ASCII::CR` constant instead*

<br/>

### <a name="CRLF">`Formatter::CRLF`</a>

_String representation for windows new lines_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"\r\n"` <br/>
> *__deprecated__ Use `ASCII::CRLF` constant instead*

<br/>

### <a name="LF">`Formatter::LF`</a>

_String representation for line-feed_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"\n"` <br/>
> *__deprecated__ Use `ASCII::LF` constant instead*

<br/>

### <a name="OS_CYGWIN">`Formatter::OS_CYGWIN`</a>

_Short name for Cygwin OS_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"Cygwin"` <br/>

<br/>

### <a name="OS_DARWIN">`Formatter::OS_DARWIN`</a>

_Short name for Darwin OS_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"Darwin"` <br/>

<br/>

### <a name="OS_LINUX">`Formatter::OS_LINUX`</a>

_Short name for Linux OS_</br>
> type: [string][php:string] <br/>
> access: public <br/>
> value: `"Linux"` <br/>

<br/>

### <a name="PAD">`Formatter::PAD`</a>

_Minimal left-padding width for the name columns in help_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `18` <br/>
> *__deprecated__ Use `Application::PAD` constant instead*

<br/>

### <a name="STAB">`Formatter::STAB`</a>

_Soft-tab string: 4 spaces_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"    "` <br/>
> *__deprecated__ Use `ASCII::STAB` constant instead*

<br/>

### <a name="TAB">`Formatter::TAB`</a>

_Tabulation character_</br>


> type: [string][php:string] <br/>
> access: public <br/>
> value: `"\t"` <br/>
> *__deprecated__ Use `ASCII::TAB` constant instead*

<br/>



## Methods


### <a name="format">`Formatter::format()`</a>

```php
Formatter::format($text)
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


[self]: Formatter.md
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