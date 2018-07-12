<?php

namespace Exercises\Testing;

use PHPUnit\Framework\TestCase;
use User;

class UserTest extends TestCase
{
    public function testUserCanBeCreated()
    {
        $this->assertInstanceOf(
            User::class,
            new User()
        );
    }

    public function testUserCreatedWithEmail()
    {
        $user = new User('john.doe@email.com');

        $this->assertEquals(
            'john.doe@email.com',
            $user->email
        );
    }

    public function testUserEmailInvalidThrowsException()
    {
        $this->expectException('InvalidArgumentException');

        $user = new User('blabla');
    }

    public function testUserCanBeUsedAsString()
    {
        $user = new User('john.doe@email.com');

        $this->assertEquals(
            'john.doe@email.com',
            (string)$user
        );

        // $this->expectOutputString('john.doe@email.com');

        // echo $user;
    }
}