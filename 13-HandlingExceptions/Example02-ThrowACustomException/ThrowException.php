<?php
function custom_exception_handler($exception){
    echo PHP_EOL."Caught Exception ::: ".$exception->getMessage().PHP_EOL;
}

set_exception_handler("custom_exception_handler"); // whenever the exception happens pass it to the function;
throw new Exception("This is my custom exception");
echo "Hello World";