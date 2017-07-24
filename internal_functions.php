<?php

// TODO: Create your inspect() function here

function inspect($variable) {
  $type = gettype($variable);
  if (empty($variable) == false) {
    switch($type) {
      case "string":
      echo "The $type is $variable. " .PHP_EOL;
      break;
      case "null":
      echo "The $type is $variable. " .PHP_EOL;
      break;
      case "boolean":
      echo "The $type is false. " .PHP_EOL;
      break;
      case "double":
      echo "The $type is $variable. " .PHP_EOL;
      break;
      case "array":
      echo "The $type is $variable.  ";
      foreach ($variable as $value) {
        echo "$value  ";
      };
      echo "\n";
      break;
      case "integer":
      echo "The $type is $variable. " .PHP_EOL;
      break;
    }
  } else {
    if ($type == "double" || $type == "integer") {
      echo "The $type is 0" . PHP_EOL;
    } else if ($type == "boolean") {
      echo "The $type is false." . PHP_EOL;
    } else if ($type == "NULL") {
      echo "The value is NULL." . PHP_EOL;
    } else {
      echo "The $type is empty." . PHP_EOL;
    }
  }
}








// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value
echo 'Inspecting $num1:' . PHP_EOL;
$variable = inspect($num1);

echo 'Inspecting $num2:' . PHP_EOL;
$variable = inspect($num2);

echo 'Inspecting $num3:' . PHP_EOL;
$variable = inspect($num3);

echo 'Inspecting $num4:' . PHP_EOL;
$variable = inspect($num4);

echo 'Inspecting $null:' . PHP_EOL;
$variable = inspect($null);

echo 'Inspecting $bool1' . PHP_EOL;
$variable = inspect($bool1);

echo 'Inspecting $bool2' . PHP_EOL;
$variable = inspect($bool2);

echo 'Inspecting $string1' . PHP_EOL;
$variable = inspect($string1);

echo 'Inspecting $string2' . PHP_EOL;
$variable = inspect($string2);

echo 'Inspecting $array1' . PHP_EOL;
$variable = inspect($array1);

echo 'Inspecting $array2' . PHP_EOL;
$variable = inspect($array2);
