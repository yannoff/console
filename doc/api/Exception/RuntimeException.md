[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class RuntimeException

**FQN:** [Yannoff\Component\Console\Exception\RuntimeException][self]
<br/>
_**extends** RuntimeException_<br/>
_**implements** Throwable_


## Overview

_Base class for exceptions raised by an application user mistaken usage_
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


### <a name="code">RuntimeException::$code</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="file">RuntimeException::$file</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="line">RuntimeException::$line</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="message">RuntimeException::$message</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


---

## Methods


### <a name="__construct">RuntimeException::__construct()</a>
_RuntimeException constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|Error message
$code|[int](https://www.php.net/manual/language.types.int.php)|Error status code to be sent to the terminal (defaults to 1)
$previous|[Exception](https://www.php.net/manual/class.exception.php) &#124; [null](https://www.php.net/manual/language.types.null.php)|Optional parent in exception chaining

#### Return value

_No return value._



### <a name="__toString">RuntimeException::__toString()</a>
_Default string cast-type formatter for RuntimeExceptions_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)



[self]: RuntimeException.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

