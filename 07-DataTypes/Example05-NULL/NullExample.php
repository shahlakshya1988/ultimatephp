<?php
/*
  * NULL is case insensitive. null / NULL / Null are same
  * null is used to initialize a variable with empty value
  * unset() and is_null methods
  * Most Common use case is to check if the variable has a value or empty
  */
$someVariable;
@var_dump($someVariable); // without @ this will be error
$someVariable1 = null;
var_dump($someVariable1);
echo PHP_EOL;
echo ($someVariable1) ? "True" : "False";
echo PHP_EOL;

// check if the variable is null or not
$someVariable2 = null;
var_dump(is_null($someVariable2));
$someVariable3 = "0";
var_dump(is_null($someVariable3));
$someVariable4 = 0;
var_dump(is_null($someVariable4));

$name = "Lakshya";
var_dump(is_null($name));
unset($name);
var_dump(is_null($name));
