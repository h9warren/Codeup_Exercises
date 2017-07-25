<?php

// $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
//
// $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
//
// function combineArrays($array1, $array2) {
//   $newArray = [];
//   foreach($array1 as $index => $values) {
//     array_push($newArray, $values);
//     if ($array1[$index] !== $array2[$index]) {
//       array_push($newArray, $array2[$index]);
//     }
//   }
//   print_r($newArray);
// }
// combineArrays($names, $compare);


// BONUS: different lengths
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Johnny', 'Liz'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays($array1, $array2) {
  $newArray = [];
  foreach($array1 as $index => $values) {
    if (isset($index)) {
      array_push($newArray, $values);
    }
  }
  foreach($array2 as $index => $values) {
    if (isset($index)) {
      if ($array1[$index] !== $array2[$index]) {
        array_push($newArray, $array2[$index]);
      }
    }
  }
  print_r($newArray);
}
combineArrays($compare, $names);


// not to spec

// function combineArrays($array1, $array2) {
//   $newArray = [];
//   foreach($array1 as $values) {
//     array_push($newArray, $values);
//   }
//   foreach($array2 as $index => $names) {
//     if ($names != $newArray[$index]) {
//       array_push($newArray, $names);
//     }
//   }
//   print_r($newArray);
// }
// combineArrays($names, $compare);
