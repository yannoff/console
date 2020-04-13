[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class UnknownCommandException

**FQN:** [Yannoff\Component\Console\Exception\Command\UnknownCommandException][self]
<br/>
_**extends** [RuntimeException](/doc/api/Exception/RuntimeException.md)_<br/>
_**implements** Throwable, [CommandException](/doc/api/Exception/CommandException.md)_


## Overview

_Thrown when the application script is invoked with a command name unknown to the registry_
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


### <a name="code">UnknownCommandException::$code</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="file">UnknownCommandException::$file</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="line">UnknownCommandException::$line</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


### <a name="message">UnknownCommandException::$message</a>

_inherited from: [Exception](https://www.php.net/manual/class.exception.php)_



**access**: protected<br/>


---

## Methods


### <a name="__construct">UnknownCommandException::__construct()</a>
_UnknownCommandException constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|Name of the queried command
$code|[int](https://www.php.net/manual/language.types.int.php)|Error status code to be sent to the terminal (defaults to 127)
$previous|[Exception](https://www.php.net/manual/class.exception.php) &#124; [null](https://www.php.net/manual/language.types.null.php)|Optional parent exception

#### Return value

_No return value._



### <a name="__toString">UnknownCommandException::__toString()</a>
_Default string cast-type formatter for RuntimeExceptions_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)



[self]: UnknownCommandException.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

