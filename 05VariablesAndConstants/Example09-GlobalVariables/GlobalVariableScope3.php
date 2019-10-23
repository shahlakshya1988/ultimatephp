<?php 
global $name;
$name = "Lakshya";
function print_name(){
    $name = "PHP!";
    echo $name;
}
print_name();
echo $name;


// sample 2
global $message; // don't assign the value
$message = "Welcome To PHP!";
function print_message(){
    global $message;
    $message ="This has been updated inside of the function";
    echo $message;
}
echo "<br>";
print_message();
echo "<br>";
echo $message;
echo "<br>";