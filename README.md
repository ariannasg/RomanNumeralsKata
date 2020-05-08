![CI Workflow](https://github.com/ariannasg/RomanNumeralsKata/workflows/CI%20Workflow/badge.svg)
[![Contributor Covenant](https://img.shields.io/badge/Contributor%20Covenant-v2.0%20adopted-ff69b4.svg)](.github/CONTRIBUTING.md)
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE.md)

# Roman Numerals Kata
The Romans wrote their numbers using letters; specifically the letters 'I' meaning '1', 'V' meaning '5', 'X' meaning '10', 'L' meaning '50', 'C' meaning '100', 'D' meaning '500', and 'M' meaning '1000'. There were certain rules that the numerals followed which should be observed.

The symbols 'I', 'X', 'C', and 'M' can be repeated at most 3 times in a row. The symbols 'V', 'L', and 'D' can never be repeated. The '1' symbols ('I', 'X', and 'C') can only be subtracted from the 2 next highest values ('IV' and 'IX', 'XL' and 'XC', 'CD' and 'CM'). Only one subtraction can be made per numeral ('XC' is allowed, 'XXC' is not). The '5' symbols ('V', 'L', and 'D') can never be subtracted.

**Part I**

Write a program that can accept a numeric input and output the Roman numeral for the input number.


## Table of contents
* [Objectives](#objectives)
* [Local setup](#local-setup)
* [Testing](#testing)
* [CI/CD](#cicd)
* [TODOs](./TODO.md)
* [Contributing](#contributing)
* [License](#license)

## Objectives
Solving the Roman Numerals Kata using TDD with PHPUnit for training TDD principles.

## Local setup
Follow these instructions to get the project up and running for local development and testing purposes:
- Install php 7.3 (7.1 EOL soon): https://php-osx.liip.ch/.
- Configure the IDE CLI Interpreter to use php 7.3.
- Install composer (https://getcomposer.org/) and confirm the installation was successful by running:
    ```
    composer --version
    ```
- Install project dependencies (min dependencies are phpunit, phpstan and roave security):
    ```
    make install
    ```
- Configure the IDE Test Framework: https://www.jetbrains.com/help/phpstorm/using-phpunit-framework.html.
- The project already provides a phpunit configuration template that will be used when running tests via the Makefile.
Add a replica of the tests run configuration in the IDE for easier development.

## Testing
Command for running all tests:
```
make test
```

## TODOs
Please see list of [TODOs](TODO.md).

## Contributing
Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for understanding the code of conduct.

### License
This project is licensed under the terms of the MIT License.
Please see [LICENSE](LICENSE.md) for details.