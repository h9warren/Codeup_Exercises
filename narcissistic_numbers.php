<?php


$i = 1;

for($i = 1; $i < 10; $i++) {

  $i = pow($i, strlen($i));
  echo $i .PHP_EOL;
}
