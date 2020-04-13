[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class UnsupportedStreamException

**FQN:** [Yannoff\Component\Console\Exception\IO\UnsupportedStreamException][self]
<br/>
_**extends** [LogicException](/doc/api/Exception/LogicException.md)_<br/>
_**implements** Throwable_


## Overview

_Thrown by StreamFactory when queried an unsupported stream short name_
<br/><br/>

**Properties**

- [$code](#code)
- [$file](#file)
- [$line](#line)
- [$message](#message)

**Methods**

- [__construct()](#__construct)
- [__toString()](#__toString)

---

## Properties


### <a name="code">UnsupportedStreamException::$code</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="file">UnsupportedStreamException::$file</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="line">UnsupportedStreamException::$line</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="message">UnsupportedStreamException::$message</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


---

## Methods


### <a name="__construct">UnsupportedStreamException::__construct()</a>
_UnsupportedStreamException constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[string](https://www.php.net/manual/language.types.string.php)|Queried stream short name
$code|[int](https://www.php.net/manual/language.types.int.php)|Error status code to be sent to the terminal (defaults to 1)
$previous|[Exception](https://www.php.net/manual/class.exception.php) &#124; [null](https://www.php.net/manual/language.types.null.php)|Optional parent exception

#### Return value

_No return value._



### <a name="__toString">UnsupportedStreamException::__toString()</a>
_Default string cast-type formatter for LogicExceptions_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)



[self]: UnsupportedStreamException.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

