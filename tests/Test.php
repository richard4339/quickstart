<?php

class TwitchTest extends PHPUnit_Framework_TestCase
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

}
