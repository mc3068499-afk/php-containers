<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<table border="1" cellpadding="5" cellspacing="0" style="text-align: center; border-collapse: collapse;">
    <tr>
        <th colspan="12">Multiplication Table</th>
    </tr>
    <?php
    for ($i = 1; $i <= 12; $i++) { // Row loop
        echo "<tr>";
        for ($j = 1; $j <= 12; $j++) { // Column loop
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>