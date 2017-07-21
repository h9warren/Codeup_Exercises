<?php


 date_default_timezone_set('America/Chicago');
 $dayOfWeek = date('N') - 1;

 $days = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

 switch($dayOfWeek) {
     case $dayOfWeek:
      fwrite(STDOUT, $days[$dayOfWeek] .PHP_EOL);
      break;
    default:
      fwrite(STDOUT, "I have no idea what day it is.");
      break;
    }

   if ($dayOfWeek) {
     echo $days[$dayOfWeek] .PHP_EOL;
   } else {
     fwrite(STDOUT, "I have no idea what day it is.");
   }

   switch($dayOfWeek) {
       case 1:
        fwrite(STDOUT, $days[$dayOfWeek] .PHP_EOL);
        break;
       case 2:
        fwrite(STDOUT, $days[$dayOfWeek] .PHP_EOL);
        break;
       case 3:
        fwrite(STDOUT, $days[$dayOfWeek] .PHP_EOL);
        break;
       case 4:
        fwrite(STDOUT, $days[$dayOfWeek] .PHP_EOL);
        break;
       case 5:
        fwrite(STDOUT, $days[$dayOfWeek] .PHP_EOL);
        break;
       case 6:
        fwrite(STDOUT, $days[$dayOfWeek] .PHP_EOL);
        break;
       case 7:
        fwrite(STDOUT, $days[$dayOfWeek] .PHP_EOL);
        break;
   }

   if ($dayOfWeek + 1  == 1) {
     echo "It's Monday!" .PHP_EOL;
   } else if ($dayOfWeek + 1  == 2) {
     echo "It's Tuesday!" .PHP_EOL;
   } else if ($dayOfWeek + 1  == 3) {
     echo "It's Wednesday!" .PHP_EOL;
   } else if ($dayOfWeek + 1  == 4) {
     echo "It's Thursday!" .PHP_EOL;
   } else if ($dayOfWeek + 1  == 5) {
     echo "It's Friday!" .PHP_EOL;
   } else if ($dayOfWeek + 1  == 6) {
     echo "It's Saturday!" .PHP_EOL;
   } else  if ($dayOfWeek + 1  == 6) {
     echo "It's Sunday!" .PHP_EOL;
   } else {
     fwrite(STDOUT, "I have no idea what day it is.");
   }
