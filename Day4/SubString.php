
<!-- Find Substring -->

<?php
$string = "Find the words from string";
$stringToFind = "words";
$count = 0;

for ($i = 0; $i < strlen($string); $i++) {
  if ($string[$i] == $stringToFind[0]) {
    $match = true;
    for ($j = 0; $j < strlen($stringToFind)-1; $j++) {
      if ($string[$i+$j] != $stringToFind[$j]) {
        $match = false;
        break;
      }
    }
    if ($match) {
      $count++;
    }
  }
}

echo "The substring '.$stringToFind.' appears .$count. times in the string '.$string.'.";

?>