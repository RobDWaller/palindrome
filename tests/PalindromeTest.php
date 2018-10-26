<?php

namespace Tests;

use App\Palindrome;

use PHPUnit\Framework\TestCase;

class PalindromTest extends TestCase
{
    public function testPalindrome()
    {
        $palindrome = new Palindrome;

        $this->assertInstanceOf(Palindrome::class, $palindrome);
    }

    public function testIsPalindrome()
    {
        $palindrome = new Palindrome;

        $this->assertTrue($palindrome->isPalindrome("Deleveled"));
    }

    public function testIsPalindromeLowercase()
    {
        $palindrome = new Palindrome;

        $this->assertTrue($palindrome->isPalindrome("deleveled"));
    }

    public function testIsPalindromeAlternative()
    {
        $palindrome = new Palindrome;

        $this->assertTrue($palindrome->isPalindrome("Rotator"));
    }

    public function testIsPalindromeFalse()
    {
        $palindrome = new Palindrome;

        $this->assertFalse($palindrome->isPalindrome("Carpark"));
    }

    public function testIsPalindromeFalseLowercase()
    {
        $palindrome = new Palindrome;

        $this->assertFalse($palindrome->isPalindrome("football"));
    }
}
