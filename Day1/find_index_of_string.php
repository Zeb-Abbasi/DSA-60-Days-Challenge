<?php

// Find Index for multiple character

function findIndexChar($char) {
    $string = 'Hello';
    $length = strlen($string);
    $characters = [];
    for($i=0; $i<$length; $i++) {
        if($string[$i] == $char) {
            array_push($characters, $i);
        }
    }
    echo implode(", ", array_values($characters));
}

findIndexChar('l'); 