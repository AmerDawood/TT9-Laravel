


<!DOCTYPE html>
<html>
<head>
    <title>PHP/LARAVEL</title>
    <style>
         body {
            font-family: Arial, sans-serif;
        }
        .blue-div {
             height: 200px;
            background-color: #00BFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            text-align: center;
            padding: 0;
            margin: 0; 
               
        }

        .header-container {
            display: flex;
            align-items: center;
        }
        .header-container h3 {
            margin-left: 20px;
            font-size: 15px;
           

        }
        .header-container h3 a{
            text-decoration: none;
        }

        .header-container h1 {
            margin-left: 100px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Amer Dawood</h1> 
            <h3><a href="">1</a></h3>
            <h3><a href="">2</a></h3>
            <h3><a href="">3</a></h3>

        </div>
    </header>

    <div class="blue-div">
        <p>Welcome To My Homework Website</p>
    </div>




    <h1 style="padding-left: 100px;padding-top:50px">#1</h1>

     
<?php
//1
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



// var_dump();
echo "<br>"; 
?>


<p style="padding-left: 120px;"> <?php var_dump($array) ?></p>



    <h1 style="padding-left: 100px;padding-top:50px">#2</h1>


<?php 

function findLongestString($array, &$index) {
  $longestString = '';
  $index = -1;
  
  for ($i = 0; $i < count($array); $i++) {
    $currentString = $array[$i];
    
    if (strlen($currentString) > strlen($longestString)) {
      $longestString = $currentString;
      $index = $i;
    }
  }
  
  return $longestString;
}
$array = array('apple', 'banana', 'orange', 'strawberry', 'kiwi');
$longestIndex = -1;


?>




<p style="padding-left: 120px;"> <?php 


$longestString = findLongestString($array, $longestIndex);
echo "Longest string: " . $longestString . "<br>";
echo "Index: " . $longestIndex . "<br>";

?></p>

<h1 style="padding-left: 100px;padding-top:50px">#3</h1>

 <?php 
function multiply($array1  , $array2){
   

  $result = array();



  $count1  = count($array1);
  $count2  = count($array2);

  $size = min($count1 , $count2);

  for($i = 0 ; $i< $size ; $i++){
      $result[] = $array1[$i] * $array2[$i];
  }

  return $result;

}


$array1 = array(1,2,3,5);
$array2 = array(1,2,3);

$result = multiply($array1 , $array2);


   
 ?>

 <p style="padding-left: 120px;"><?php  print_r($result);?></p>






<h1 style="padding-left: 100px;padding-top:50px">#4</h1>



<?php 



function Factorial($number){
  if($number <0){
      return  false;
  }
  $factorial = 1;
  
  for ($i = 2; $i <= $number; $i++) {
    $factorial *= $i;

  }
  
  return $factorial;
}


$number =20;

$result = Factorial($result);


echo "$result";

?>


<p style="padding-left: 120px;"><?php  print_r($result);?></p>



<h1 style="padding-left: 100px;padding-top:50px">#5</h1>





<?php


function isPrime($number) {
  if ($number < 2) {
    return false;
  }
  
  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
      return false;
    }
  }
  
  return true;
}



$number = 17;


?>


<p style="padding-left: 120px;"><?php  

if (isPrime($number)) {
  echo "$number is a prime number.";
  } else {
  echo "$number is not a prime number.";
  }

?></p>




</body>
</html>














