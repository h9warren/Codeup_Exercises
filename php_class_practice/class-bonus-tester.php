<?php

  require 'Petclass.php';
  require 'Carclass.php';
  require 'Restaurantclass.php';

  // $haley = new Pet();
  // $haley->species = 'dog';
  // $haley->weight = 80;
  // $haley->color = ['brown', 'white'];
  // $haley->name = 'Haley';
  // $haley->energy = 0;
  // $haley->hungry = 0;
  // $haley->sleep = 0;
  //
  // $haley->eat('bacon');
  // $haley->eat('cat shit');
  // $haley->eat('grapes');
  // $haley->eat('dog food');
  //
  // $haley->sleep();
  // $haley->sleep();
  // $haley->sleep();
  // $haley->sleep();
  //
  // $haley->move('the park');
  // $haley->move('the kitchen');
  // $haley->move('the front door');
  //
  // $haley->eat('beef jerky');
  // $haley->eat('beef jerky');
  //
  // $haley->sleep();
  //
  // $lucky = new Pet ();
  // $lucky->species = 'rabbit';
  // $lucky->weight = 8;
  // $lucky->color = ['brown','gray'];
  // $lucky->name = 'Lucky';
  // $lucky->hungry = 1;
  // $lucky->sleep = 1;
  //
  // $lucky->eat('alfalfa');
  // $lucky->move('backyard');
  // $lucky->sleep();

  // $oldblue = new Car ();
  // $oldblue->make= 'Chevrolet';
  // $oldblue->model= 'Pickup';
  // $oldblue->color= ['Blue','Silver'];
  // $oldblue->miles= 72000;
  // $oldblue->driveToDestination();
  //
  // $theBeast = new Car ();
  // $theBeast->make= 'Honda';
  // $theBeast->model= 'Civic';
  // $theBeast->color= ['Red outside','black inside'];
  // $theBeast->miles= 32100;
  // $theBeast->driveToDestination();
  //
  // $blackBeauty = new Car ();
  // $blackBeauty->make= 'Chrysler';
  // $blackBeauty->model= '300';
  // $blackBeauty->color= ['Black','black inside'];
  // $blackBeauty->miles= 68000;
  // $blackBeauty->driveToDestination();

  $lEtoile = new Restaurant ();
  $lEtoile->name = 'l\'Etoile';
  $lEtoile->cuisine = 'French';
  $lEtoile->location = 'Downtown';
  $lEtoile->numberEmployees = 22;
  $lEtoile->yelpRating = '****';
  $lEtoile->price = '$$$';

  $lEtoile->howItWorks();

  $chrisMadrids = new Restaurant ();
  $chrisMadrids->name = 'Chris Madrids';
  $chrisMadrids->cuisine = 'Burgers';
  $chrisMadrids->location = 'SAC';
  $chrisMadrids->numberEmployees = 14;
  $chrisMadrids->yelpRating = '***';
  $chrisMadrids->price = '$';

  $chrisMadrids->howItWorks();

  $capparellis = new Restaurant ();
  $capparellis->name = 'Capparelli\'s';
  $capparellis->cuisine = 'Italian';
  $capparellis->location = 'NW Side';
  $capparellis->numberEmployees = 8;
  $capparellis->yelpRating = '**';
  $capparellis->price = '$';

  $capparellis->howItWorks();
