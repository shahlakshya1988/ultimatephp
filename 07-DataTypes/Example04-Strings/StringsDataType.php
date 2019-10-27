<?php
/*
 * Strings are defined in Double quotes and Single Quotes
 * Double Quotes string will interpolate variables values and single quote does not
 * No Limited to how much string variable holds but limited with system memory
 * Use escape Character to escape double quotes inside double quotes and other Characters
 * String Methods are available to work with string manipulation
 */
//Define String and Use Strings
$name1 = "John, Smith";
$name2 = "John, Smith";
echo "{$name1} and {$name2}".PHP_EOL;
echo '{$name1} and {$name2}'.PHP_EOL;

// Combine String
$name3 = $name1." ".$name2;
echo $name3.PHP_EOL;
// USE Backslash
$name4="This is a \"Special\" String";
echo $name4.PHP_EOL;
$name5= 'This is a \'Special\' String';
echo $name5.PHP_EOL;
$name6="This demostrated \t\t tab";
echo $name6;
echo PHP_EOL;
$name7="This is new line \n\n and this goes here\r\r this is cariage return";
echo $name7;
echo PHP_EOL;
$name8='This is new line \n\n and this goes here\r\r this is cariage return';
echo $name8;
echo PHP_EOL;
$name9='This demostrated \t\t tab';
echo $name9;
echo PHP_EOL;
$name10="LAKSHYA";
echo strlen($name10);
echo PHP_EOL;
