<?php

  class Log {

    public $filename;
    //take in a log level and message
    public function logMessage($level, $message) {
      // open $filename to append
      $date = date('Y-m-d');
      $time = date('h:i:s');
      $this ->filename = "log-".$date.".log";
      $handle = fopen($this->filename, 'a+');
      $messageToWrite = "$date $time $level $message" .PHP_EOL .PHP_EOL;

      // output message in format
      fwrite($handle, $messageToWrite);
      // close handle
      fclose($handle);
    }
    // take in log message
    public function info($message) {
      // pass it to logMessage()
      $this->logMessage("INFO", $message);
    }
    // take in error message
    public function error($message) {
      // pass it to logMessage()
      $this->logMessage("INFO", $message);
    }
  }

?>
