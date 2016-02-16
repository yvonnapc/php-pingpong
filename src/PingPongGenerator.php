<?php
    class PingPongGenerator
    {
        function makeNumberList($input)
          {
            $counter = 1;
            $array = array();
            while ($counter <= $input) {
              if ($counter % 15 == 0 )
              {
                array_push($array, "PINGPONG");
              }
              elseif ($counter % 5 == 0)
              {
                array_push($array, "PONG");
              }
              elseif ($counter % 3 == 0 )
              {
                array_push($array, "PING");
              }
              else
              {
                array_push($array, $counter);
              }
              $counter++;
              $result = implode(",", $array);
              }
              return $result;

          }
    }
 ?>
