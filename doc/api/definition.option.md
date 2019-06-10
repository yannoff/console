# Yannoff\Component\Console\Definition\Option

Class Option

Option definition item

## Methods

### Option::__construct

_Option constructor._

#### Arguments

Name|Type|Description
----|----|-----------
$name|string|Option name. This is also the name used as a key in the Definition registry
$short|string|Optional short name for the option
$type|int|Type of option: value or flag
$help|string|Description text for the option
$default|mixed|Optional default value for the option

#### Return value

_No return value._


### Option::getShortcut

_Getter for the option&#039;s short name_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string&#124;null|


### Option::getSynopsis

__

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Option::getName

_Getter for the item name_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Option::getHelp

_Getter for the item help message_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
string|


### Option::getType

_Getter for the item type_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
int|


### Option::getDefault

_Getter for the item default value_

#### Arguments

_No arguments._

#### Return value

Type|Description
----|-----------
mixed|


