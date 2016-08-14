<?php


class FlattenTest extends PHPUnit_Framework_TestCase
{
    public function testEmptyArray()
    {
        $emptyArray = [];
        $flat = new Flatten();
        $this->assertEquals($emptyArray, $flat->flattener($emptyArray));
    }
}
