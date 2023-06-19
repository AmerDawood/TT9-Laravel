<?php

/*
Write a PHP program to check the largest number among three given numbers.
*/

function largestNumber($num1 , $num2 ,$num3){
    
    $largest = $num1;



    if($num2 > $largest){
        $largest = $num2;
    }



    if($num3 > $largest){
       $largest =$num3;
    }


    return $largest;

}

$num1 = 10;
$num2 = 7;
$num3  = 13;



var_dump(largestNumber($num1 , $num2 ,$num3))






?>