<?php
/**
 * true or false / TRUE OR FALSE can be used to assign a boolean variable
 * Boolean are literals are case insensitive true or True or TRUE are same
 * true = 1 and false =  when displayed with echo
 * Integer variable with value 0 is false and anything else is true
 * String variable with value "0" is false and anything else is true
 * Booleans is used in condition to check something
 * Operators which results into boolean conditions [ && || ! ]
 */

// Define and Use the Boolean Variable
$flag1 = TRUE;
$flag2 = FALSE;
echo ($flag1);
echo PHP_EOL;
echo ($flag2);
echo PHP_EOL;
var_dump($flag1);
echo PHP_EOL;
var_dump ($flag2);
echo PHP_EOL;
echo ($flag1) ? "True" : "False";
echo PHP_EOL;
echo ($flag2) ? "True":"False";
echo PHP_EOL;


// Use String as Boolean Condition
$isLoggedIn = true;
$userSessionName = "0";
$userSessionName = null;
echo ($isLoggedIn && isset($userSessionName)) ? "User Logged In ": "User Is Not Logged In";
echo PHP_EOL;
echo ($isLoggedIn && $userSessionName) ? "User Logged In ": "User Is Not Logged In";
echo PHP_EOL;

// use Interger as boolean
$marks = 1;
echo ($marks)? "True" : "False";
echo PHP_EOL;

$marks = -1;
echo ($marks)? "True" : "False";
echo PHP_EOL;

$marks = 0;
echo ($marks)? "True" : "False";
echo PHP_EOL;

//OPERATORS RESULTS INTO BOOLEAN CONDITIONS
$name = "John";
echo ($name == "John") ? "Yes John" : "Not John";
