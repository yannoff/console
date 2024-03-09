## Upgrade notes

### Upgrading to 2.3

#### Breaking changes

The new [`StreamAware`](src/IO/StreamAware.php) interface may conflict with version 2.0 [`StreamAware`](../../tree/2.0.0/src/IO/StreamAware.php) abstract class.

### Upgrading from 2.1 to 2.2

#### Deprecation notes

The [`Formatter`](../../tree/2.2.0/src/IO/Output/Formatter.php) character sequences constants will soon be removed, in favor of the [`ASCII`](../../tree/2.2.0/src/IO/ASCII.php) class constants

- Use `ASCII::CR` instead of `Formatter::CR`
- Use `ASCII::LF` instead of `Formatter::LF`
- Use `ASCII::CRLF` instead of `Formatter::CRLF`
- Use `ASCII::TAB` instead of `Formatter::TAB`
- Use `ASCII::STAB` instead of `Formatter::STAB`
- Use `Application::PAD` instead of `Formatter::PAD`

### Upgrading from 2.0 to 2.1

#### The whole stream handling methods have been rehomed in [`IOHelper`](../../tree/2.1.0/src/IO/IOHelper.php)

- The `StreamAware` super class have been removed
- The stream pseudo-properties are now handled by the trait's `__get()` method

_To implement a proper `__get()` method in a class which uses the trait, one will have to import `IOHelper::__get()` as an alias._

```php
class Acme
{
    use IOHelper {
        __get as __stream_get;
    }
    
    // Implement proper magic getter
    public function __get($name)
    {
        // Put user-defined logic here
        if ($name == 'foo') {
            return 'bar';
        }
        // ...
    
        // Call the trait method then
        return $this->__stream_get($name);
    }
}
```

### Upgrading from 1.x to 2.x

#### `StreamAwareTrait` have been removed, in favor of [`IOHelper`](../../tree/2.0.0/src/IO/IOHelper.php)

- `StreamAwareTrait::ioread()` is replaced by `IOHelper::read()`
- `StreamAwareTrait::iowrite()` is replaced by `IOHelper::write()`
- `StreamAwareTrait::ioerror()` is replaced by `IOHelper::error()`

### `Command::errorln()` and `Command::writeln()` have been removed

- Use `error()` instead of `errorln()`
- Use `write()` instead of `writeln()`

### `FormatterFactory` have been removed
- Use `Registry::get()` if `IOHelper` stream properties are available
- Use `new PosixFormatter()` otherwise (eg. when in a static context)

### `Formatter` classes are not anymore injected in `Application` & `Command`

- Now formatters are stored in an application-wide [`FormatterRegistry`](../../tree/2.0.0/src/IO/Output/FormatterRegistry.php)
- The formatter is picked by output methods at each call, allowing for a better context detection (pipe, reg file, tty...)

### Verbosity level is now stored in the main `$level` publicly accessible static property

- Use `Verbosity::get()` instead of `Command::getVerbosity()`
- Use `Verbosity::set()` instead of `Command::setVerbosity()`
