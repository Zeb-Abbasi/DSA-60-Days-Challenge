<?php
function binarySearch($array,$targetNumber,$length) {
    $left = 0;
    $right = $length-1;
    while($left<=$right) {
        $mid = (($left + $right)/2);
        if($array[$mid] == $targetNumber) {
            return $mid;
        } else if ($array[$mid] < $targetNumber) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return -1; // Target not found in array
}

$array = [1,2,3,4,5,6,7,8,9];
$length = count($array);
$index = binarySearch($array,8,$length);

if ($index == -1) {
    echo "Target not found in array";
} else {
    echo "Target found at index " . $index;
}