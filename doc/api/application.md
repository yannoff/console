# Yannoff\Component\Console\Application

Class Application

## Methods

### Application::__construct

_Application constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|The application name
$version|string|The application version

#### Return value

_No return value._


### Application::getName

_Getter for the application name_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Application::getVersion

_Getter for the application version_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Application::getScript

_Getter for the script property_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Application::run

_Run the application_

_This is the entrypoint method._

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
int|The command exit status code


### Application::addCommands

_Add several commands in one shot_

#### Arguments

Name|Type|Description
----|----|-----------
$commands|Command[]|The commands to be registered

#### Return value

Type|Description
----|-----------
self|


### Application::add

_Add a command to the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$command|Command|The command to register

#### Return value

Type|Description
----|-----------
self|


### Application::find

_Proxy to Application::find() method_

_Implemented for backward compatibility with Symfony inheriting applications_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|The requested command name

#### Return value

Type|Description
----|-----------
Command|


### Application::get

_Get a command by its name from the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|The requested command name

#### Return value

Type|Description
----|-----------
Command|


### Application::has

_Check for the presence of the named command in the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|The searched command name

#### Return value

Type|Description
----|-----------
bool|


### Application::getUsage

_Build application usage/help message upon the registered commands and return it_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Application::init

_Hook for initialization tasks, called at the end of the constructor:_

_- add common commands (help, version)_

#### Arguments

_No arguments._

#### Return value

_No return value._


