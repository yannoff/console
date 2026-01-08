[API Reference](/doc/api/index.md) &raquo; [Yannoff](./index.md) &raquo; [Component](./index.md) &raquo; [Console](./index.md) &raquo; [ArgvResolver][self]


# Class ArgvResolver

**FQN:** [Yannoff\Component\Console\ArgvResolver][self]
<br/>


_**uses** [IOHelper](/doc/api/IO/IOHelper.md)_


## Overview

Source file: [src/ArgvResolver.php](/src/ArgvResolver.php)
### Constants

- [TYPE_ARGUMENT](#argvresolverTYPE_ARGUMENT)
- [TYPE_LONGOPT](#argvresolverTYPE_LONGOPT)
- [TYPE_OPTENDING](#argvresolverTYPE_OPTENDING)
- [TYPE_SHORTOPT](#argvresolverTYPE_SHORTOPT)

### Properties

- [$arguments](#argvresolverarguments)
- [$definition](#argvresolverdefinition)
- [$options](#argvresolveroptions)

### Methods

- [__construct()](#argvresolver__construct)
- [__get()](#argvresolver__get)
- [dmesg()](#argvresolverdmesg)
- [error()](#argvresolvererror)
- [getArgumentDefinition()](#argvresolvergetArgumentDefinition)
- [getArgumentValue()](#argvresolvergetArgumentValue)
- [getOptionDefinition()](#argvresolvergetOptionDefinition)
- [getOptionValue()](#argvresolvergetOptionValue)
- [getType()](#argvresolvergetType)
- [hasArgumentDefinition()](#argvresolverhasArgumentDefinition)
- [hasArgumentValue()](#argvresolverhasArgumentValue)
- [hasOptionDefinition()](#argvresolverhasOptionDefinition)
- [hasOptionValue()](#argvresolverhasOptionValue)
- [output()](#argvresolveroutput)
- [read()](#argvresolverread)
- [resolve()](#argvresolverresolve)
- [setVerbosity()](#argvresolversetVerbosity)
- [write()](#argvresolverwrite)

---
## Constants


### <a name="TYPE_ARGUMENT">`ArgvResolver::TYPE_ARGUMENT`</a>

_Argv type: argument_</br>
> type: [int][php:int] <br/>
> access: public <br/>
> value: `8` <br/>

<br/>

### <a name="TYPE_LONGOPT">`ArgvResolver::TYPE_LONGOPT`</a>

_Argv type: long option_</br>
> type: [int][php:int] <br/>
> access: public <br/>
> value: `2` <br/>

<br/>

### <a name="TYPE_OPTENDING">`ArgvResolver::TYPE_OPTENDING`</a>

_Argv type: option list end (--)_</br>
> type: [int][php:int] <br/>
> access: public <br/>
> value: `0` <br/>

<br/>

### <a name="TYPE_SHORTOPT">`ArgvResolver::TYPE_SHORTOPT`</a>

_Argv type: short option_</br>
> type: [int][php:int] <br/>
> access: public <br/>
> value: `1` <br/>

<br/>


## Properties


### <a name="arguments">`ArgvResolver::$arguments`</a>

_Argument values, stored by name_</br>


> type: [array][php:array] <br/>
> access: protected <br/>

<br/>

### <a name="definition">`ArgvResolver::$definition`</a>

_The command arguments & options definition registry_</br>
_This is a pointer to the command's definition registry instance_</br>


> type: [Definition](/doc/api/Definition.md) <br/>
> access: protected <br/>

<br/>

### <a name="options">`ArgvResolver::$options`</a>

_Option values, stored by name_</br>


> type: [array][php:array] <br/>
> access: protected <br/>

<br/>


## Methods


### <a name="__construct">`ArgvResolver::__construct()`</a>

```php
ArgvResolver::__construct($definition)
```

_ArgvResolver constructor._</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$definition|[Definition](/doc/api/Definition.md)|The arguments & options definition registry, passed from the Command instance<br/>NOTE: We pass the definition registry BY REF: when the resolver is instantiated, it has not been setup yet

#### Return value

>_No return value._


<br/><br/>

### <a name="__get">`ArgvResolver::__get()`</a>

```php
ArgvResolver::__get($name)
```

_Magic getter method for the input/output streams pseudo-properties_</br>

_In case one may need to define a proper magic getter in the class using IOHelper,_</br>
_this method should be imported as an alias, and called by the final `__get()` implementation_</br>

_Ex:_</br>

```php
class AcmeClass {

    // Import method as an alias
    use IOHelper {
        __get as __stream_get;
    }

    // Implement proper magic getter
    public function __get($name)
    {
        // Put user-defined logic here
        // ...

        // Finally call the trait method
        return $this->__stream_get($name);
    }
}
```




> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelper__get) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|The stream name: stdin, stdout or stderr<br/>

#### Return value

__

> type: [IOStream](/doc/api/IO/Stream/IOStream.md)


#### Exceptions

Type|Description
----|-----------
[UnsupportedStreamException](/doc/api/Exception/IO/UnsupportedStreamException.md)|If the requested stream is not stdin, stdout or stderr

<br/><br/>

### <a name="dmesg">`ArgvResolver::dmesg()`</a>

```php
ArgvResolver::dmesg($message, $level)
```

_Print a message on stderr if priority is relevant compared to the main verbosity level_</br>


> access: protected <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperdmesg) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string][php:string]|
$level|[int][php:int]|

#### Return value

>_No return value._


<br/><br/>

### <a name="error">`ArgvResolver::error()`</a>

```php
ArgvResolver::error($text, $ending)
```

_Print text to STDERR_</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelpererror) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>

### <a name="getArgumentDefinition">`ArgvResolver::getArgumentDefinition()`</a>

```php
ArgvResolver::getArgumentDefinition($name)
```

_Get argument definition by name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [Argument](/doc/api/Definition/Argument.md)


#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|

<br/><br/>

### <a name="getArgumentValue">`ArgvResolver::getArgumentValue()`</a>

```php
ArgvResolver::getArgumentValue($name)
```

_Get argument value by name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [mixed][php:mixed]


#### Exceptions

Type|Description
----|-----------
[UndefinedArgumentException](/doc/api/Exception/Definition/UndefinedArgumentException.md)|If no such argument found in the definition
[ArgumentNotSetException](/doc/api/Exception/Definition/ArgumentNotSetException.md)|If argument not provided by user & don't have a default value set

<br/><br/>

### <a name="getOptionDefinition">`ArgvResolver::getOptionDefinition()`</a>

```php
ArgvResolver::getOptionDefinition($name)
```

_Get option definition by name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [Option](/doc/api/Definition/Option.md)


#### Exceptions

Type|Description
----|-----------
[UnknownOptionException](/doc/api/Exception/Definition/UnknownOptionException.md)|

<br/><br/>

### <a name="getOptionValue">`ArgvResolver::getOptionValue()`</a>

```php
ArgvResolver::getOptionValue($name)
```

_Get option value by name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [mixed][php:mixed]


#### Exceptions

Type|Description
----|-----------
[UnknownOptionException](/doc/api/Exception/Definition/UnknownOptionException.md)|

<br/><br/>

### <a name="getType">`ArgvResolver::getType()`</a>

```php
ArgvResolver::getType($arg)
```

_Detect command-line argument type from its name:_</br>
_long option, short option or argument_</br>


> access: protected <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$arg|[string][php:string]|

#### Return value


> type: [int][php:int]


<br/><br/>

### <a name="hasArgumentDefinition">`ArgvResolver::hasArgumentDefinition()`</a>

```php
ArgvResolver::hasArgumentDefinition($name)
```

_Check for the existence of the argument definition by name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="hasArgumentValue">`ArgvResolver::hasArgumentValue()`</a>

```php
ArgvResolver::hasArgumentValue($name)
```

_Check for the existence of the argument value by name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="hasOptionDefinition">`ArgvResolver::hasOptionDefinition()`</a>

```php
ArgvResolver::hasOptionDefinition($name)
```

_Check for the existence of the option definition by name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="hasOptionValue">`ArgvResolver::hasOptionValue()`</a>

```php
ArgvResolver::hasOptionValue($name)
```

_Check for the existence of the option value by name_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$name|[string][php:string]|

#### Return value


> type: [bool][php:bool]


<br/><br/>

### <a name="output">`ArgvResolver::output()`</a>

```php
ArgvResolver::output($stream, $contents, $ending)
```

_Print contents to the given output_</br>


> access: private <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperoutput) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[IOWriter](/doc/api/IO/Stream/IOWriter.md)|The output stream wrapper
$contents|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text (defaults to "\n")<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>

### <a name="read">`ArgvResolver::read()`</a>

```php
ArgvResolver::read($interactive)
```

_Read contents from the standard input_</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperread) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$interactive|[bool][php:bool]|Whether to accept user input<br/>

#### Return value

_The contents or **false** in case of failure_

> type: [string][php:string] **&#124;** [false][php:false]


<br/><br/>

### <a name="resolve">`ArgvResolver::resolve()`</a>

```php
ArgvResolver::resolve($argv)
```

_Parse the given command line arguments and populate resolver_</br>
_arguments & options values accordingly_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$argv|[array][php:array]|The command line arguments<br/>

#### Return value

>_No return value._


#### Exceptions

Type|Description
----|-----------
[LogicException](/doc/api/Exception/LogicException.md)|

<br/><br/>

### <a name="setVerbosity">`ArgvResolver::setVerbosity()`</a>

```php
ArgvResolver::setVerbosity($verbosity)
```

_Change the main application verbosity level_</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelpersetVerbosity) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$verbosity|[int][php:int]|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="write">`ArgvResolver::write()`</a>

```php
ArgvResolver::write($text, $ending)
```

_Print text to STDOUT_</br>


> access: public <br/>
> inherited from: [IOHelper](/doc/api/IO/IOHelper.md#iohelperwrite) <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>


[self]: ArgvResolver.md
[php:array]: https://www.php.net/manual/language.types.array.php "PHP Built-in: array"
[php:bool]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: bool"
[php:boolean]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: boolean"
[php:callable]: https://www.php.net/manual/language.types.callable.php "PHP Built-in: callable"
[php:false]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: false"
[php:float]: https://www.php.net/manual/language.types.float.php "PHP Built-in: float"
[php:int]: https://www.php.net/manual/language.types.integer.php "PHP Built-in: int"
[php:integer]: https://www.php.net/manual/language.types.integer.php "PHP Built-in: integer"
[php:mixed]: https://www.php.net/manual/language.types.mixed.php "PHP Built-in: mixed"
[php:null]: https://www.php.net/manual/language.types.null.php "PHP Built-in: null"
[php:object]: https://www.php.net/manual/language.types.object.php "PHP Built-in: object"
[php:resource]: https://www.php.net/manual/language.types.resource.php "PHP Built-in: resource"
[php:string]: https://www.php.net/manual/language.types.string.php "PHP Built-in: string"
[php:true]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: true"
[php:ArrayAccess]: https://www.php.net/manual/class.arrayaccess.php "PHP Built-in: ArrayAccess"
[php:Closure]: https://www.php.net/manual/class.closure.php "PHP Built-in: Closure"
[php:Countable]: https://www.php.net/manual/class.countable.php "PHP Built-in: Countable"
[php:Directory]: https://www.php.net/manual/class.directory.php "PHP Built-in: Directory"
[php:Error]: https://www.php.net/manual/class.error.php "PHP Built-in: Error"
[php:Exception]: https://www.php.net/manual/class.exception.php "PHP Built-in: Exception"
[php:LogicException]: https://www.php.net/manual/class.logicexception.php "PHP Built-in: LogicException"
[php:Iterable]: https://www.php.net/manual/class.iterable.php "PHP Built-in: Iterable"
[php:Iterator]: https://www.php.net/manual/class.iterator.php "PHP Built-in: Iterator"
[php:RuntimeException]: https://www.php.net/manual/class.runtimeexception.php "PHP Built-in: RuntimeException"
[php:Reflector]: https://www.php.net/manual/class.reflector.php "PHP Built-in: Reflector"
[php:ReflectionClass]: https://www.php.net/manual/class.reflectionclass.php "PHP Built-in: ReflectionClass"
[php:ReflectionClassConstant]: https://www.php.net/manual/class.reflectionclassconstant.php "PHP Built-in: ReflectionClassConstant"
[php:ReflectionConstant]: https://www.php.net/manual/class.reflectionconstant.php "PHP Built-in: ReflectionConstant"
[php:ReflectionException]: https://www.php.net/manual/class.reflectionexception.php "PHP Built-in: ReflectionException"
[php:ReflectionFunction]: https://www.php.net/manual/class.reflectionfunction.php "PHP Built-in: ReflectionFunction"
[php:ReflectionMethod]: https://www.php.net/manual/class.reflectionmethod.php "PHP Built-in: ReflectionMethod"
[php:ReflectionProperty]: https://www.php.net/manual/class.reflectionproperty.php "PHP Built-in: ReflectionProperty"
[php:ReflectionParameter]: https://www.php.net/manual/class.reflectionparameter.php "PHP Built-in: ReflectionParameter"
[php:StdClass]: https://www.php.net/manual/class.stdclass.php "PHP Built-in: StdClass"
[php:Throwable]: https://www.php.net/manual/class.throwable.php "PHP Built-in: Throwable"
[php:Traversable]: https://www.php.net/manual/class.traversable.php "PHP Built-in: Traversable"


<!-- Generated: 2026-01-08 16:50:57 +01:00 -->