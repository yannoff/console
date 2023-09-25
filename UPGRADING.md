## Upgrading

### Upgrading from 1.x to 2.x

#### `StreamAwareTrait` have been removed, in favor of [`IOHelper`](src/IO/IOHelper.php)

- `StreamAwareTrait::ioread()` is replaced by `IOHelper::read()`
- `StreamAwareTrait::iowrite()` is replaced by `IOHelper::write()`
- `StreamAwareTrait::ioerror()` is replaced by `IOHelper::error()`

### `Command::errorln()` and `Command::writeln()` have been removed

- Use `error()` instead of `errorln()`
- Use `write()` instead of `writeln()`

### `Formatter` classes are not anymore injected in `Application` & `Command`

- Now formatters are stored in an application-wide [`FormatterRegistry`](src/IO/Output/FormatterRegistry.php)
- The formatter is picked by output methods at each call, allowing for a better context detection (pipe, reg file, tty...)

### Verbosity level is now stored in the main `$level` publicly accessible static property

- Use `Verbosity::get()` instead of `Command::getVerbosity()`
- Use `Verbosity::set()` instead of `Command::setVerbosity()`
