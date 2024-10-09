<?php

function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }
    
    return true; 
}


echo "Enter a number: ";
$input = trim(fgets(STDIN)); 


if (is_numeric($input)) {
    $number = (int)$input; 
    if (isPrime($number)) {
        echo "$number is a prime number.";
    } else {
        echo "$number is not a prime number.";
    }
} else {
    echo "Please enter a valid number.";
}
?>