<?php
namespace Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

Class DataproviderTest extends TestCase
{
    #[DataProvider('myDataProvider')]
    public function test_provider(int $num) : void
    {
        $this->assertEquals(1, $num);
    }

    public static function myDataProvider() : array
    {
        return [[1],[2]];
    }
}
