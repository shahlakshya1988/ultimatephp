<?php
/*
 *  = Assignment Operator used to assign values
 * ==== SHORT HAND OPERATORS ===
 *  += Add assignment Operator
 *  -= Substract Assignment Operator
 *  *= Multiple Assigment Operator
 *  /= Divide Assignment Operator
 *  %= Modulus Assigment Operator
 *  .= append Assignment Operator
 */

// assign value 10 to variable
$marks = 10; // marks will hold 10
var_dump($marks);

$marks = 20; // now marks will hold 20 after this
var_dump($marks);

// assign nay name
$name="Lakshya";
$name.=" Shah"; // Lakshya Shah
var_dump($name);

// user += operator
$counter = 1;
$counter += $counter;
var_dump($counter);
$counter++;
var_dump($counter);
$a = 1;
var_dump($a++);
$b = 1;
var_dump(++$b);
