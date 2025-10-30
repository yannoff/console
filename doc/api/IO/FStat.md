[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class FStat

**FQN:** [Yannoff\Component\Console\IO\FStat][self]
<br/>



## Overview

*Handle the inode file statistics*</br>


### Constants

- [S_IFBLK](#fstatS_IFBLK)
- [S_IFCHR](#fstatS_IFCHR)
- [S_IFDIR](#fstatS_IFDIR)
- [S_IFIFO](#fstatS_IFIFO)
- [S_IFLNK](#fstatS_IFLNK)
- [S_IFMT](#fstatS_IFMT)
- [S_IFREG](#fstatS_IFREG)
- [S_IFSOCK](#fstatS_IFSOCK)


### Methods

- [imode()](#fstatimode)
- [isBlock()](#fstatisBlock)
- [isChar()](#fstatisChar)
- [isDir()](#fstatisDir)
- [isFifo()](#fstatisFifo)
- [isLink()](#fstatisLink)
- [isRegularFile()](#fstatisRegularFile)
- [isSocket()](#fstatisSocket)
- [isTTY()](#fstatisTTY)

---
## Constants


### <a name="S_IFBLK">`FStat::S_IFBLK`</a>

*Octal mode value for block device*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0060000` <br/>

<br/>

### <a name="S_IFCHR">`FStat::S_IFCHR`</a>

*Octal mode value for character device*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0020000` <br/>

<br/>

### <a name="S_IFDIR">`FStat::S_IFDIR`</a>

*Octal mode value for directory*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0040000` <br/>

<br/>

### <a name="S_IFIFO">`FStat::S_IFIFO`</a>

*Octal mode value for FIFO*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0010000` <br/>

<br/>

### <a name="S_IFLNK">`FStat::S_IFLNK`</a>

*Octal mode value for symlink*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0120000` <br/>

<br/>

### <a name="S_IFMT">`FStat::S_IFMT`</a>

*Octal formatting value*</br>
*(used to build FStat::imode() method result)*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0170000` <br/>

<br/>

### <a name="S_IFREG">`FStat::S_IFREG`</a>

*Octal mode value for regular file redirect*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0100000` <br/>

<br/>

### <a name="S_IFSOCK">`FStat::S_IFSOCK`</a>

*Octal mode value for socket*</br>

> type: [int][php:int] <br/>
> access: public <br/>
> value: `0140000` <br/>

<br/>



## Methods


### <a name="imode">`FStat::imode()`</a>

```php
FStat::imode($handle)
```

*Get the handle current protection mode*</br>


> access: protected <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [int][php:int]


<br/><br/>

### <a name="isBlock">`FStat::isBlock()`</a>

```php
FStat::isBlock($handle)
```

*Check whether the handle is a block device*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isChar">`FStat::isChar()`</a>

```php
FStat::isChar($handle)
```

*Check whether the handle is a character*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isDir">`FStat::isDir()`</a>

```php
FStat::isDir($handle)
```

*Check whether the handle is a directory*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isFifo">`FStat::isFifo()`</a>

```php
FStat::isFifo($handle)
```

*Check whether the handle is a FIFO*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isLink">`FStat::isLink()`</a>

```php
FStat::isLink($handle)
```

*Check whether the handle is a symlink*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isRegularFile">`FStat::isRegularFile()`</a>

```php
FStat::isRegularFile($handle)
```

*Check whether the handle is a regular file redirect*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isSocket">`FStat::isSocket()`</a>

```php
FStat::isSocket($handle)
```

*Check whether the handle is a socket*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="isTTY">`FStat::isTTY()`</a>

```php
FStat::isTTY($handle)
```

*Check whether the handle is a TTY*</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$handle|[resource][php:resource]|

#### Return value


> type: [bool][php:bool]


<br/><br/>


[self]: FStat.md
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