<?php

class StringTest extends PHPUnit_Framework_TestCase
{

    public function testRandomString()
    {
        $this->assertNotEmpty(generateRandomString());
    }

    // left
    public function testLeftNoString()
    {
        $s = "";
        $l = 1;

        $this->assertEquals(left($s, $l), '');
    }

    public function testLeftOneCharacter()
    {
        $s = "ABC123";
        $l = 1;

        $this->assertEquals(left($s, $l), 'A');
    }

    public function testLeftOneCharacterNoLengthParam()
    {
        $s = "ABC123";

        $this->assertEquals(left($s), 'A');
    }

    public function testLeftTwoCharacters()
    {
        $s = "ABC123";

        $this->assertEquals(left($s, $l), 'AB');
    }

    public function testLeftZeroCharacters()
    {
        $s = "ABC123";
        $l = 0;

        $this->assertEquals(left($s, $l), '');
    }

    public function testLeftTooManyCharacters()
    {
        $s = "ABC123";
        $l = 7;

        $this->assertEquals(left($s, $l), $s);
    }

    public function testLeftNotAString()
    {
        $s = 7;

        $this->assertEquals(left($s), '');
    }

    public function testLeftNotALength()
    {
        $s = "ABC123";
        $l = 'Q';

        $this->assertEquals(left($s, $l), '');
    }

    public function testLeftNegativeLength()
    {
        $s = "ABC123";
        $l = -5;

        $this->assertEquals(left($s, $l), 'ABC12');
    }
    
    //right
    public function testRightNoString()
    {
        $s = "";
        $l = 1;

        $this->assertEquals(right($s, $l), '');
    }

    public function testRightOneCharacter()
    {
        $s = "ABC123";
        $l = 1;

        $this->assertEquals(right($s, $l), '3');
    }

    public function testRightOneCharacterNoLengthParam()
    {
        $s = "ABC123";
        $l = 1;

        $this->assertEquals(right($s), '3');
    }

    public function testRightTwoCharacters()
    {
        $s = "ABC123";
        $l = 2;

        $this->assertEquals(right($s, $l), '23');
    }

    public function testRightZeroCharacters()
    {
        $s = "ABC123";
        $l = 0;

        $this->assertEquals(right($s, $l), '');
    }

    public function testRightTooManyCharacters()
    {
        $s = "ABC123";
        $l = 7;

        $this->assertEquals(right($s, $l), $s);
    }

    public function testRightNotAString()
    {
        $s = 7;

        $this->assertEquals(right($s), '');
    }

    public function testRightNotALength()
    {
        $s = "ABC123";
        $l = 'Q';

        $this->assertEquals(right($s, $l), '');
    }

    public function testRightNegativeLength()
    {
        $s = "ABC123";
        $l = -5;

        $this->assertEquals(right($s, $l), 'BC123');
    }

}
