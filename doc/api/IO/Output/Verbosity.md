[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Verbosity

**FQN:** [Yannoff\Component\Console\IO\Output\Verbosity][self]
<br/>



## Overview

*Handle application-wide verbosity level*</br>


### Constants

- [DEBUG](#verbosityDEBUG)
- [ERROR](#verbosityERROR)
- [INFO](#verbosityINFO)
- [WARN](#verbosityWARN)

### Properties

- [$level](#verbositylevel)

### Methods

- [get()](#verbosityget)
- [set()](#verbosityset)

---
## Constants


### <a name="DEBUG">`Verbosity::DEBUG`</a>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `32` <br/>

<br/>

### <a name="ERROR">`Verbosity::ERROR`</a>

*Default log level*</br>
*Messages of this level are ALWAYS displayed*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0` <br/>

<br/>

### <a name="INFO">`Verbosity::INFO`</a>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `16` <br/>

<br/>

### <a name="WARN">`Verbosity::WARN`</a>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `8` <br/>

<br/>


## Properties


### <a name="level">`Verbosity::$level`</a>

*Current verbosity level*</br>


> type: [int][php:int] <br/>
> access: public <br/>

<br/>


## Methods


### <a name="get">`Verbosity::get()`</a>

```php
Verbosity::get()
```

*Getter for the current verbosity level*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [int][php:int]


<br/><br/>

### <a name="set">`Verbosity::set()`</a>

```php
Verbosity::set($level)
```

*Setter for the current verbosity level*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$level|[int][php:int]|

#### Return value

>_No return value._


<br/><br/>


[self]: Verbosity.md
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