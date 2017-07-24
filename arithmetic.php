<?php

$a = 17;
$b = 4;

function add($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  }
}

function subtract($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a - $b;
  }
}

function multiply($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a * $b;
  }
}

function divide($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    if ($b > 0) {
      return $a / $b;
    }
  }
}


function modulus($a, $b)
{
  if ((is_numeric($a) && is_numeric($b)) &&
    ($b != 0)) {
      return $a % $b;
  }
}


// Add code to test your functions here
$sum = add(5, 6);
echo $sum .PHP_EOL;

$diff = subtract(8.5, 6.25);
echo $diff .PHP_EOL;

$mult = multiply(3, 6);
echo $mult .PHP_EOL;

$quo = divide(81, 9);
echo $quo .PHP_EOL;

$mod = modulus(31, 2);
echo $mod .PHP_EOL;
