<?php 
global $message;
$message = "This is in global scope";
echo $GLOBALS["message"];
echo PHP_EOL;
echo PHP_EOL;