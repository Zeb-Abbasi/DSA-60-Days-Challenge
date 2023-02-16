<?php
// Count Words of a String
$string = '   Hello World ';
$trimmedString = trim($string,' ');
$length = strlen($trimmedString);
$count = 1;

for($i=0; $i<$length-1; $i++) {
    if($trimmedString[$i] == ' ') {
        $count++;
    } 
}
echo $count;