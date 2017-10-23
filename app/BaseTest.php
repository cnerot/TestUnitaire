<?php
require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/Base.php";

use PHPUnit\Framework\TestCase;
class BaseTest extends TestCase
{
    public function testAddTrue()
    {
        $this->assertEquals(Base::add(2,3), 5);
    }
    public function testSubTrue()
    {
        $this->assertEquals(Base::sub(3,2), 1);
    }
    public function testMulTrue()
    {
        $this->assertEquals(Base::mul(3,2), 6);
    }
    public function testDivTrue()
    {
        $this->assertEquals(Base::div(4,2), 2);
    }
    public function testAvgTrue()
    {
        $this->assertEquals(Base::avg([4,2]), 3);
    }
    public function testAddFalse()
    {
        $this->assertNotEquals(Base::add(2,3), 4);
    }
    public function testSubFalse()
    {
        $this->assertNotEquals(Base::sub(2,3), 4);
    }
    public function testMulFalse()
    {
        $this->assertNotEquals(Base::mul(2,3), 3);
    }
    public function testDivFalse()
    {
        $this->assertNotEquals(Base::div(4,2), 5);
    }
    public function testAvgFalse()
    {
        $this->assertNotEquals(Base::avg([4,2]), 4);
    }
}