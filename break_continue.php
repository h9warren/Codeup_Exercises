<?php

// for ($i = 1; $i < 10; $i++) {
//   echo $i . "\n";
//   if ($i % 2 == 0) {
//     continue;
//   }
//   echo "^ that is an odd number.\n";
// }
//
// for ($i = 1; $i <= 100; $i++) {
//   echo $i .PHP_EOL;
//   if ( $i == 98 ) {
//     break;
//   }
// }
//
// $number = array (1,2,3,4,5);
//
// foreach ( $number as $key => $value ) {
//   echo "{$value}\n";
//
//   for ($i = 1; $i <= 10; $i++) {
//     if ($i == 2) {
//       echo "{$i}\n";
//       break 2;
//     }
//   }
// }
// echo "dope!\n";

for ( $i = 1; $i <= 100 ; $i++ ) {
  if ( $i % 2 != 0 ) {
    continue;
  }
  if ( $i % 2 == 0 ) {
    echo $i .PHP_EOL;
  }
}

for ( $i = 1; $i <= 100; $i++) {
  echo $i .PHP_EOL;
  if ($i == 10) {
    break;
  }
}
