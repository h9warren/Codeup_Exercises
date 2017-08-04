<?php

function parseContacts($filename)
{
    $results = array();
    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contacts = explode("\n", $contents);
    foreach($contacts as $index => $card) {
      $card = explode("|", $card);
      $phoneNumber = substr($card[1], 0, 3);
      $phoneNumber .= "-";
      $phoneNumber .= substr($card[1], 3, 3);
      $phoneNumber .= "-";
      $phoneNumber .= substr($card[1], 6);

      $assocArray["name"] = $card[0];
      $assocArray["number"] = $phoneNumber;
      array_push($results, $assocArray);
    }

    // todo - read file and parse contacts
    return $results;
  }
  var_dump(parseContacts('contacts.txt'));
