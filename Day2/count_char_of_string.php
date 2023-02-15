<?php
// Count total Characters of a String
$string = 'Hello World';
$length = strlen($string);
$count = 0;
for($i=0; $i<$length; $i++) {
    if($string[$i] != ' ') {
        $count++;
    } 
}
echo 'Total Characters in String : ' . $count;