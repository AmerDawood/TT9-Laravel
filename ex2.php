<?php

/*
  Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with" function)
 */

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

?>