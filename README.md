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

[RobDWaller]('https://twitter.com/RobDWaller')
