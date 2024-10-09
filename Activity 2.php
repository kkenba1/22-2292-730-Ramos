<?php
$correct_password = "password123";
$input_password = "";

do {
    echo "Please enter password: ";
    $input_password = trim(fgets(STDIN)); 
    
} while ($input_password !== $correct_password);

echo "Access Granted.";

?>