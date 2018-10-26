[![Build Status](https://travis-ci.org/RobDWaller/palindrome.svg?branch=master)](https://travis-ci.org/RobDWaller/palindrome) [![codecov](https://codecov.io/gh/RobDWaller/palindrome/branch/master/graph/badge.svg)](https://codecov.io/gh/RobDWaller/palindrome) [![StyleCI](https://github.styleci.io/repos/154809814/shield?branch=master)](https://github.styleci.io/repos/154809814)
# PHP Palindrome Test

This is a simple library that passes a palindrome string check test in PHP.

## Setup

Clone the library and run Composer

```
composer install
```

## Usage

Run via PHPUnit from the root directory:

```
vendor\bin\phpunit
```

Or interactively with PHP from the root directory:

```
php -a
Interactive mode enabled

php > require('src/Palindrome.php');
php > $palindrome = new App\Palindrome;
php > $result = $palindrome->isPalindrome('Deleveled');
php > var_dump($result);
php shell code:1:
bool(true)
php > exit
```

## Author

[RobDWaller](https://twitter.com/RobDWaller)
