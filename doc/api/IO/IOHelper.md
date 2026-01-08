[API Reference](/doc/api/index.md) &raquo; [Yannoff](../index.md) &raquo; [Component](../index.md) &raquo; [Console](../index.md) &raquo; [IO](./index.md) &raquo; [IOHelper][self]


# Trait IOHelper

**FQN:** [Yannoff\Component\Console\IO\IOHelper][self]
<br/>



## Overview

_Class IOHelper_</br>
_Provide a set of I/O read & write helper methods_</br>

Source file: [src/IO/IOHelper.php](/src/IO/IOHelper.php)
### Properties

- [$stderr](#iohelperstderr)
- [$stdin](#iohelperstdin)
- [$stdout](#iohelperstdout)

### Methods

- [__get()](#iohelper__get)
- [dmesg()](#iohelperdmesg)
- [error()](#iohelpererror)
- [output()](#iohelperoutput)
- [read()](#iohelperread)
- [setVerbosity()](#iohelpersetVerbosity)
- [write()](#iohelperwrite)

---

## Properties


### <a name="stderr">`IOHelper::$stderr`</a>


> type: [StandardError](/doc/api/IO/Stream/StandardError.md) <br/>
> access: magic (read) <br/>

<br/>

### <a name="stdin">`IOHelper::$stdin`</a>


> type: [StandardInput](/doc/api/IO/Stream/StandardInput.md) <br/>
> access: magic (read) <br/>

<br/>

### <a name="stdout">`IOHelper::$stdout`</a>


> type: [StandardOutput](/doc/api/IO/Stream/StandardOutput.md) <br/>
> access: magic (read) <br/>

<br/>


## Methods


### <a name="__get">`IOHelper::__get()`</a>

```php
IOHelper::__get($name)
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

### <a name="dmesg">`IOHelper::dmesg()`</a>

```php
IOHelper::dmesg($message, $level)
```

_Print a message on stderr if priority is relevant compared to the main verbosity level_</br>


> access: protected <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$message|[string][php:string]|
$level|[int][php:int]|

#### Return value

>_No return value._


<br/><br/>

### <a name="error">`IOHelper::error()`</a>

```php
IOHelper::error($text, $ending)
```

_Print text to STDERR_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>

### <a name="output">`IOHelper::output()`</a>

```php
IOHelper::output($stream, $contents, $ending)
```

_Print contents to the given output_</br>


> access: private <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$stream|[IOWriter](/doc/api/IO/Stream/IOWriter.md)|The output stream wrapper
$contents|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text (defaults to "\n")<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>

### <a name="read">`IOHelper::read()`</a>

```php
IOHelper::read($interactive)
```

_Read contents from the standard input_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$interactive|[bool][php:bool]|Whether to accept user input<br/>

#### Return value

_The contents or **false** in case of failure_

> type: [string][php:string] **&#124;** [false][php:false]


<br/><br/>

### <a name="setVerbosity">`IOHelper::setVerbosity()`</a>

```php
IOHelper::setVerbosity($verbosity)
```

_Change the main application verbosity level_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$verbosity|[int][php:int]|

#### Return value


> type: [self][self]


<br/><br/>

### <a name="write">`IOHelper::write()`</a>

```php
IOHelper::write($text, $ending)
```

_Print text to STDOUT_</br>


> access: public <br/>

#### Arguments

Name|Type|Description
----|----|-----------
$text|[string][php:string]|The text to print (defaults to empty string)
$ending|[string][php:string]|Ending character or text<br/>

#### Return value


> type: [bool][php:bool] **&#124;** [int][php:int]


<br/><br/>


[self]: IOHelper.md
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