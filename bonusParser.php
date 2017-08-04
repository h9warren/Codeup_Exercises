<?php

$statesString =
"Alabama
Alaska
Arizona
Arkansas
California
Colorado
Connecticut
Delaware
Florida
Georgia
Hawaii
Idaho
Illinois
Indiana
Iowa
Kansas
Kentucky
Louisiana
Maine
Maryland
Massachusetts
Michigan
Minnesota
Mississippi
Missouri
Montana
Nebraska
Nevada
New Hampshire
New Jersey
New Mexico
New York
North Carolina
North Dakota
Ohio
Oklahoma
Oregon
Pennsylvania
Rhode Island
South Carolina
South Dakota
Tennessee
Texas
Utah
Vermont
Virginia
Washington
West Virginia
Wisconsin
Wyoming";
$stString =
"AL
AK
AZ
AR
CA
CO
CT
DE
FL
GA
HI
ID
IL
IN
IA
KS
KY
LA
ME
MD
MA
MI
MN
MS
MO
MT
NE
NV
NH
NJ
NM
NY
NC
ND
OH
OK
OR
PA
RI
SC
SD
TN
TX
UT
VT
VA
WA
WV
WI
WY";
$stArray = explode("\n", $stString);
$statesArray = explode("\n", $statesString);
$abbrevs = [];

foreach($statesArray as $key => $value) {
  $abbrevs[$stArray[$key]] = $value;
}

function fileReader($file) {
  $bonusFile = $file;
  $pointer = fopen($bonusFile, 'r');
  $bonusContent = trim(fread($pointer, filesize($bonusFile)));
  return $bonusContent;
}
$output = fileReader("bonus.txt");

function bonusParse($output, $abbrevs) {
  $newArray = [];
  $newStateArray = [];
  $infoArray = explode("\n", $output);
  foreach($infoArray as $key => $value) {
    $value = explode("/", $value);
    $infoArray[$key] = $value;

    if ($value[3] == 'true') {
      $value[0] = strtoupper($value[0]);
    } else {
      $value[0] = strtolower($value[0]);
    }

    $stateLongNames = explode(",",$value[2]);
    foreach($stateLongNames as $initial => $full){
      array_push($newStateArray, $abbrevs[$stateLongNames[$initial]]);
    }
    $stateString = implode(", ", $newStateArray);
    $newArray[$key] = [
      "name" => $value[0],
      "number" => $value[1],
      "states" => $stateString
    ];




    }

    return $newArray;
  }



$newInfo = bonusParse($output, $abbrevs);
print_r($newInfo);
