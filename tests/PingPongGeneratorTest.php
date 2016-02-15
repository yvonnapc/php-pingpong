<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

      function test_printUpToNumber()
      {

      $test_PingPongGenerator1 = new PingPongGenerator;
      $input = '2';

      $result = $test_PingPongGenerator1->makeNumberList($input);

      $this->assertEquals('1,2', $result);
      }
      function test_printPingPong()
      {

      $test_PingPongGenerator2 = new PingPongGenerator;
      $input = '15';

      $result = $test_PingPongGenerator2->makeNumberList($input);

      $this->assertEquals('1,2,PING,4,PONG,PING,7,8,PING,PONG,11,PING,13,14,PINGPONG', $result);
      }
      function test_printPing()
      {

      $test_PingPongGenerator = new PingPongGenerator;
      $input = '15';

      $result = $test_PingPongGenerator->makeNumberList($input);

      $this->assertEquals('1,2,PING,4,PONG,PING,7,8,PING,PONG,11,PING,13,14,PINGPONG', $result);
      }
      function test_printPong()
      {

      $test_PingPongGenerator = new PingPongGenerator;
      $input = '15';

      $result = $test_PingPongGenerator->makeNumberList($input);

      $this->assertEquals('1,2,PING,4,PONG,PING,7,8,PING,PONG,11,PING,13,14,PINGPONG', $result);
      }
    }
 ?>
