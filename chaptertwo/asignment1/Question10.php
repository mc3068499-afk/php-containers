<?php
echo "<b>Prime numbers between 10 and 50:</b><br>";

for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break; // Skip rest of iteration
        }
    }

    if ($isPrime) {
        echo "$num ";
    }
}
?>