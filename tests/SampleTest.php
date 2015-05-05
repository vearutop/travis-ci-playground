<?php

class SampleTest extends PHPUnit_Framework_TestCase {
    public function testOne() {
        var_dump(phpversion());
        var_dump(file_get_contents('http://127.0.0.1:8000/'));
        var_dump(file_get_contents('http://127.0.0.1:1337/'));
    }
}