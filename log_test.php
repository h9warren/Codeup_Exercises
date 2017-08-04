<?php

  require_once 'Log.php';

  $newLog = new Log();
  $newLog->info("This is an info message.");
  $newLog->error("This is an error message.");
  $newLog->logMessage("CATASTROPHE.", "I GET NONE OF THIS.");

?>
