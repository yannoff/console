[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Trait StreamAwareTrait

**FQN:** [Yannoff\Component\Console\IO\StreamAwareTrait][self]
<br/>



## Overview

_Provide proxy methods to IO Stream Readers & Writers<br/>This trait should always be used in abstract classes,<br/>this ensures that streams won't be accessed directly_
<br/><br/>

**Properties**

- [$stderr](#stderr)
- [$stdin](#stdin)
- [$stdout](#stdout)

**Methods**

- [ioerror()](#ioerror)
- [ioread()](#ioread)
- [iowrite()](#iowrite)

---

## Properties


### <a name="stderr">StreamAwareTrait::$stderr</a>



**type**: [StandardError](/doc/api/IO/Stream/StandardError.md)<br/>
**access**: private<br/>


### <a name="stdin">StreamAwareTrait::$stdin</a>



**type**: [StandardInput](/doc/api/IO/Stream/StandardInput.md)<br/>
**access**: private<br/>


### <a name="stdout">StreamAwareTrait::$stdout</a>



**type**: [StandardOutput](/doc/api/IO/Stream/StandardOutput.md)<br/>
**access**: private<br/>


---

## Methods


### <a name="ioerror">StreamAwareTrait::ioerror()</a>
_Print a message to standard error with the given ending char_

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|The message to print
$ending|[string](https://www.php.net/manual/language.types.string.php)|The ending string (defaults to "\n")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_


### <a name="ioread">StreamAwareTrait::ioread()</a>
_Read contents from the standard input_

#### Arguments

_No arguments._

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: The contents or **false** in case of failure_


### <a name="iowrite">StreamAwareTrait::iowrite()</a>
_Print a message to standard output with the given ending string_

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string](https://www.php.net/manual/language.types.string.php)|The message to print
$ending|[string](https://www.php.net/manual/language.types.string.php)|The ending string (defaults to "\n")

#### Return value

_Type:_ [int](https://www.php.net/manual/language.types.int.php) **&#124;** [false](https://www.php.net/manual-lookup.php?pattern=false)<br />_Description: Number of bytes written or **false** on error_



[self]: StreamAwareTrait.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

