<?php 

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

?>