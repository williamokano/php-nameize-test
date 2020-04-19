# Testing Nameize library
Testing [Nameize](https://github.com/enricodias/Nameize) library and some other custom implementations.

Added some brazilian names, english names, german names, and dutch names.

## Install
Just run `composer install`

## Run tests
To run all tests, after installing everything, just run `./vendor/bin/phpunit tests`

## Run only nameize tests
`./vendor/bin/phpunit tests --filter 'testShouldConverNameWithNameize'`

## Run custom impl. tests
`./vendor/bin/phpunit tests --filter 'testShouldConverNameWithEveraldoReisImplementation'`
