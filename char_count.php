<?PHP

function charCount($string) {
  $charArray = [];
  $stringArray = str_split($string, 1);
  foreach($stringArray as $value) {
    if (ctype_alnum($value) == true) {
      array_push($charArray, $value);
    }
  }
  foreach($charArray as $char) {
    echo "$char ";
  }

}

$output = charCount("Here's a string to test the function 1282389938.");
echo $output . PHP_EOL;
