<?php 
global $name; // first define
$name = "Lakshya"; // then assign it , don't combine
global $variableScope;
$variableScope = "Global";

function print_this_name(){
    $name = "PHP";
    echo $name;
    echo "<br>";
    echo $variableScope;
    echo "<br>";
}

print_this_name();
echo $name;