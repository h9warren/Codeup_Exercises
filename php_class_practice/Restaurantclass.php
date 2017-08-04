<?php

  class Restaurant {

  public $name;
  public $cuisine;
  public $location;
  public $numberEmployees;
  public $yelpRating;
  public $price;

  public function greetCustomer() {
    echo "Hello, welcome to ".$this->name.". ";
  }
  public function takeOrder(){
    echo "What can I get for you? ";
  }
  public function cookOrder() {
    echo "OK, now I'm making it. ";
  }
  public function serveCustomer() {
    echo "Eat it and enjoy it. ";
  }
  public function profit() {
    echo "All the money, pls/thx.".PHP_EOL;
  }
  public function howItWorks(){
    $this->greetCustomer();
    $this->takeOrder();
    $this->cookOrder();
    $this->serveCustomer();
    $this->profit();
  }

  }
