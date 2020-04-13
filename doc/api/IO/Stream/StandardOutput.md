[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class StandardOutput

**FQN:** [Yannoff\Component\Console\IO\Stream\StandardOutput][self]
<br/>

_**implements** [IOWriter](/doc/api/IO/Stream/IOWriter.md), [IOStream](/doc/api/IO/Stream/IOStream.md)_


## Overview

_Writer stream for standard output (STDOUT)_
<br/><br/>

**Properties**

- [$handle](#handle)

**Methods**

- [write()](#write)

---

## Properties


### <a name="handle">StandardOutput::$handle</a>


_Handle to the writable stream_

**type**: [resource](https://www.php.net/manual-lookup.php?pattern=resource)<br/>
**access**: protected<br/>


---

## Methods


### <a name="write">StandardOutput::write()</a>
_Write contents to the output stream_

#### Arguments

Name|Type|Description
----|----|-----------
$contents|[string](https://www.php.net/manual/language.types.string.php)|The contents to write

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_



[self]: StandardOutput.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

