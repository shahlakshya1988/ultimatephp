<?php
/**
 * Decimals are real number
 * Decimals have decimal points
 * use rount() method with precision
 */
// Define and Print Decimal Variables
$totalScore = 78.87; // dot defines the decimal, float
echo $totalScore.PHP_EOL;
// Negative decimals
$temperature = -40.23;
echo $temperature.PHP_EOL;

$number1 = 43.40;
echo round($number1).PHP_EOL;
$number2 = 43.52;
echo round($number2).PHP_EOL;

// COMPARE DOUBLE WITH PERCISION 0.1 = 1.87 ~ 1.97
$price = 1.87;
$bid = 1.97;
echo (abs($price - $bid) < 0.1) ? "Accept the Offer" : "Reject Offer";
echo PHP_EOL;
$price = 1.87;
$bid = 1.99;
echo (abs($price - $bid) < 0.1) ? "Accept the Offer" : "Reject Offer";
echo PHP_EOL;
