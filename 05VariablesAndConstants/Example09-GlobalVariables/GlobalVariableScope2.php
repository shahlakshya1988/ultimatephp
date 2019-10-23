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
    echo $message;
}
print_message();
echo $message;