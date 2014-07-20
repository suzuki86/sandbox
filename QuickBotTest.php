<?php

class QuickBotText extends PHPUnit_Framework_TestCase{

  public function testSendMail(){
    $this->assertTrue(mb_send_mail('tsnr0001@gmail.com', 'test', 'body'));
    $messages = json_decode(file_get_contents('http://127.0.0.1:1080/messages'));
    var_dump($messages);
  }
}
