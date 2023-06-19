<?php

function removeOddNumber($array){
    

    $result = array();

    foreach($array as $number){
        if($number % 2 == 0){
            $result[] = $number;
        }
    }


    return $result;
}



$numbers = array(1,2,3,4,5,6);



$array = removeOddNumber($numbers);



var_dump($array);


?>