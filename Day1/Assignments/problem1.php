<?php
// find a number between a range in an array:

// problem: find the first index of number 4 in index range 1 and 3, if it does not exist return -1
// array = {0,1,2,3,3,3,4}
// output should be -1 

function findFirstIndexOfNumber4($array,$first,$last) {
    for($i=$first; $i<=$last; $i++) {
    }
    if($array[$i] == 4) {
        echo $i;
    } else {
        echo '-1';
    }
}
$array = [0,1,2,3,3,3,4];
findFirstIndexOfNumber4($array,1,3);




