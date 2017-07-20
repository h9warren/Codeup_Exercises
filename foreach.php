<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $index) {
//   if (is_integer($index)){
//     $type = "integer";
//   }
//   if (is_float($index)){
//     $type = "float";
//   }
//   if (is_bool($index)){
//     $type = "boolean";
//   }
//   if (is_array($index)){
//     $type = "array";
//   }
//   if (is_null($index)){
//     $type = "null";
//   }
//   if (is_string($index)){
//     $type = "string";
//   }
//   echo "{$type}\n";
// }

// foreach ($things as $index) {
//   if (is_scalar($index)) {
//     echo "{$index}\n";
//   }
// }

foreach ($things as $index) {

  if (is_array($index)) {
    echo "Array ";
     foreach ($index as $values) {
       echo "$values ";
     }
    echo"\n";
  } else {
    echo "{$index}\n";
  }
}
