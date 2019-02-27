<?php 
namespace Tests;

class CircleTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->circle = new \Circle(['radius' => 5]);
    }

    public function testDraw()
    {
        $this->assertTrue($this->circle->draw());
    }

}