# Yannoff\Component\Console\Exception\Command\UnknownCommandException

Class UnknownCommandException

_Thrown when the application script is invoked with a command name unknown to the registry._

## Methods

### UnknownCommandException::__construct

_UnknownCommandException constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|Name of the queried command
$code|int|Error status code to be sent to the terminal (defaults to 127)
$previous|Throwable&#124;null|Optional parent exception

#### Return value

_No return value._

