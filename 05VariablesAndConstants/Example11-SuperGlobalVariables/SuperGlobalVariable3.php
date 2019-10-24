<?php 
global $name;
$name = "Lakshya Shah";
function print_name(){
    echo PHP_EOL;
    echo $name; // error
    echo PHP_EOL;
}
print_name();

function print_name_global(){
    echo PHP_EOL;
    echo $GLOBALS['name'];
    echo PHP_EOL;
}
print_name_global();