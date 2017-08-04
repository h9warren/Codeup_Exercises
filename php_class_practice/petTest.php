<?php

  require 'Petclass.php';

  $haley = new Pet();
  $haley->species = 'dog';
  $haley->weight = 80;
  $haley->color = ['brown', 'white'];
  $haley->name = 'Haley';
  $haley->energy = 0;
  $haley->hungry = 0;
  $haley->sleep = 0;

  $haley->eat('bacon');
  $haley->eat('cat shit');
  $haley->eat('grapes');
  $haley->eat('dog food');

  $haley->sleep();
  $haley->sleep();
  $haley->sleep();
  $haley->sleep();

  $haley->move('the park');
  $haley->move('the kitchen');
  $haley->move('the front door');

  $haley->eat('beef jerky');
  $haley->eat('beef jerky');

  $haley->sleep();


  var_dump($haley);

?>
