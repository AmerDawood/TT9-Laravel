<?php 

  
function countString ($string){
    $count =0 ;
    $digits = str_split($string);


    foreach($digits as $digit){
        if (ctype_digit($digit)) {
            $count++;
        }
    }

    return $count;

}



$string = "AmerDawood120202121";


$count = countString($string);


echo "The number of string is {$count}";


?>