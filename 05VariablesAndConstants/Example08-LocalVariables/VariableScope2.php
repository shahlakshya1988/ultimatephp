<?php 
$message = "Welcome to PHP";
function print_message(){
    global $message;
    echo "<br>";
    $message = "Hello World";
    echo $message;
    echo "<br>";
}

echo $message;
print_message();