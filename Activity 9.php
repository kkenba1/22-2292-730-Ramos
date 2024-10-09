<?php

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz "; // For multiples of both 3 and 5
    } elseif ($i % 3 == 0) {
        echo "Fizz "; // For multiples of 3
    } elseif ($i % 5 == 0) {
        echo "Buzz "; // For multiples of 5
    } else {
        echo $i . " "; // Print the number
    }
}

?>
