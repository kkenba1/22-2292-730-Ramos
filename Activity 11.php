<?php
$fibonacci = [0, 1];

$i = 2;
while ($i < 10) {
    $nextNumber = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    $fibonacci[] = $nextNumber;
    $i++;
}

foreach ($fibonacci as $number) {
    echo $number . " ";
}
?>