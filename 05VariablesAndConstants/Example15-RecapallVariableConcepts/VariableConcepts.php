<?php
// define a variable
$name = "John, Smith";
//variables can be used as Strings and Integers
$message = 1;
$message = "PHP is the Best";
echo $message."<br>".PHP_EOL;
//Print variables with double quotes
echo "Name variable = {$name} <br>".PHP_EOL;
echo 'Name Variable = {$name} <br>'.PHP_EOL;
// Variable Typing Converting the string to int
$length = 10;
$breath = "20";
$area = $length * $breath;
echo "Area : {$area} <br>".PHP_EOL;


//variables are case sensitive
$Name = "John Doe";
echo "{$name} is not equals to {$Name}<br>".PHP_EOL;
 // variable scope
$counter = 1;
function show_counter(){
  $counter = 2;
  echo "Counter in Function ".$counter."<br>".PHP_EOL;
}
show_counter();
echo "Counter Outside Function ".$counter."<br>".PHP_EOL;

// GLOBAL VARIABLES
global $count;
$count = 1;
function show_count(){
    $count = 2;
    echo "Count Inside Of the Function ".$count."<br>".PHP_EOL;
}
show_count();
echo "Count Outside Of The Function ".$count."<br>".PHP_EOL;

// ACCESSING GLOBAL VARIABLE INSIDE OF THE FUNCTION
global $count_global;
$count_global = 1;
function show_global(){
    global $count_global;
    $count_global=2;
    echo "Count Global Inside Of Function {$count_global} <br>".PHP_EOL;
}
show_global();
echo "Count Global Outside Of the Function {$count_global} <br>".PHP_EOL;

// static
function counter_static(){
    static $counter_static_var =1;
    echo $counter_static_var."<br>".PHP_EOL;
    $counter_static_var++;
}
counter_static();counter_static();counter_static();counter_static();counter_static();

// PREDEFINED VARIABLES
function predefined_variables(){
    echo $GLOBALS["count"]." This is global variable decelared and assigned out of function <br>".PHP_EOL;
}
predefined_variables();

// variables of variables
$names = "John, Smith, William";
$message = "name";
$othermessage = "message";
echo $othermessage.PHP_EOL;
echo "<br>";
echo $$othermessage.PHP_EOL;
echo "<br>";
echo $$$othermessage.PHP_EOL;

// isset
var_dump(isset($someunknownvar));
var_dump(isset($count));