[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class UnknownOptionException

**FQN:** [Yannoff\Component\Console\Exception\Definition\UnknownOptionException][self]
<br/>
_**extends** [RuntimeException](/doc/api/Exception/RuntimeException.md)_<br/>
_**implements** Throwable, [ResolverException](/doc/api/Exception/ResolverException.md)_


## Overview

_Thrown when the command is invoked with an unknown option_
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


### <a name="code">UnknownOptionException::$code</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="file">UnknownOptionException::$file</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="line">UnknownOptionException::$line</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="message">UnknownOptionException::$message</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


---

## Methods


### <a name="__construct">UnknownOptionException::__construct()</a>
_UnknownOptionException constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|Name of the queried option
$code|[int](https://www.php.net/manual/language.types.int.php)|Error status code to be sent to the terminal (defaults to 128)
$previous|[Exception](https://www.php.net/manual/class.exception.php) &#124; [null](https://www.php.net/manual/language.types.null.php)|Optional parent exception

#### Return value

_No return value._



### <a name="__toString">UnknownOptionException::__toString()</a>
_Default string cast-type formatter for RuntimeExceptions_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)



[self]: UnknownOptionException.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)
