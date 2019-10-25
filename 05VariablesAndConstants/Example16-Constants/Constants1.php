<?php

// define (NAME OF CONSTANT, VALUE OF CONSTANT)
define("DS",DIRECTORY_SEPARATOR);
define("LANGUAGE","PHP");
$separator = DS;
var_dump($separator);
$lang = LANGUAGE;
var_dump($lang);
// always use constants outside of strings
echo "The Program is written in {$lang}<br>";
echo "The program is written in $lang <br>";
echo "The program is written in LANGUAGE <br>";
echo "The program is written in ".LANGUAGE." <br>";
define("LANGUAGE","ASP"); // THIS WILL GIVE ERROR