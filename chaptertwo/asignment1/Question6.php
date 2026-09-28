<?php
$num1 = 8;
$num2 = 12;

// LCM is at least the larger of the two numbers
$lcm = ($num1 > $num2) ? $num1 : $num2;

while (true) {
    if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
        break;
    }
    $lcm++;
}

echo "LCM of $num1 and $num2 = $lcm";
?>