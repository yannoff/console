[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class UnknownCommandException

**FQN:** [Yannoff\Component\Console\Exception\Command\UnknownCommandException][self]
<br/>
_**extends** [RuntimeException](/doc/api/Exception/RuntimeException.md)_
<br/>
_**implements** [Throwable][php:Throwable], [CommandException](/doc/api/Exception/CommandException.md)_


## Overview

*Thrown when the application script is invoked with a command name unknown to the registry*</br>


### Properties

- [$code](#unknowncommandexceptioncode)
- [$file](#unknowncommandexceptionfile)
- [$line](#unknowncommandexceptionline)
- [$message](#unknowncommandexceptionmessage)

### Methods

- [__construct()](#unknowncommandexception__construct)
- [__toString()](#unknowncommandexception__toString)

---

## Properties


### <a name="code">`UnknownCommandException::$code`</a>



> access: protected <br/>
> inherited from: [Exception][php:Exception]<br/>
<br/>

### <a name="file">`UnknownCommandException::$file`</a>



> access: protected <br/>
> inherited from: [Exception][php:Exception]<br/>
<br/>

### <a name="line">`UnknownCommandException::$line`</a>



> access: protected <br/>
> inherited from: [Exception][php:Exception]<br/>
<br/>

### <a name="message">`UnknownCommandException::$message`</a>



> access: protected <br/>
> inherited from: [Exception][php:Exception]<br/>
<br/>


## Methods


### <a name="__construct">`UnknownCommandException::__construct()`</a>

```php
UnknownCommandException::__construct($name, $code, $previous)
```

*UnknownCommandException constructor.*</br>


> access: public <br/>
> overridden from: [RuntimeException](/doc/api/Exception/RuntimeException.md#runtimeexception__construct) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|Name of the queried command
$code|[int][php:int]|Error status code to be sent to the terminal (defaults to 127)
$previous|[Exception][php:Exception] &#124; [null][php:null]|Optional parent exception

#### Return value

>_No return value._


<br/><br/>

### <a name="__toString">`UnknownCommandException::__toString()`</a>

```php
UnknownCommandException::__toString()
```

*Default string cast-type formatting method for the exception*</br>


> access: public <br/>
> inherited from: [RuntimeException](/doc/api/Exception/RuntimeException.md#runtimeexception__toString) <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>


[self]: UnknownCommandException.md
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

<!-- Generated: 2025-11-12 11:41:42 +01:00 -->