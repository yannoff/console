[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class TagStack

**FQN:** [Yannoff\Component\Console\IO\Output\TagStack][self]
<br/>



## Overview

*First class collection for opened tags list*</br>


### Properties

- [$tags](#tagstacktags)

### Methods

- [clear()](#tagstackclear)
- [count()](#tagstackcount)
- [last()](#tagstacklast)
- [pop()](#tagstackpop)
- [push()](#tagstackpush)

---

## Properties


### <a name="tags">`TagStack::$tags`</a>

*The stacked tags array*</br>


> type: [AtomicTag[]](/doc/api/IO/Output/Posix/AtomicTag.md) <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="clear">`TagStack::clear()`</a>

```php
TagStack::clear()
```

*Empty the stack*</br>

> access: public <br/>

#### Arguments

>_No arguments._

#### Return value

>_No return value._


<br/><br/>

### <a name="count">`TagStack::count()`</a>

```php
TagStack::count()
```

*Return the number of tags in the stack*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [int][php:int]


<br/><br/>

### <a name="last">`TagStack::last()`</a>

```php
TagStack::last()
```

*Set the stack internal pointer to the last tag & return it*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [AtomicTag](/doc/api/IO/Output/Posix/AtomicTag.md)


<br/><br/>

### <a name="pop">`TagStack::pop()`</a>

```php
TagStack::pop()
```

*Remove the last tag of the stack and return it*</br>


> access: public <br/>

#### Arguments

>_No arguments._

#### Return value


> type: [AtomicTag](/doc/api/IO/Output/Posix/AtomicTag.md)


<br/><br/>

### <a name="push">`TagStack::push()`</a>

```php
TagStack::push($tag)
```

*Add a new tag on top of the stack*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$tag|[AtomicTag](/doc/api/IO/Output/Posix/AtomicTag.md)|

#### Return value

>_No return value._


<br/><br/>


[self]: TagStack.md
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