<?php
$num1 = 15;
$num2 = 42;
$num3 = 27;

// Finding the greatest number
if ($num1 >= $num2 && $num1 >= $num3) {
    $greatest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $greatest = $num2;
} else {
    $greatest = $num3;
}

// Finding the smallest number
if ($num1 <= $num2 && $num1 <= $num3) {
    $smallest = $num1;
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    $smallest = $num2;
} else {
    $smallest = $num3;
}

echo "Numbers: $num1, $num2, $num3 <br>";
echo "Greatest: $greatest <br>";
echo "Smallest: $smallest";
?>