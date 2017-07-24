<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];


$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
$count = 0;


function existsInArray($needle, $haystack)
{

  if(array_search($needle, $haystack)) {
    return false;
  } else {
    return true;
  }
}
if(existsInArray("Tina", $names)) {
  echo "Tina is in the array" . PHP_EOL;
} else {
  echo "Tina not home." . PHP_EOL;
}
if(existsInArray("Bob", $names)) {
  echo "Bob is in the array" . PHP_EOL;
} else {
  echo "Bob not home." . PHP_EOL;
}

function numberOfValuesInCommon($array1, $array2)
{
  $count = 0;
  foreach($array1 as $value)
  {
    if(existsInArray($value, $array2)) {
      $count++;
    }
  }
  return $count;
}

echo "The number of values that \$names and \$compare have in common is " . numberOfValuesInCommon($names, $compare) . PHP_EOL;
