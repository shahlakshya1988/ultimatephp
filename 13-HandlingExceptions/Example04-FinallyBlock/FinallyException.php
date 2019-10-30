<?php
function custom_exception_handler(Exception $e){
    echo "Caught An  Exception ".$e->getMessage().PHP_EOL;
}
set_exception_handler("custom_exception_handler");
//Throw new Exception("Developer Has Raised the Exception");
try{
    Throw new Exception("Developer Has Raised the Exception");
}finally{
    echo "This block of Code Is before Try".PHP_EOL;
}
echo "This is after try and finally";

/**
 * finally is executed before exception
 * throw, or not it is executed
 */