<?php
function factorial($number) {
    $result = 1; 


    for ($i = $number; $i > 1; $i--) {
        $result *= $i; 
    }

    return $result; 
}

$number = 5;
$factorialResult = factorial($number); 

echo "Factorial of $number is: $factorialResult";
?>