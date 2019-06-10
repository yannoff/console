# Yannoff\Component\Console\ArgvResolver

Class ArgvResolver

## Methods

### ArgvResolver::__construct

_ArgvResolver constructor._

_NOTE: We pass the definition registry BY REF: when the resolver is instantiated, it has not been setup yet_

#### Arguments

Name|Type|Description
----|----|-----------
$definition|Definition|The arguments &amp; options definition registry, passed from the Command instance

#### Return value

_No return value._


### ArgvResolver::hasArgumentDefinition

_Check for the existence of the argument definition by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
bool|


### ArgvResolver::hasArgumentValue

_Check for the existence of the argument value by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
bool|


### ArgvResolver::hasOptionDefinition

_Check for the existence of the option definition by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
bool|


### ArgvResolver::hasOptionValue

_Check for the existence of the option value by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
bool|


### ArgvResolver::getArgumentDefinition

_Get argument definition by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
Argument|


### ArgvResolver::getArgumentValue

_Get argument value by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
mixed|


### ArgvResolver::getOptionDefinition

_Get option definition by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
Option|


### ArgvResolver::getOptionValue

_Get option value by name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
mixed|


### ArgvResolver::resolve

_Parse the given command line arguments and populate resolver_

_arguments &amp; options values accordingly_

#### Arguments

Name|Type|Description
----|----|-----------
$argv|array|The command line arguments

#### Return value

_No return value._


### ArgvResolver::getType

_Detect command-line argument type from its name:_

_long option, short option or argument_

#### Arguments

Name|Type|Description
----|----|-----------
$arg|string|

#### Return value

Type|Description
----|-----------
int|


### ArgvResolver::in

_Fetch contents from standard input (STDIN)_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
bool&#124;false&#124;string|


### ArgvResolver::err

_Print text to standard error (STDERR)_

#### Arguments

Name|Type|Description
----|----|-----------
$text|string|The text to print
$nl|bool|Wether to append a new line feed after the text

#### Return value

Type|Description
----|-----------
bool&#124;int|


### ArgvResolver::out

_Print text to standard output (STDOUT)_

#### Arguments

Name|Type|Description
----|----|-----------
$text|string|The text to print
$nl|bool|Wether to append a new line feed after the text

#### Return value

Type|Description
----|-----------
bool&#124;int|


### ArgvResolver::writeln

_Print text either to STDOUT or STDERR_

#### Arguments

Name|Type|Description
----|----|-----------
$text|string|The text to print
$options|null|Kept for symfony BC, but ignored
$stream|mixed|Where to redirect output (defaults to STDOUT)

#### Return value

Type|Description
----|-----------
bool&#124;int|


### ArgvResolver::getLineFeed

_Give the new line feed character(s)_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### ArgvResolver::addLineFeed

_Decorate text, appending a new line feed if requested_

#### Arguments

Name|Type|Description
----|----|-----------
$text|string|The text to decorate
$feed|bool|Enable or disable new line feed

#### Return value

Type|Description
----|-----------
string|


