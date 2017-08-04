<?php

// Write a function called isEven that takes in a variable and returns true or false if the provided input is evenly divisible by two or not.

function isEven($v) {
  if (is_numeric($v)) {
    $isEven = ($v % 2 === 0) ? true : false;
  } else {
    return false;
  }
  return $isEven;
}
$returnBool = isEven(32);
echo ($returnBool == true) ? "true\n" : "false\n";

//Write a function called isVowel that returns true or false if the provided input is the letter 'a', 'e', 'i', 'o', or 'u';

function isVowel($ltr) {
  if (!is_string($ltr) || strlen($ltr) !== 1) {
    return false;
  }

  $ltr = strtolower($ltr);
  if ($ltr === 'a' || $ltr === 'e' || $ltr === 'i' || $ltr === 'o' || $ltr === 'u') {
    return true;
  } else {
    return false;
  }
}

  $trueOrFalseVowel = isVowel('i');
  echo $trueOrFalseVowel.PHP_EOL;


// Write a function called "first" that takes in an argument that could be an array or a string. Return the first character if the argument is a string. Return the first element of the array if the input is an array.

function first($var) {
  if (is_string($var)) {
    $firstChar = substr($var, 0, 1);
  } else if (is_array($var)) {
    $firstChar = $var[0];
  } else {
    echo "Enter an array or a string.\n";
  }
  return $firstChar;
}
$returnString = first(['Tony', 'Carmela', 'AJ', 'Meadow']);
$returnString = first("Tony, Carmela, AJ, Meadow");
echo $returnString.PHP_EOL;


//Write a function called "second" that takes in input that could be an array or a string. The function should return the second character or element of the input.

function second($any) {
  if (is_string($any)) {
    $secondChar = substr($any, 1, 1);
  } else if (is_array($any)) {
    $secondChar = $any[1];
  }
  return $secondChar;
}
$secondChar = second(['Joey', 'Johnny', 'DeeDee', 'Tommy']);
// $secondChar = second("Joey, Johnny, DeeDee, Tommy");
echo $secondChar.PHP_EOL;


//Write a function called "last" that takes in an input that could be an array or a string. Your function should return the last character or element of the input.

function last($last) {
  if (is_array($last)){
    $lastChar = end($last);
  } else if (is_string($last)) {
    $lastChar = substr($last, -1);
  }
  return $lastChar;
}
$lastChar = last(["Monster Trucks", "NASCAR", "Alan Jackson"]);
// $lastChar = last("Monster Trucks, NASCAR, Alan Jackson);
echo $lastChar.PHP_EOL;


//Write a function called "reverse" that takes in an input of either a string or an array. Your function should return the elements or characters in reverse order.

function reverse($var) {
  if (is_array($var)) {
    $reverseIt = array_reverse($var);
  } else if (is_string($var)) {
    $reverseIt = strrev($var);
  }
  return $reverseIt;
}
// $reversed = reverse(["Chocolate", "Vanilla", "Strawberry"]);
$reversed = reverse("Chocolate, Vanilla, Strawberry");
print_r($reversed).PHP_EOL;

//Write a function called "random" that takes in an input that can be either a string or an array. Your function should return a random element or character from the input.

function random($whatever) {
  if (is_array($whatever)) {
    $maxIndex = (count($whatever) - 1);
    $random = mt_rand(0, $maxIndex);
    $randomReturn = $whatever[$random];
  } else if (is_string($whatever)) {
    $maxChar = strlen($whatever);
    $random = mt_rand(1, $maxChar);
    $randomReturn = substr($whatever,$random,1);
  }
  return $randomReturn;
}
$randomThing = random(["Bigfoot", "Gravedigger", "Stomper Bully"]);
// $randomThing = random("Bigfoot, Gravedigger, Stomper Bully");
echo $randomThing.PHP_EOL;
