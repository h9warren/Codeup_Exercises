<?php

function fileReader($file) {
  $bonusFile = $file;
  $pointer = fopen($bonusFile, 'r');
  $bonusContent = trim(fread($pointer, filesize($bonusFile)));
  return $bonusContent;
}
$output = fileReader("bonus.txt");


function bonusParse($output) {
  $infoArray = explode("\n", $output);
  foreach($infoArray as $key => $value) {
    $value = explode("/", $value);
    $infoArray[$key] = $value;
  }
  return $infoArray;
}
$newInfo = bonusParse($output);
var_dump($newInfo);
