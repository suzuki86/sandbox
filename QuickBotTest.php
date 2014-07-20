<?php

require_once __DIR__ . '/twitteroauth/twitteroauth/twitteroauth.php';
require_once 'QuickBot.php';

class QuickBotText extends PHPUnit_Framework_TestCase{

  public function testSendMail(){
    $this->assertTrue(mb_send_mail('tsnr0001@gmail.com', 'test', 'body'));
  }
}
