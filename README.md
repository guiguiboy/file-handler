# Simple file handler

This is a simple library which uses PHP generators to read a file. Think of it as a replacement for the built-in file() function 
which creates a copy of the file in the memory, thus making it unsuitable for large files.

## Getting Started

As long as the FileHandler class is autoloaded, simply:

```
$streamHandler = new StreamHandler(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'file.txt');

foreach ($streamHandler->getLines() as $line) {
    //Do what you want
}
```

A check is made in the constructor to ensure provided file path exists. If not, an \InvaliDArgumentException would be thrown.

### Prerequisites

 * Composer

### Installing

 * Add package to your deps with composer

```
composer require guiguiboy/simple-file-handler
```

 * Enjoy


## Running the tests

* Tests

```
vendor/bin/phpunit tests/
```

### And coding style tests

* PSR-2 compatibility

```
vendor/bin/phpcs --standard=psr2 --ignore=vendor .
```

## Contributing

Please, make PR. I'll be happy to review.

## Versioning



## Authors

* **Guillaume BRETOU**

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* README built with https://gist.github.com/PurpleBooth/109311bb0361f32d87a2
