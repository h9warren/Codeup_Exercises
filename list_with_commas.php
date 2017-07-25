<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(", ", $physicistsString);

function humanizedList($array, $sortType=false) {
  if($sortType){
    asort($array);
  }
  $last = " and " . array_pop($array) . ".";
  $humanizedString = implode(", ", $array) . $last;
  return $humanizedString;
}

$list = humanizedList($physicistsArray, true);

echo "\nSome of the most famous fictional theoretical physicists are $list";
