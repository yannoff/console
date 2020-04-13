[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class StreamInitializer

**FQN:** [Yannoff\Component\Console\IO\StreamInitializer][self]
<br/>



## Overview

_External initializer for classes using StreamAwareTrait<br/>The purpose of this class is to keep all stream initialization logic<br/>separated from the proper StreamAware classes code, avoiding to have<br/>initialization methods exposed in extending classes_
<br/><br/>

**Properties**

- [$accessor](#accessor)

**Methods**

- [get()](#get)
- [getReader()](#getReader)
- [getStream()](#getStream)
- [getWriter()](#getWriter)
- [supportsReader()](#supportsReader)
- [supportsWriter()](#supportsWriter)

---

## Properties


### <a name="accessor">StreamInitializer::$accessor</a>


_Singleton instance to the property accessor<br/>Avoid creating a new instance each time initialize() is invoked_

**type**: [PropertyAccessor](/doc/api/IO/PropertyAccessor.md)<br/>
**access**: protected<br/>


---

## Methods


### <a name="get">StreamInitializer::get()</a>
_Lazy stream getter & initializer method<br/>Initialize the given stream (if necessary) and return it by reference_

#### Arguments

Name|Type|Description
----|----|-----------
$target|[object](https://www.php.net/manual/language.types.object.php)|The object owning the stream property
$stream|[string](https://www.php.net/manual/language.types.string.php)|The stream short name

#### Return value

_Type:_ [IOReader](/doc/api/IO/Stream/IOReader.md) **&#124;** [IOWriter](/doc/api/IO/Stream/IOWriter.md)


### <a name="getReader">StreamInitializer::getReader()</a>
_Lazy IO reader getter & initializer method<br/>Initialize the given reader (if necessary) and return it by reference_

#### Arguments

Name|Type|Description
----|----|-----------
$target|[object](https://www.php.net/manual/language.types.object.php)|The object owning the reader property
$stream|[string](https://www.php.net/manual/language.types.string.php)|The IO reader short name

#### Return value

_Type:_ [IOReader](/doc/api/IO/Stream/IOReader.md)


### <a name="getStream">StreamInitializer::getStream()</a>
_Accessor method for any given object's stream property_

#### Arguments

Name|Type|Description
----|----|-----------
$target|[object](https://www.php.net/manual/language.types.object.php)|
$stream|[string](https://www.php.net/manual/language.types.string.php)|

#### Return value

_Type:_ mixed<br />_Description: A reference to the queried stream property_


### <a name="getWriter">StreamInitializer::getWriter()</a>
_Lazy IO writer getter & initializer method<br/>Initialize the given writer (if necessary) and return it by reference_

#### Arguments

Name|Type|Description
----|----|-----------
$target|[object](https://www.php.net/manual/language.types.object.php)|The object owning the writer property
$stream|[string](https://www.php.net/manual/language.types.string.php)|The IO writer short name

#### Return value

_Type:_ [IOWriter](/doc/api/IO/Stream/IOWriter.md)


### <a name="supportsReader">StreamInitializer::supportsReader()</a>
_Validate the queried IO reader short name_

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[string](https://www.php.net/manual/language.types.string.php)|The reader's short name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)


### <a name="supportsWriter">StreamInitializer::supportsWriter()</a>
_Validate the queried IO writer short name_

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[string](https://www.php.net/manual/language.types.string.php)|The writer's short name

#### Return value

_Type:_ [bool](https://www.php.net/manual/language.types.bool.php)



[self]: StreamInitializer.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

