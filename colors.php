<?php

$x = 86;
$y = 53;

echo "The sum of " . $x . " and " . $y . " is ";
echo $x + $y . ".";

echo "<br><br>";
echo ucwords("the first letter in each word is uppercase!");

echo "<br>";
$str = "My favorite color is yellow.";
print_r (explode(" ",$str));

echo "<br>";
$arr = array('My','favorite','color','is','yellow.');
echo implode(" ",$arr);

echo "<br><br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:a");

echo "<br>";
$hour = date(h);
echo "The hour is " . $hour;

echo "<br>";
if ($hour % 2 == 0){
	echo "The hour is even.";
} else{
	echo "The hour is odd.";
}



?>