<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $a = 5;
        $b = 10;
        $result = $a + $b;

        $this->assertEquals(15, $result);
    }
}
