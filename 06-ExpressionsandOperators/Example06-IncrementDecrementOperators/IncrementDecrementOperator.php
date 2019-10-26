<?php
/**
 * INCREMENT OPERATOR
 * ++ INCREASES COUNT BY 1
 *
 * DECREMENT OPERATOR
 * -- DECREASES COUNT BY 1
 *
 * NOTE === THERE IS DIFFERENCE WHEN USE BEFORE OR AFTER VARIABLES
 */
var_dump("Writing After Variable [POST], check for Result variable");
$a=1;
$result = $a++;
var_dump("A is ".$a);
var_dump("Result is ".$result);
var_dump("Writing Before Variable [PRE] , check for Result variable");
$a=1;
$result = ++$a;
var_dump("A is ".$a);
var_dump("Result is ".$result);

echo PHP_EOL;
$counter = 10;
echo --$counter.PHP_EOL;
echo $counter.PHP_EOL;

$counter = 10;
echo $counter--.PHP_EOL;
ECHO $counter.PHP_EOL;
