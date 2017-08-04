<?php


class Pet {

  public $species;
  public $weight;
  public $color = array();
  public $name;
  public $energy;
  public $hungry;
  public $sleep;

  public function eat($food) {
    $this->energy++;
    echo "Mmmmmm! Delicious ". $food .".".PHP_EOL;
    $this->sleep--;
  }
  public function move($where) {
    if (($this->energy > 0) || ($this->sleep > 0)) {
      echo "Running to " . $where ."!".PHP_EOL;
      $this->energy-=2;
      $this->sleep--;
    } else {
      echo "I need food or a nap.".PHP_EOL;
    }
  }
  public function sleep() {
    if ($this->sleep > 4) {
      echo "not tired! let's play.".PHP_EOL;
    } else {
      $this->sleep+=2;
      echo "zzzzzzzsleepingzzzzz...".PHP_EOL;
    }
  }

}

?>
