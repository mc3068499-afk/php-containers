<?php
// 1) Declare square array
$matrix = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);

$rows = count($matrix);
$cols = count($matrix[0]);

// 2) Print array elements
echo "Matrix Elements:<br>";
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo $matrix[$i][$j] . " &nbsp;&nbsp; ";
    }
    echo "<br>";
}
echo "<br>";

$totalAll = 0;
$totalOdd = 0;
$totalEven = 0;

$rowTotals = array(0, 0, 0);
$colTotals = array(0, 0, 0);
$diag1Total = 0; // Main diagonal (\)
$diag2Total = 0; // Anti diagonal (/)

$minVal = $matrix[0][0];
$maxVal = $matrix[0][0];

// First pass: find global Min and Max
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $v = $matrix[$i][$j];
        if ($v < $minVal) $minVal = $v;
        if ($v > $maxVal) $maxVal = $v;
    }
}

$minPositions = array();
$maxPositions = array();

// Second pass: perform calculations and collect positions
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $val = $matrix[$i][$j];

        $totalAll += $val;

        if ($val % 2 != 0) {
            $totalOdd += $val;
        } else {
            $totalEven += $val;
        }

        $rowTotals[$i] += $val;
        $colTotals[$j] += $val;

        if ($i == $j) {
            $diag1Total += $val;
        }
        if ($i + $j == $rows - 1) {
            $diag2Total += $val;
        }

        if ($val == $minVal) {
            $minPositions[] = "[$i,$j,]";
        }
        if ($val == $maxVal) {
            $maxPositions[] = "[$i,$j,]";
        }
    }
}

// Output results according to formatting requirements
echo "Total odd elements = $totalOdd <br>";
echo "Total even elements = $totalEven <br>";
echo "Total all elements = $totalAll <br><br>";

for ($i = 0; $i < $rows; $i++) {
    echo "Total Row " . ($i + 1) . " = " . $rowTotals[$i] . "<br>";
}
echo "<br>";

for ($j = 0; $j < $cols; $j++) {
    echo "Total Column " . ($j + 1) . " = " . $colTotals[$j] . "<br>";
}
echo "<br>";

echo "Total Main Diagonal = $diag1Total <br>";
echo "Total Anti Diagonal = $diag2Total <br><br>";

echo "Min element is: $minVal in " . count($minPositions) . " positions:<br>";
echo implode(", ", $minPositions) . ".<br><br>";

echo "Maximum element is: $maxVal in " . count($maxPositions) . " positions:<br>";
echo implode(", ", $maxPositions) . ".<br>";
