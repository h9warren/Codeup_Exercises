<?php

require 'CanOfSoda.php';

  $bigRed = new CanOfSoda ();

  $bigRed->brandName='Big Red';
  $bigRed->expirationDate="01.01.2020";


  echo $bigRed->openSoda();
  echo $bigRed->pourOut();


 ?>
