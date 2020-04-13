[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class UndefinedArgumentException

**FQN:** [Yannoff\Component\Console\Exception\Definition\UndefinedArgumentException][self]
<br/>
_**extends** [LogicException](/doc/api/Exception/LogicException.md)_<br/>
_**implements** Throwable, [DefinitionException](/doc/api/Exception/DefinitionException.md)_


## Overview

_Thrown when an undefined argument is queried via Definition::getArgument()_
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


### <a name="code">UndefinedArgumentException::$code</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="file">UndefinedArgumentException::$file</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="line">UndefinedArgumentException::$line</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="message">UndefinedArgumentException::$message</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


---

## Methods


### <a name="__construct">UndefinedArgumentException::__construct()</a>
_UndefinedArgumentException constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|Name of the queried argument
$code|[int](https://www.php.net/manual/language.types.int.php)|Error status code to be sent to the terminal (defaults to 128)
$previous|[Exception](https://www.php.net/manual/class.exception.php) &#124; [null](https://www.php.net/manual/language.types.null.php)|Optional parent exception

#### Return value

_No return value._



### <a name="__toString">UndefinedArgumentException::__toString()</a>
_Default string cast-type formatter for LogicExceptions_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)



[self]: UndefinedArgumentException.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

