<?php 
//varaibles

$universityName = "Jamhuriya University of Science & Technology";

$aboutTitle = "About Information";
$aboutContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

$contactTitle = "Contact Information";
$email = "info@just.edu.so";
$phone = "+252 613 222009";
$address = "Digfer Street, Hodan District";
$websiteUrl = "https://just.edu.so";

echo "<h1 style='color: #2f3840; font-family: Arial, sans-serif;'>$universityName</h1>";
echo "<h2 style='color: green; font-family: Arial, sans-serif;'>$aboutTitle</h2>";

echo "<p style='color: #333333; font-family: Arial, sans-serif; max-width: 600px;'>$aboutContent</p>";

echo "<h2 style='color: #44f950; font-family: Arial, sans-serif;'>$contactTitle</h2>";

echo "Email: $email<br>";
echo "Phone: $phone<br>";
echo "Address: $address<br>";
echo "Website: <a href='$websiteUrl'>Visit Website</a>";






?>