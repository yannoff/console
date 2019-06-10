# Yannoff\Component\Console\IO\Output\PosixOutputFormatter

Class PosixOutputFormatter

POSIX flavored output formatter

## Methods

### PosixOutputFormatter::format

_Render the given string into a terminal-compatible format_

#### Arguments

Name|Type|Description
----|----|-----------
$text|string|

#### Return value

Type|Description
----|-----------
string|


### PosixOutputFormatter::create

_OutputFormatter factory method_

_Depending on the OS, a different output formatter may be instanciated_

#### Arguments

Name|Type|Description
----|----|-----------
$os|string|The target Operating System

#### Return value

Type|Description
----|-----------
OutputFormatter|


### PosixOutputFormatter::getInstance

_Static getter for the singleton instance_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
self|


### PosixOutputFormatter::render

_Render the given string into a terminal-compatible format_

#### Arguments

Name|Type|Description
----|----|-----------
$text|string|The pre-formatted text to be rendered

#### Return value

Type|Description
----|-----------
string|


### PosixOutputFormatter::replace

_Substitute all tag occurences by their modifiers counterparts_

#### Arguments

Name|Type|Description
----|----|-----------
$text|string|The text to format
$tag|string|The tag to be replaced
$open|string|The opening tag substitution
$close|string|The closing tag substitution

#### Return value

Type|Description
----|-----------
string|


