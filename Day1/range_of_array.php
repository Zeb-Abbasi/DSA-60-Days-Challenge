<?php
$array = array(2, 4, 6, 8, 10);
$min = 5;
$max = 12;

foreach($array as $value){
    if($value >= $min && $value <= $max){
        echo $value.'<br>'; 
    }
}

?>