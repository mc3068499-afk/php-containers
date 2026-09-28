<?php
$num1 = 18;
$num2 = 24;

$a = $num1;
$b = $num2;

// Euclidean algorithm using a while loop
while ($b != 0) {
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
}

$hcf = $a;
echo "HCF of $num1 and $num2 = $hcf";
?>