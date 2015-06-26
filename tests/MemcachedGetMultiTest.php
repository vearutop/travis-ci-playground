<?php

/**
 * Created by PhpStorm.
 * User: vpoturaev
 * Date: 6/26/15
 * Time: 14:27
 */
class MemcachedGetMultiTest extends PHPUnit_Framework_TestCase
{
    public function testMemached() {
        $mc = new Memcached();

        $mc->addServer('localhost', 11211);

        $mc->set('test1', 'value1');
        $mc->set('test2', 'value1');

        $res = $mc->getMulti(array('test1', 'test2'));
        var_dump($mc->getResultCode(), $mc->getResultMessage(), $res);

        $res = $mc->getMulti(array('test1', 'test3'));
        var_dump($mc->getResultCode(), $mc->getResultMessage(), $res);


        $res = $mc->getMulti(array('test4', 'test3'));
        var_dump($mc->getResultCode(), $mc->getResultMessage(), $res);

    }
}