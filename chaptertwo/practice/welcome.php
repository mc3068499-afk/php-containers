<?php
$name = "Abdi Omar";
$age = 20;

$output = "My name is $name, I am $age years old";

echo $output;

echo "<br>";

echo "Good " . "Morning " . $name;

$message = "Good Morning";

echo "<br>";
echo "The Length of this String \"$message\" is " . strlen($message);

$message = "The Quick Brown Fox Jumps over the Lazy Dog";
echo "<br>";
echo "Total Words \"$message\" = " . str_word_count($message);
echo "<br>";
echo "The position [7] is " . $message[7];
echo "<br>";
echo "Search Word \"fox\" " . strpos($message, "word");
echo "<br>";
// echo strpos($message, "word");

echo "Replace Dog to Cat: " . str_replace("Dog", "Cat", $message);


define("PI", 3.14);
$radius = 6;
echo "<br>";
$area = PI * $radius * $radius;

echo "The Area of Circle: ", $area;


$age = 14;
echo "<br>";
($age > 18) ? print "Adult" : print "Child";
echo "<br>";
echo ($age > 18) ? "Adult" : "Child";


$x = 5;
$y = 4;
echo "<br>";
// echo $x++;
echo ++$x;


echo "<br>";
echo $x > $y ? "$x is greater $y" : "$x is less than $y";

echo "<br>";
echo "The result is ", 1 + 5 * 3 - (6/2) > 10 && 5 < 3 || !(6 < 8);





echo false;







?> 
</body>
</html>


