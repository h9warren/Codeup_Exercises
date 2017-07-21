<?php


$result = 0;
$testArray = [2,1,-5,"bob"];

foreach($testArray as $value) {
  if (is_numeric($value)) {
    if ($value % 2 == 0) {
      $value = abs($value);
      $result *= $value;
      echo $result .PHP_EOL;
    } else {
      $value = abs($value);
      $result += $value;
      echo $result .PHP_EOL;
    }
  }
};
