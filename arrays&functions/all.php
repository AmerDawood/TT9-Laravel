


<!DOCTYPE html>
<html>
<head>
    <title>PHP/LARAVEL</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Amer Dawood</h1> 
            <h3><a href="../basics/first_ex.php">1</a></h3>
            <h3><a href="../arrays&functions/all.php">2</a></h3>
            <h3><a href="">3</a></h3>

        </div>
    </header>

    <div class="blue-div">
        <p>Welcome To My Homework Website</p>
    </div>




    <h1 style="padding-left: 100px;padding-top:50px">#1</h1>

     


<p style="padding-left: 120px;"> <?php

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



echo "<br>"; 


var_dump($array) 
?>
</p>











    <h1 style="padding-left: 100px;padding-top:50px">#2</h1>






<p style="padding-left: 120px;"> <?php 


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
$array = array('test', 'test1', 'test2', 'testtest', 'amer');
$longestIndex = -1;


$longestString = findLongestString($array, $longestIndex);
echo "Longest string: " . $longestString . "<br>";

?></p>









<h1 style="padding-left: 100px;padding-top:50px">#3</h1>

 

 <p style="padding-left: 120px;"><?php 
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


 
 
 
 
 print_r($result);
 
 
 ?>
 
</p>











<h1 style="padding-left: 100px;padding-top:50px">#4</h1>







<p style="padding-left: 120px;"><?php 

function factorial($n) {
  if ($n == 0) { 
      return 1;
  } else {
      return $n * factorial($n - 1); 
  }
}

// Test the function
$number = 5;
$result = factorial($number);


echo "The factorial of $number is $result";


?>


</p>











<h1 style="padding-left: 100px;padding-top:50px">#5</h1>







<p style="padding-left: 120px;"><?php  


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

if (isPrime($number)) {
  echo "$number is a prime number.";
  } else {
  echo "$number is not a prime number.";
  }

?></p>




</body>
</html>














