<?php
/*
 * Integers are whole numbers
 * Integer values does not thave decimals.
 * Integers could have + or - values
 * Integer Variable can hold Octal (base 8), Hexadecimal (base 16) and Binary (base 2) values
 * Every platform will have limited integer number to be defined
 * Constant PHP_INT_SIZE can be used to find out the integer limit
 */

echo PHP_INT_SIZE;
echo PHP_EOL;
// Define and Print Integer Variable
$marks = 87;
echo $marks.PHP_EOL;
// HexaDecimal Variable
$marks = 0x19F2D7C1; // 435345345; 19F2D7C1 0x is used to denote hex value
//https://www.rapidtables.com/convert/number/decimal-to-hex.html
echo $marks.PHP_EOL;

// string to interger addition
$marks = 10;
$total = "1000" + $marks;
echo $total.PHP_EOL;

// Negative Numbers
$finalMarks = 5 - 10;
echo $finalMarks.PHP_EOL;

$finalMarks = -5 + 5;
echo $finalMarks.PHP_EOL;

// WINDOWS
echo PHP_INT_SIZE.PHP_EOL;
echo PHP_INT_MAX.PHP_EOL;
echo PHP_INT_MIN.PHP_EOL;