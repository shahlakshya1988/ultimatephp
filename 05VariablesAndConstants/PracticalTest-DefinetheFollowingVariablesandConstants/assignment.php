<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Assignment"; ?></title>
</head>
<body>
<h3>1) Define and Assign $firstname and $lastname variable with your name.</h3>
<?php
$firstname = "Lakshya";
$lastname = "Shah";
?>
<h3>2) Print the firstname, lastname using echo / print</h3>
<?php
echo $firstname." ".$lastname;
echo "<br>";
print $firstname." ".$lastname;
?>
<h3>3) Embed the variable inside the quotes.</h3>
<?php
echo "My Full Name Is {$firstname} {$lastname}";
?>
<h3>4) Define a function to print the name.</h3>
<?php
function print_name(){
    global $firstname,$lastname;
    echo "My Full Name Is {$firstname} {$lastname}";
}
print_name();
?>
<h3>5) Show PHP Variables are case sensitive.</h3>
<?php
$name = "my name";
$Name="Some Other name";
echo $name;
echo "<br>";
echo $Name;
?>
<h3>6) Create a local variable outside the function and define same inside the function. Display the variable</h3>
<?php
$string = "Hello From Outside";
function print_string(){
    $string = "Hello From Function";
    echo $string . "<br>";
}
print_string();

?>
<h3>7) Define and show the Global Variable</h3>
<?php
global $global_var;
function demo_global_var(){
    echo $GLOBALS["global_var"];
    echo "<br>";
}
demo_global_var();
?>
<h3>8) Define and show the Static Variable</h3>
<?php
function demo_static_var(){
    static $counter = 1;
    echo $counter++."<br>";
}
demo_static_var();
demo_static_var();
demo_static_var();
demo_static_var();
?>
<h3>9) Show a Super Global Variable</h3>
<?php
function print_super_global(){
    echo "<pre>",print_r($_SERVER),"</pre><br>";
}
print_super_global();
?>
<h3>10) Define and show Variable of Variables</h3>
<?php
    $name = "John Smith";
    $message = "name";
    $othermessage = "message";
    echo $othermessage;
    echo "<br>";
    echo $$othermessage;
    echo "<br>";
    echo $$$othermessage;
    echo "<br>";
?>
<h3>11) Use the isset method using tenary operators</h3>
<?php
    echo isset($unsettedvariable)? $unsettedvariable : "No Value Has Been Set";
    echo "<br>";
    $unsettedvariable=100;
    echo isset($unsettedvariable)?  $unsettedvariable : "No Value Has Been Set";
    echo "<br>";
?>
<h3>12) Define and Display a Constant.</h3>
<?php
define("DS",DIRECTORY_SEPARATOR);
var_dump(DS);
?>
<h3>13) Show magic constant</h3>
<?php
var_dump(__DIR__);
?>
</body>
</html>