<?php
// 1) Declare and initialize the array
$numbers = array(5, 7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// 2) Print all elements of the array
echo "Array elements are: <br>";
foreach ($numbers as $num) {
    echo "$num, ";
}
echo "<br><br>";

// Variables for calculations
$totalAll = 0;
$totalEven = 0;
$totalOdd = 0;

$minVal = min($numbers);
$maxVal = max($numbers);

$minPositions = array();
$maxPositions = array();

// 3, 4, 5, 6, 7) Process array elements
for ($i = 0; $i < count($numbers); $i++) {
    $val = $numbers[$i];
    
    // Total of all elements
    $totalAll += $val;
    
    // Total of even/odd elements
    if ($val % 2 == 0) {
        $totalEven += $val;
    } else {
        $totalOdd += $val;
    }
    
    // Min positions
    if ($val == $minVal) {
        $minPositions[] = $i;
    }
    
    // Max positions
    if ($val == $maxVal) {
        $maxPositions[] = $i;
    }
}

// Display results
echo "Total of all elements = $totalAll <br>";
echo "Total of even elements = $totalEven <br>";
echo "Total of odd elements = $totalOdd <br><br>";

echo "Minimum element is: $minVal in position(s): " . implode(", ", $minPositions) . "<br>";
echo "Maximum element is: $maxVal in position(s): " . implode(", ", $maxPositions) . "<br>";
echo "br"
?>

<!-- ========================================== -->
 <!-- Quetion two -->

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
?>






<?php
// Declare 2D associative array
$students = array(
    "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"),
    "CA223" => array("Name" => "Ahmed Abdi Jama",   "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA224" => array("Name" => "Amina Nur Adan",    "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley")
);

// Print HTML table
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>ID / Code</th><th>Name</th><th>Phone</th><th>Address</th></tr>";

foreach ($students as $id => $info) {
    echo "<tr>";
    echo "<td><strong>$id</strong></td>";
    echo "<td>" . $info["Name"] . "</td>";
    echo "<td>" . $info["Phone"] . "</td>";
    echo "<td>" . $info["Address"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>





<!-- Quetion four -->
 <!-- ================================= -->
<?php
// Declare 2D associative array
$students = array(
    "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"),
    "CA223" => array("Name" => "Ahmed Abdi Jama",   "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA224" => array("Name" => "Amina Nur Adan",    "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley")
);

// Print HTML table
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>ID / Code</th><th>Name</th><th>Phone</th><th>Address</th></tr>";

foreach ($students as $id => $info) {
    echo "<tr>";
    echo "<td><strong>$id</strong></td>";
    echo "<td>" . $info["Name"] . "</td>";
    echo "<td>" . $info["Phone"] . "</td>";
    echo "<td>" . $info["Address"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>







<!-- Quetion 5 -->
 <!-- ========================================== -->

<?php
// Multidimensional array for Transcript
$transcript = array(
    "Semester 1" => array(
        "subject1" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
        "subject2" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
        "subject3" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
    ),
    "Semester 2" => array(
        "subject1" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 0),
        "subject2" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
        "subject3" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
    )
);

// Display transcript table
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Semester</th>
        <th>Course</th>
        <th>CW1</th>
        <th>MidTerm</th>
        <th>CW2</th>
        <th>Final</th>
        <th>Total</th>
        <th>Status</th>
      </tr>";

foreach ($transcript as $semName => $subjects) {
    $firstRow = true;
    $rowCount = count($subjects);
    
    foreach ($subjects as $courseName => $scores) {
        $total = $scores["CW1"] + $scores["MidTerm"] + $scores["CW2"] + $scores["Final"];
        $status = ($total >= 50) ? "Pass" : "Fail";
        
        echo "<tr>";
        
        // Group semester cell using rowspan
        if ($firstRow) {
            echo "<td rowspan='$rowCount'><strong>$semName</strong></td>";
            $firstRow = false;
        }
        
        echo "<td>$courseName</td>";
        echo "<td>" . $scores["CW1"] . "</td>";
        echo "<td>" . $scores["MidTerm"] . "</td>";
        echo "<td>" . $scores["CW2"] . "</td>";
        echo "<td>" . $scores["Final"] . "</td>";
        echo "<td>$total</td>";
        echo "<td>$status</td>";
        echo "</tr>";
    }
}

echo "</table>";
?>





