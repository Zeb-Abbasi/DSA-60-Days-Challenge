<!-- Prime Numbers snmaller than 50 -->

<?php


function isPrime($num) {
  if($num < 2){
    return false;
  };
  for ($i = 2; $i < $num; $i++) {
      if($num % $i == 0){
        return false;
      }
  }
  return true;
}

for($i = 0; $i <= 50; $i++){
  if(isPrime($i)){
    echo $i .'<br>';
  }
}



?> 