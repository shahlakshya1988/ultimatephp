<?php 
// this name is outside of the function
$name = "Lakshya";
function print_name(){

    // this name will don't have any effect 
    // outside of the function
    $name = "PHP!";
    echo $name;
}
print_name();
echo "<br>";
echo $name;