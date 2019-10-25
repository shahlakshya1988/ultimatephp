<?php
// DEFINE CONSTANT
define("MYNAME","Lakshya Shah");
var_dump(MYNAME);

// DO NOT REDEFINE
//define("MYNAME","Lakshya Shah");

// Donot use variable and and constant name as same
$name = "John, Smith";
define("NAME","Joe");
echo $name." ".NAME;
echo "<br>";

// DON'T WRITE CONSTANT IN STRING, BREAK THE STRING USE ..
echo "My name is ".MYNAME."<br>";
echo __LINE__."<br>";
echo __FILE__."<br>";
echo __DIR__."<br>";
echo DIRECTORY_SEPARATOR."<br>";

