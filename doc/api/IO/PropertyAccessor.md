[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class PropertyAccessor

**FQN:** [Yannoff\Component\Console\IO\PropertyAccessor][self]
<br/>



## Overview

_The only purpose for this class is to allow StreamInitializer to access the private stream properties by reference<br/>It would have been simpler to include the code block directly inside StreamInitializer::initialize(),<br/>but a bug introduced in PHP 5.6.x forbid us to invoke a closure that way from inside a static method_
<br/><br/>


**Methods**

- [get()](#get)

---


## Methods


### <a name="get">PropertyAccessor::get()</a>
_Return a reference to the queried property on the given object<br/>@source https://ocramius.github.io/blog/accessing-private-php-class-members-without-reflection/_

#### Arguments

Name|Type|Description
----|----|-----------
$object|mixed|Any object
$property|[string](https://www.php.net/manual/language.types.string.php)|Property of the object

#### Return value

_Type:_ mixed<br />_Description: The property, by reference_



[self]: PropertyAccessor.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

