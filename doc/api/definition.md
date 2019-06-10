# Yannoff\Component\Console\Definition

Class Definition

The registry which holds options &amp; arguments definitions

## Methods

### Definition::addOption

_Register an option definition_

#### Arguments

Name|Type|Description
----|----|-----------
$option|Option|

#### Return value

Type|Description
----|-----------
self|


### Definition::addArgument

_Register an argument definition_

#### Arguments

Name|Type|Description
----|----|-----------
$argument|Argument|

#### Return value

Type|Description
----|-----------
self|


### Definition::hasArgument

_Check for existence of the given argument in the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
bool|


### Definition::hasOption

_Check for existence of the given option in the registry_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
bool|


### Definition::hasLongOption

_Check for existence of the given option in the registry by its long name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
bool|


### Definition::hasShortOption

_Check for existence of the given option in the registry by its short name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
bool|


### Definition::getLongOption

_Get option from the registry by its long name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
Option|


### Definition::getShortOption

_Get option from the registry by its short name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
Option|


### Definition::getOption

_Get option by its name, searching both long &amp; short names_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
Option|


### Definition::getArgument

_Get argument from the registry by its name_

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|

#### Return value

Type|Description
----|-----------
Argument|


### Definition::countArguments

_Return the total number of defined arguments_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
int|


### Definition::has

__

#### Arguments

_No arguments._

#### Return value

_No return value._


### Definition::get

_Get an item by name in the given registry_

#### Arguments

Name|Type|Description
----|----|-----------
$register|string|
$name|string|

#### Return value

Type|Description
----|-----------
Item|


### Definition::all

_Get all items array for the given registry name_

#### Arguments

Name|Type|Description
----|----|-----------
$register|string|

#### Return value

Type|Description
----|-----------
Item[]|


### Definition::getNameByPosition

_Calculate the index of the queried item in the given registry_

#### Arguments

Name|Type|Description
----|----|-----------
$register|string|
$idx|int|

#### Return value

Type|Description
----|-----------
string|


