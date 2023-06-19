<?php

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
?>