<?php
//Good Practise 1: Always use UPPERCASE
define("LANGUAGE","PHP");
define("VERSION","7.3");

//Good Practice 2: Do not use constants like __CONSTANTS__
define("__BADCONSTANT__","Wrong Practice");

// Good Practise 3: Avoid same name as Variable
$name = "John, Smith";
define("NAME","John Smith");

//Good Practice : use same naming convention as of vari
// Do not start with Numbers
$_1message = "Hello";
echo $_1message;
define("_1mymessage","bad Practice");
echo _1mymessage;