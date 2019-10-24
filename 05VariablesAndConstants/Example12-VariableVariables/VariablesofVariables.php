<?php 
$male = "John, Smith";
$gender = "male";
var_dump($gender);
var_dump($male);
var_dump($$gender); // $$gender->$male

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
$student = "John, Smith";
$male = "student";
$gender = "male";
var_dump($student);
var_dump($male);
var_dump($gender);
var_dump($$gender); // student
var_dump($$$gender); // John, Smith
