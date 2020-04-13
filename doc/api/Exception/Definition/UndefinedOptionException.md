[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class UndefinedOptionException

**FQN:** [Yannoff\Component\Console\Exception\Definition\UndefinedOptionException][self]
<br/>
_**extends** [LogicException](/doc/api/Exception/LogicException.md)_<br/>
_**implements** Throwable, [DefinitionException](/doc/api/Exception/DefinitionException.md)_


## Overview

_Thrown when an undefined option is queried via Definition::getOption()_
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


### <a name="code">UndefinedOptionException::$code</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="file">UndefinedOptionException::$file</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="line">UndefinedOptionException::$line</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="message">UndefinedOptionException::$message</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


---

## Methods


### <a name="__construct">UndefinedOptionException::__construct()</a>
_UndefinedOptionException constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|Name of the queried option
$code|[int](https://www.php.net/manual/language.types.int.php)|Error status code to be sent to the terminal (defaults to 128)
$previous|[Exception](https://www.php.net/manual/class.exception.php) &#124; [null](https://www.php.net/manual/language.types.null.php)|Optional parent exception

#### Return value

_No return value._



### <a name="__toString">UndefinedOptionException::__toString()</a>
_Default string cast-type formatter for LogicExceptions_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)



[self]: UndefinedOptionException.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

