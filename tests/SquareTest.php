<?php 
namespace Tests;

class SquareTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->square = new \Square(['length' => 10]);
    }

    public function testDraw()
    {
        $this->assertTrue($this->square->draw());
    }

}