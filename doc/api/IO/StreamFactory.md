[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class StreamFactory

**FQN:** [Yannoff\Component\Console\IO\StreamFactory][self]
<br/>



## Overview

_Factory for I/O writers & readers_
<br/><br/>

**Properties**

- [$streams](#streams)

**Methods**

- [available()](#available)
- [create()](#create)
- [supports()](#supports)

---

## Properties


### <a name="streams">StreamFactory::$streams</a>


_Array map of the available streams, indexed by their short names_

**type**: [array](https://www.php.net/manual/language.types.array.php)<br/>
**access**: protected<br/>


---

## Methods


### <a name="available">StreamFactory::available()</a>
_List all supported streams short names_

#### Arguments

_No arguments._

#### Return value

_Type:_ [array](https://www.php.net/manual/language.types.array.php)


### <a name="create">StreamFactory::create()</a>
_Create a new instance of the queried stream_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|The stream's short name

#### Return value

_Type:_ [IOStream](/doc/api/IO/Stream/IOStream.md)


### <a name="supports">StreamFactory::supports()</a>
_Check that the factory can create the queried stream_

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string](https://www.php.net/manual/language.types.string.php)|Short name of the stream

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)



[self]: StreamFactory.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

