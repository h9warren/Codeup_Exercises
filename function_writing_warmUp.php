<?php

// function upperCase($hello) {
//   return ucfirst($hello);
// }
// $hello = upperCase("hello");
// echo $hello .PHP_EOL;



  $first = ucfirst($argv[1]);
  $last = ucfirst($argv[2]);

  if ( is_string($first) && is_string($last) ) {
    fwrite(STDOUT, "Hello, there $first $last!" .PHP_EOL);
  } else {
    echo "Please enter a first and last name!";
  }
