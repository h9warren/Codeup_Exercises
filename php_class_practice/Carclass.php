<?php

class Car {

  public $make;
  public $model;
  public $color;
  public $miles;

  public function turnOn(){
    echo "Turning on.".PHP_EOL;
  }
  public function turnOff() {
    echo "Turning off.".PHP_EOL;
  }
  public function brake() {
    echo "Braking!".PHP_EOL;
  }
  public function honk(){
    echo "Honk honk honk".PHP_EOL;
  }
  public function accelerate(){
    echo "Accelerating.".PHP_EOL;
  }
  public function driveToDestination(){
    echo "This " . $this->make . " is a " . $this->model . ". It's " . $this->color[0] . " and ". $this->color[1] . " with " . $this->miles . " miles." .PHP_EOL;
    $this->turnOn();
    $this->accelerate();
    $this->accelerate();
    $this->honk();
    $this->accelerate();
    $this->brake();
    $this->turnOff();
  }


}
