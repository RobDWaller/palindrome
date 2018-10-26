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
}
