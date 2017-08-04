<?php

class CanOfSoda {

  public $brandName;
  public $isFull;
  public $isOpen;
  public $expirationDate;

  public function openSoda() {
    return $this->brandName . " is open!".PHP_EOL;
    $this->isOpen=true;
  }
  public function pourOut() {
    return $this->brandName . " is empty!".PHP_EOL;
    $this->isFull = false;
  }

}

?>
