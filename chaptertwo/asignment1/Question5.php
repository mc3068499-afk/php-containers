<?php
$num = 12345;
$original = $num;
$reversed = 0;

while ($num > 0) {
    $digit = $num % 10;           // Get the last digit
    $reversed = ($reversed * 10) + $digit; // Append digit to reversed number
    $num = (int)($num / 10);     // Remove the last digit
}

echo "Original Number: $original <br>";
echo "Reversed Number: $reversed";
?>