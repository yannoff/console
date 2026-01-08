[API Reference](/doc/api/index.md) &raquo; [Yannoff](../../index.md) &raquo; [Component](../../index.md) &raquo; [Console](../../index.md) &raquo; [Exception](../index.md) &raquo; [IO](./index.md) &raquo; [StreamLogicException][self]


# Class StreamLogicException

**FQN:** [Yannoff\Component\Console\Exception\IO\StreamLogicException][self]
<br/>
_**extends** [LogicException](/doc/api/Exception/LogicException.md)_
<br/>
_**implements** [Throwable][php:Throwable]_


## Overview

_Generic exception for stream-related logic inconsistencies_</br>

Source file: [src/Exception/IO/StreamLogicException.php](/src/Exception/IO/StreamLogicException.php)
### Properties

- [$code](#streamlogicexceptioncode)
- [$file](#streamlogicexceptionfile)
- [$line](#streamlogicexceptionline)
- [$message](#streamlogicexceptionmessage)

### Methods

- [__construct()](#streamlogicexception__construct)
- [__toString()](#streamlogicexception__toString)

---

## Properties


### <a name="code">`StreamLogicException::$code`</a>



> access: protected <br/>
> inherited from: [Exception][php:Exception]<br/>
<br/>

### <a name="file">`StreamLogicException::$file`</a>



> access: protected <br/>
> inherited from: [Exception][php:Exception]<br/>
<br/>

### <a name="line">`StreamLogicException::$line`</a>



> access: protected <br/>
> inherited from: [Exception][php:Exception]<br/>
<br/>

### <a name="message">`StreamLogicException::$message`</a>



> access: protected <br/>
> inherited from: [Exception][php:Exception]<br/>
<br/>


## Methods


### <a name="__construct">`StreamLogicException::__construct()`</a>

```php
StreamLogicException::__construct($message, $code, $previous)
```

_LogicException constructor._</br>


> access: public <br/>
> inherited from: [LogicException](/doc/api/Exception/LogicException.md#logicexception__construct) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string][php:string]|Error message
$code|[int][php:int]|Error status code to be sent to the terminal (defaults to 1)
$previous|[Exception][php:Exception] &#124; [null][php:null]|Optional parent in exception chaining

#### Return value

>_No return value._


<br/><br/>

### <a name="__toString">`StreamLogicException::__toString()`</a>

```php
StreamLogicException::__toString()
```

_Default string cast-type formatting method for the exception_</br>


> access: public <br/>
> inherited from: [FatalException](/doc/api/Exception/FatalException.md#fatalexception__toString) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>


[self]: StreamLogicException.md
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