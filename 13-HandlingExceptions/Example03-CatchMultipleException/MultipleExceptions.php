<?php
function my_custom_exception_handler(Exception $e){
    echo PHP_EOL."Exception Caught ::: ".$e->getMessage().PHP_EOL;
}
function divide($x,$y):float{
    $result = 0;
   try{
       if($y==0){
           throw new Exception(" Divide By Zero May Happen ");
       }
       $result = $x / $y;
   }catch(Exception $e){
       throw new Exception("Input Paramerter is below zero ".$e->getMessage());
   }
    return $result;
}
// this will catch all the exceptions which are not caught by try,catch
set_exception_handler("my_custom_exception_handler");

divide(1,0);
echo "I am Excecuted";