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



// ksort($companies);
// foreach($companies as $company => $person) {
//   asort($person);
//   $companies[$company] = $person;
// }
//
// asort($companies);
// print_r($companies);
ksort($companies);
foreach($companies as $company => $person) {
  foreach($person as $index => $name) {
    $name = explode(" ", $name);
    $name = array_reverse($name);
    asort($person);
    $name = implode(" ", $name);
    $person[$index] = $name;
  }
  foreach($person as $index => $name) {
    $name = explode(" ", $name);
    $name = array_reverse($name);
    $name = implode(" ", $name);
    $person[$index] = $name;
  }

  $companies[$company] = $person;
}
// asort($companies);
print_r($companies);
