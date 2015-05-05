<?php

class SampleTest extends PHPUnit_Framework_TestCase {
    public function testOne() {
        var_dump(phpversion());
        var_dump(file_get_contents('http://localhost:8000/'));
        var_dump(file_get_contents('http://localhost:1337/'));
    }
}