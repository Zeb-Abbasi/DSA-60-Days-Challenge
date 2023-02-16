<?php

// Binary Search


function binarySearch($array, $target)
{
    $left = 0;
    $right = count($array) - 1;
    while ($left <= $right) {
        $mid = ($left + $right) / 2;
        if ($array[$mid] == $target) {
            return $mid;
        } elseif ($array[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return -1;
}
$array = array(2, 4, 6, 8, 10, 12);
binarySearch($array, 4);
