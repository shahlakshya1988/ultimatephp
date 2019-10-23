<?php 
$length = 10; // integer
$breath = 20; // integer
$area = $length * $breath;
echo "Area : {$area}";
echo "<br>";
$length = "10"; // string
$breath = "20"; // string
$area = $length * $breath;
echo "Area : {$area}";
echo "<br>";

$length = "a"; // string
$breath = "20"; // string
$area = $length * $breath; // error
echo "Area : {$area}";
echo "<br>";

$length = "a"; // string
$breath = "b"; // string
$area = $length * $breath; // error
echo "Area : {$area}";
echo "<br>";