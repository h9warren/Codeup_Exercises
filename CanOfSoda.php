<?php

class CanOfSoda {

  public $brandName;
  public $isFull=true;
  public $isOpen=false;
  public $expirationDate;

  public function openSoda() {
    if (!$this->isOpen = true) {
      $this->isOpen = true;
      return $this->brandName . " is open!".PHP_EOL;
    } else {
      return $this->brandName . " is already open!".PHP_EOL;
    }
  }


  public function pourOut() {
    if ($this->isFull = true) {
      $this->isFull = false;
      return $this->brandName . " is empty!".PHP_EOL;
    } else {
      return $this->brandName . " is already empty!".PHP_EOL;
    }
  }
}
?>
