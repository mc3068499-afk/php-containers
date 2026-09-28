<?php
$num = 8;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$num is a Prime number";
} else {
    echo "$num is a Non-Prime number";
}
?>