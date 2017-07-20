<?php

for ($i = 1; $i <= 100; $i++) {

  if (($i % 3 == 0)&&($i % 5 == 0)) {
    echo "fizzbuzz\n";
  }
  if ($i % 3 == 0) {
    echo "fizz\n";
  }
  if ($i % 5 == 0) {
    echo "buzz\n";
  } else {
    echo "$i\n";
  }
}

// $fizzers = [1, 0, 0, 0];
// $buzzers = [2, 0, 0, 0, 0];
// $words = ['', 'Fizz', 'Buzz', 'FizzBuzz'];
// foreach (range(1, 100) as $i) {
//     $words[0] = $i;
//     echo $words[$fizzers[$i % 3] + $buzzers[$i % 5]].PHP_EOL;
// }

// for ($i = 1; $i <= 100; $i++) {
//
//   $msg = '';
//
//   if (i % 3 === 0) {
//     $msg = 'fizz';
//   }
//   if (i % 5 === 0) {
//     $msg = 'buzz';
//   }
//   if ($msg !== '') {
//     echo $msg;
//   }
//
//   echo $msg !== '' ? $msg : $i;
//
