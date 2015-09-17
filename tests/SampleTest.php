<?php

class SampleTest extends PHPUnit_Framework_TestCase {
    public function testSort() {
        $a = array(10 => 0, 1, 2, 1, 3, 0, 1, 1, 0);
        asort($a);
        $this->assertSame(array (
            15 => 0,
            10 => 0,
            18 => 0,
            16 => 1,
            17 => 1,
            13 => 1,
            11 => 1,
            12 => 2,
            14 => 3,
        ), $a);
    }
}