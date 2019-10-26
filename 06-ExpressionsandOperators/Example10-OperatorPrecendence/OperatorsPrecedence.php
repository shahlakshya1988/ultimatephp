<?php
/*
 * Unary => ! ++ --
 * Multiplication =>  * / %
 * Add/Substract => + -
 * Relational => < > <= >=
 * Equality => ==,!=,===,!===
 * Logical AND => &&
 * Logical OR => ||
 * Conditional => ?:
 * Assignment => =,+=,-=,*=,/=,%=
 * LEFT TO RIGHT OPERATIONS
 */
$value = 10;
echo $value++;
echo PHP_EOL;
$counter = $value++;
echo $counter;
echo PHP_EOL;
echo $value;
echo PHP_EOL;

$value = 5*2+5;
echo $value.PHP_EOL;

$value = 5*(2+5); // using brackets we have changed the order
echo $value.PHP_EOL;

$result = true && false; // FIRST && THAN ASSIGNMENT
var_dump($result);
echo PHP_EOL;
$result = true and false; // LOWER PRECEDENCE THAN ==
var_dump($result);
echo PHP_EOL;