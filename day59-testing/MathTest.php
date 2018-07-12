<?php

namespace Exercises\Testing;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testBoolean()
    {
        $this->assertTrue(true);
    }

    public function testMultiplyResult()
    {
        $this->assertEquals(
            Math::multiply(3, 2), 
            6
        );
    }

    public function testDivideResult()
    {
        $this->assertEquals(
            Math::divide(3, 2),
            1.5
        );
    }

    public function testDivideFirstArgumentNotNumericThrowsException()
    {
        $this->expectException('InvalidArgumentException');

        Math::divide('abc', 2);
    }

    public function testDivideSecondArgumentNotNumericThrowsException()
    {
        $this->expectException('InvalidArgumentException');

        Math::divide(3, 'abc');
    }

    public function testDivideByZeroThrowsException()
    {
        $this->expectException('PHPUnit\Framework\Error\Warning');

        Math::divide(3, 0);
    }
}