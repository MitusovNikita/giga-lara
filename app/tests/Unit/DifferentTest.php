<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\DB;

class DifferentTest extends TestCase
{
    public function test_cases() : void
    {
        // test equals vars
        $this->assertEquals(0, 0);
        $this->assertTrue(true);
        $this->assertNull(null);
        $this->assertCount(3, array(1,2,3));
        $db = new DB;
        $this->assertInstanceOf(DB::class, $db);
    }
}
