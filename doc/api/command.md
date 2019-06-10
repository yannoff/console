# Yannoff\Component\Console\Command

Class Command

Base class all commands will inherit from

## Methods

### Command::execute

_Placeholder for the main command code_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
int|The command exit status code


### Command::configure

_The command initialization method_

_This is where all the command setup instructions must reside:_

_setting name, help, description, options &amp; arguments definitions_

_This method is intended to be overridden in extending classes_

#### Arguments

_No arguments._

#### Return value

_No return value._


### Command::__construct

_Command constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|string&#124;null|The command name

#### Return value

_No return value._


### Command::run

_Method running the command_

#### Arguments

Name|Type|Description
----|----|-----------
$args|array|List of the arguments passed via the command-line

#### Return value

Type|Description
----|-----------
int|The command exit status code (O for success)


### Command::setApplication

_Setter for the Application instance pointer_

_**NOTA BENE:** Application is passed BY-REF_

#### Arguments

Name|Type|Description
----|----|-----------
$application|Application|The Application instance reference

#### Return value

Type|Description
----|-----------
self|


### Command::getName

_Getter for the command name_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Command::getHelp

_Getter for the command short help_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Command::getDescription

_Getter for the command description_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Command::getOption

_Retrieve an option value by its name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|The name of the queried option

#### Return value

Type|Description
----|-----------
mixed|


### Command::getArgument

_Retrieve an argument value by its name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|The name of the queried argument

#### Return value

Type|Description
----|-----------
mixed|


### Command::getUsage

_Build the whole command usage/help message with all options/arguments documented_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Command::getSynopsis

_Get the command synopsis_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Command::setName

_Setter for the command name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
self|


### Command::setHelp

_Setter for the command help_

#### Arguments

Name|Type|Description
----|----|-----------
$help|string|

#### Return value

Type|Description
----|-----------
self|


### Command::setDescription

_Setter for the command description_

#### Arguments

Name|Type|Description
----|----|-----------
$desc|string|

#### Return value

Type|Description
----|-----------
self|


### Command::addArgument

_Add an argument definition to the command_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|The argument name
$type|int|The argument type: required or optional
$help|string|The argument help message
$default|mixed|Optional default value for the argument

#### Return value

Type|Description
----|-----------
self|


### Command::addOption

_Add an option definition to the command_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|Long name for the option
$short|string|Optional short name for the option
$type|int|The option type: value or flag
$help|string|The option help message
$default|mixed|Optional default value for the option

#### Return value

Type|Description
----|-----------
self|


### Command::addCommonOptions

_Add the options common to every command_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
self|


### Command::in

_Fetch contents from standard input (STDIN)_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
bool&#124;false&#124;string|


### Command::err

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


### Command::out

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


### Command::writeln

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


### Command::getLineFeed

_Give the new line feed character(s)_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Command::addLineFeed

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


