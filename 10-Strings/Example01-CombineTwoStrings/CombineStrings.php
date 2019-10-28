<?php
/*
 *  . is used for combining two strings together
 */
$firstname = "Lakshya";
$lastname = "Shah";
$fullname = $firstname." ".$lastname;
echo $fullname;
echo PHP_EOL;

$Marks = 100;
$passed = true;
$passed = false;
// add string, INteger, boolean and other basic variable types with . operator

$content="Student {$fullname} get Total {$marks}. He is passed - {$passed}";
echo $content;
echo PHP_EOL;