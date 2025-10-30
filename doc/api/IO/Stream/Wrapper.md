[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class Wrapper

**FQN:** [Yannoff\Component\Console\IO\Stream\Wrapper][self]
<br/>



## Overview

*Super-class for PHP I/O Stream wrappers (both writers & readers)*</br>


### Properties

- [$handle](#wrapperhandle)

### Methods

- [__construct()](#wrapper__construct)
- [__destruct()](#wrapper__destruct)
- [bind()](#wrapperbind)
- [constant()](#wrapperconstant)
- [free()](#wrapperfree)
- [getOpenMode()](#wrappergetOpenMode)
- [getURI()](#wrappergetURI)
- [isFile()](#wrapperisFile)
- [isPiped()](#wrapperisPiped)

---

## Properties


### <a name="handle">`Wrapper::$handle`</a>

*Handle to the stream wrapper*</br>


> type: [resource][php:resource] <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="__construct">`Wrapper::__construct()`</a>

```php
Wrapper::__construct()
```

*Wrapper constructor.*</br>

> access: public <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="__destruct">`Wrapper::__destruct()`</a>

```php
Wrapper::__destruct()
```

*Wrapper destructor*</br>
*Free the stream handle resource*</br>

> access: public <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="bind">`Wrapper::bind()`</a>

```php
Wrapper::bind()
```

*Bind the wrapper stream resource*</br>

> access: protected <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="constant">`Wrapper::constant()`</a>

```php
Wrapper::constant($name)
```

*Generic getter for Wrapper child classes constants*</br>


> access: protected <br/>

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

### <a name="free">`Wrapper::free()`</a>

```php
Wrapper::free()
```

*Unbind the wrapper stream resource*</br>

> access: protected <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="getOpenMode">`Wrapper::getOpenMode()`</a>

```php
Wrapper::getOpenMode()
```

*Build the PHP stream wrapper fopen() mode using the child class MODE constant*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="getURI">`Wrapper::getURI()`</a>

```php
Wrapper::getURI()
```

*Build the PHP stream wrapper URI using the child class NAME constant*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [string][php:string]


<br/><br/>

### <a name="isFile">`Wrapper::isFile()`</a>

```php
Wrapper::isFile()
```

*Check whether the stream is a regular file redirect*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isPiped">`Wrapper::isPiped()`</a>

```php
Wrapper::isPiped()
```

*Check whether the stream is a FIFO*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [bool][php:bool]


<br/><br/>


[self]: Wrapper.md
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