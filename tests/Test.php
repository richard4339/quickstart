<?php

class QuickStartTest extends PHPUnit_Framework_TestCase
{

    public function testGravatarFakeEmail()
    {

        $email = "iamafake@email.example";

        $gravatar = get_gravatar($email);

        $this->assertEquals("https://www.gravatar.com/avatar/cc48dc8dd4005d18de267ca835ff786c?s=80&d=mm&r=g", $gravatar);

    }

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
        $l = 1;

        $this->assertEquals(left($s), 'A');
    }

    public function testLeftTwoCharacters()
    {
        $s = "ABC123";
        $l = 2;

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

}
