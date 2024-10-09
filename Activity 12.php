<?php
echo "Enter a string: ";
$inputString = trim(fgets(STDIN));
$reversedString = "";
$length = strlen($inputString);

for ($i = $length - 1; $i >= 0; $i--) {
    $reversedString .= $inputString[$i];
}

echo 'Input: "' . $inputString . '"' . PHP_EOL;
echo 'Output: "' . $reversedString . '"';
?>