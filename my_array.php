<?php 

//1


function removeOddNumbers($array) {
    $result = array();
    
    foreach ($array as $number) {
      if ($number % 2 == 0) {
        $result[] = $number;
      }
    }
    
    return $result;
  }

  $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$result = removeOddNumbers($array);
print_r($result);


///2



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
  $longestString = findLongestString($array, $longestIndex);
  echo "Longest string: " . $longestString . "<br>";
  echo "Index: " . $longestIndex . "<br>";
  
  



  ///3


  function multiplyArrays($array1, $array2) {
    $result = array();
    
    $count1 = count($array1);
    $count2 = count($array2);
    $length = min($count1, $count2);
    
    for ($i = 0; $i < $length; $i++) {
      $result[] = $array1[$i] * $array2[$i];
    }
    
    return $result;
  }
  $array1 = array(1, 2, 3, 4, 5);
  $array2 = array(2, 4, 6, 8, 10);
  $result = multiplyArrays($array1, $array2);
  print_r($result);

  


  ///4


  function calculateFactorial($number) {
    if ($number < 0) {
      return "Error: Factorial is undefined for negative numbers.";
    }
    
    $factorial = 1;
    
    for ($i = 2; $i <= $number; $i++) {
      $factorial *= $i;
    }
    
    return $factorial;
  }

  

  $number = 5;
$result = calculateFactorial($number);
echo "Factorial of $number is: " . $result;





///5



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





?>