<?php

class MemcachedTest extends PHPUnit_Framework_TestCase{
  function testMemcached(){
    $m = new Memcached();
    $m->addServer('localhost', 11211);
    $m->add('name', 'yamada');
    $this->assertEquals('yamada', $m->get('name'));
  }
}
