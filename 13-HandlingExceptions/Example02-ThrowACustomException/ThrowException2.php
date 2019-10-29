<?php
declare(strict_types = 1);
function my_custom_exception_handler(Exception $e){
    echo PHP_EOL;
    echo "My Handler Has Caught Exception ::: ".$e->getMessage();
    echo PHP_EOL;
}
set_exception_handler("my_custom_exception_handler");
function divide(){
   Throw new Exception("Error");
}

divide();

echo "I AM FINE";