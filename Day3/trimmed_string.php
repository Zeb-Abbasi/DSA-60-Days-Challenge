
<!-- ///// TRIMMED SENTENCE IN JS -->
<script>
   let string = '    My name is zeb    ';

let start = 0;
let end = string.length - 1;

while (start < end && /\s/.test(string[start])) {
  start++;
}

while (end > start && /\s/.test(string[end])) {
  end--;
}
console.log('with space:');
console.log(string);
console.log('Trimmed:');
console.log(string.substring(start, end + 1));
</script>


<?php

///// TRIMMED SENTENCE IN PHP
    // $string = ' My name is zeb ';

    // $start = 0;
    // $end =  strlen($string) -1 ;

    // while($start < $end && IntlChar::iswhitespace($start)){
    //     $start++;
    // }
    // while($end > $start && IntlChar::iswhitespace($end)){
    //     $end--;
    // }

    // echo (substr($string,$start, $end - $start + 1));

?>



