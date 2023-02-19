<?php
$string1 = "zeb";
$string2 = "zbe";
$count = 0; 
$str_1_len = strlen($string1);
$str_2_len = strlen($string2);

if($str_1_len == $str_2_len){
    for($i=0; $i<$str_1_len; $i++){
        for($j=0; $j<$str_2_len; $j++){
            if($string1[$i] == $string2[$j]){
                $count++;
                break;
            }
        }
    }
    if($count == $str_1_len){
        echo "Strings are anagram";
    }else{
        echo "Strings are not anagram";
    }
}else{
    echo "Strings are not anagram";
}



?>