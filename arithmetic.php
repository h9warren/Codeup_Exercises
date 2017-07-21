<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}
function modulus($a, $b)
{
    return $a % $b;
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
