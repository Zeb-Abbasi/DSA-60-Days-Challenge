<?php
function isPalindrome($string,$length) {
    $left = 0;
    $right = $length-1;
    while($left < $right) {
        if($string[$left] != $string[$right]) {
            return false;
        }
        $left++;
        $right--;
    }
    echo 'string is palindrome';
    return true;
    
}
$string = 'talat';
$length = strlen($string);
isPalindrome($string,$length);

// if (true) {
//     echo "String is Palindrome";
// } else {
//     echo "String is Not Palindrome";
// }