<?php

declare(strict_types=1);

namespace App;

/**
 * A class with a single function that returns true if the string inputed is
 * a palindrome.
 *
 * @author Rob Waller <rdwaller1984@gmail.com>
 */
class Palindrome
{
    /**
     * Lowercase inputed word, compares original word against a reverse of the
     * word. If they match then the method returns true as the word is a
     * palindrome.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome(string $word): bool
    {
        return strtolower($word) === strrev(strtolower($word));
    }
}
