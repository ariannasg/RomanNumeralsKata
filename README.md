![CI Workflow](https://github.com/ariannasg/php-tdd-template/workflows/CI%20Workflow/badge.svg)
[![Contributor Covenant](https://img.shields.io/badge/Contributor%20Covenant-v2.0%20adopted-ff69b4.svg)](.github/CONTRIBUTING.md)
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE.md)

# Project Title
Project description

## Table of contents
* [Objectives](#objectives)
* [Local setup](#local-setup)
* [Testing](#testing)
* [CI/CD](#cicd)
* [TODOs](./TODO.md)
* [Contributing](#contributing)
* [License](#license)

## Objectives
Description of project objectives.

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

## CI/CD
Description of CI/CD setup.

## TODOs
Please see list of [TODOs](TODO.md).

## Contributing
Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for understanding the code of conduct.

### License
This project is licensed under the terms of the MIT License.
Please see [LICENSE](LICENSE.md) for details.