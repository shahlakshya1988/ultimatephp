<?php
error_reporting(0);
// variables value can change during the program, variables need $ sign
// constants remain as it is, don't need $ sign, can be defined only by define()
// constants have global scope and can be accessed any where
// constats can be accessed by constant method

$name = "John, Smith";
define("NAME","John Doe");
echo $name." ".NAME;
echo "<br>";

// CHANGING THE VALUE
$name = "Changed John, Smith";
define("NAME","Changed John Doe"); // this will give error
echo $name." ".NAME;
echo "<br>";

function print_diff(){
    echo $name." ".NAME;
    echo "<br>";
    echo constant("NAME");
    echo "<br>";
}
print_diff();