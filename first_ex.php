<?php
// 1

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





//2 


function startsWithGo($string) {

    $goLength = strlen('Go');

    $startOfString = substr($string, 0, $goLength);

    if ($startOfString === 'Go') {
        return true;
    } else {
        return false;
    }
}




$string1 = 'Goosebumps';
$string2 = 'OpenAI';
$string3 = 'Goal';

if (startsWithGo($string1)) {
    echo "$string1 starts with 'Go'.";
} else {
    echo "$string1 does not start with 'Go'.";
}

echo "\n";

if (startsWithGo($string2)) {
    echo "$string2 starts with 'Go'.";
} else {
    echo "$string2 does not start with 'Go'.";
}

echo "\n";

if (startsWithGo($string3)) {
    echo "$string3 starts with 'Go'.";
} else {
    echo "$string3 does not start with 'Go'.";
}





//3




$x = 20;



if($x > 0 && ($x %3 == 0 || $x %7 == 0 )){
   echo "$x is multimply for 3 & 7";
}else{
    echo "$x is not multimply for 3 & 7";

}




//4



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





///5


function nearNumber($num1,$num2){
    if($num1 == $num2){
        return 0;
    }

    $diff1 = abs(100-$num1);
    $diff2 = abs(100-$num2);

    if ($diff1 < $diff2) {
        return $num1;
    } else {
        return $num2;
    }

}



$num1=44;
$num2 = 67;


$nearNum = nearNumber($num1, $num2);



if($nearNum){
    echo "The number near to 100 from $num1 and $num2 is: $nearNum";
}elseif($nearNum ==0){
    echo "The Tow number is equal";
} 



///6

function findLargNumber($num1, $num2) {
    if ($num1 >= 20 && $num1 <= 30 && $num2 >= 20 && $num2 <= 30) {
        return max($num1, $num2);
    } elseif ($num1 >= 20 && $num1 <= 30) {
        return $num1;
    } elseif ($num2 >= 20 && $num2 <= 30) {
        return $num2;
    } else {
        return 0;
    }
}

$num1 = 1;
$num2 = 25;

$larg = findLargNumber($num1,$num2);



if($larg <0){
    echo "the number is not range from 20 - 30";
}else{
    echo "The larger value  id $larg";

}



//7



  
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




//8



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




//9


$string = "testcode";
$length = strlen($string);
for ($i=$length-1 ; $i >= 0 ; $i--)
{
print $string[$i];
}











?>