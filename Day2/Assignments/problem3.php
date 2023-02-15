<?php 
// find all the index of the target number, (4) and return a list/array/vector
function findAllIndexesOf4($number) {
$array = [0,1,4,3,3,3,4];
$length = count($array);
$targetIndexes = [];
    for($i=0; $i<$length; $i++) {
        if($array[$i] == $number) {
            array_push($targetIndexes,$i);
        } 
    }
echo join(',',$targetIndexes);
}
findAllIndexesOf4(4);