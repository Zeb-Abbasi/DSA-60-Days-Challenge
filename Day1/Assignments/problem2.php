<?php 
// problem: find the first index of number 4 in index range 1 and 3, if it does not exist return -1
// array = {0,1,4,3,3,3,4}
// output should be 2 

function findFirstIndexOfNumber4($array,$first,$last) {
    for($i=$first; $i<=$last; $i++) {
        if($array[$i] == 4) {
            echo $i;
        }
    }
}
$array = [0,1,4,3,3,3,4];
findFirstIndexOfNumber4($array,1,3);