<?php
echo "<b>Odd numbers from 2 to 20:</b><br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}

echo "<br><br><b>Even numbers from 35 to 7 (descending):</b><br>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}
?>