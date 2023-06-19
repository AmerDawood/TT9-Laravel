<?php

 function sumOfDigits($number) {


    $sum = 0;



    // if the number is string , here convert to int
     $numberStr = (string) $number;

    for ($i = 0; $i < strlen($numberStr); $i++) {
        $sum += (int) $numberStr[$i];
    }

    return $sum;
}

$number = 12345;

$count = sumOfDigits($number);


echo "$count";


?>