[&laquo; Back to Table Of Contents](/doc/api/index.md)

# Class CygwinFormatter

**FQN:** [Yannoff\Component\Console\IO\Output\CygwinFormatter][self]
<br/>
_**extends** [PosixFormatter](/doc/api/IO/Output/PosixFormatter.md)_<br/>
_**implements** [Formatter](/doc/api/IO/Output/Formatter.md)_


## Overview

_Cygwin/GitBash Flavored terminal formatter (Not implemented yet)_
<br/><br/>

**Properties**

- [$tags](#tags)

**Methods**

- [format()](#format)
- [render()](#render)
- [replace()](#replace)

---

## Properties


### <a name="tags">CygwinFormatter::$tags</a>

_inherited from: [PosixFormatter](/doc/api/IO/Output/PosixFormatter.md#tags)_

_Mapping between pseudo-tags and terminal modifiers_


**access**: protected<br/>


---

## Methods


### <a name="format">CygwinFormatter::format()</a>
_Render the given markup text into a terminal-compatible format_

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string](https://www.php.net/manual/language.types.string.php)|The pre-formatted text to be rendered

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)


### <a name="render">CygwinFormatter::render()</a>
_Render the given string into a terminal-compatible format_

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string](https://www.php.net/manual/language.types.string.php)|The pre-formatted text to be rendered

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)<br />_Description: @internal_


### <a name="replace">CygwinFormatter::replace()</a>
_Substitute all tag occurrences by their modifiers counterparts_

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string](https://www.php.net/manual/language.types.string.php)|The text to format
$tag|[string](https://www.php.net/manual/language.types.string.php)|The tag to be replaced
$open|[string](https://www.php.net/manual/language.types.string.php)|The opening tag substitution
$close|[string](https://www.php.net/manual/language.types.string.php)|The closing tag substitution

#### Return value

_Type:_ [string](https://www.php.net/manual/language.types.string.php)<br />_Description: @internal_



[self]: CygwinFormatter.md

[&laquo; Back to Table Of Contents](/doc/api/index.md)

