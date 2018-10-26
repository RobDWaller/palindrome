<?php

declare(strict_types=1);

namespace App;

class Palindrome
{
    public function isPalindrome(string $word): bool
    {
        return strtolower($word) === strrev(strtolower($word));
    }
}
