<?php

function logMessage($logLevel, $message)
{
  // todo - complete this function
  $date = date('Y-m-d');
  $time = date('h:i:s');
  $logName = "log-".$date.".log";
  $todaysLog = "$logName";
  $pointer = fopen($todaysLog, 'a+');
  $messageToWrite = "$date $time [$logLevel] $message" .PHP_EOL .PHP_EOL;
  fwrite($pointer, $messageToWrite);
  fclose($pointer);
}

function logInfo($message) {
  logMessage("INFO",$message);
}

function logError($message) {
  logMessage("ERROR",$message);
}

logInfo("This is an info message.");
logError("This is an error message.");
