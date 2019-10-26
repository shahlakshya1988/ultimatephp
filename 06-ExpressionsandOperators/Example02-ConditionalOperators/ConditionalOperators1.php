<?php
/*
 * (CONDITION) ? TRUE : FALSE
 * THIS IS EXPRESSION
 * VARIABLE = (CONDITION) ? TRUE : FALSE
 */
$result = (isset($name))? $name : "Name is Not Set";
echo $result;
echo PHP_EOL;
$name = "Lakshya";
$result = (isset($name))? $name : "Name is Not Set";
echo $result;
echo PHP_EOL;