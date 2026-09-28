<?php
echo "<b>Numbers divisible by both 2 and 5 (from 50 down to 2):</b><br>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo "$i ";
    }
}
?>