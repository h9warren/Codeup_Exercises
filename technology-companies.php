<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];



ksort($companies);
foreach($companies as $key => $company) {
  echo "==============================\n";
  echo "$key:" . PHP_EOL;
  asort($company);
  $companies[$key] = $company;
  echo "\n";
  print_r($companies);
  arsort($companies);


}
// ksort($companies);
// foreach($companies as $company => $people) {
//   echo "==============================\n";
//   echo "$company:" . PHP_EOL;
//   asort($people);
//   foreach($people as $person) {
//     echo "$person, ";
//   }
//     echo "\n";
// }


// ksort($companies);
// foreach($companies as $company => $people) {
//   echo "==============================\n";
//   echo "$company:" . PHP_EOL;
//   foreach($people as $person) {
//     $name = explode(" ", $person);
//     $lastFirst = array_reverse($name, true);
//     print_r($lastFirst);
//     echo asort($lastFirst);
//   }
//   echo "\n";
// }
