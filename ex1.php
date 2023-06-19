<?php 
  

  /*

  Write a PHP program to check whether the first two characters and last two characters of a give string are same.

  */

function check($text){
    
    $length = strlen($text);


    if($length <0){
       return false;
    }


    $first = substr($text, 0 , 2);
    $last = substr($text,-2);


    return $first === $last;

}



$string1 = "hellhe";

$string2 = "Amer";




var_dump(check($string1));
var_dump(check($string2));







?>