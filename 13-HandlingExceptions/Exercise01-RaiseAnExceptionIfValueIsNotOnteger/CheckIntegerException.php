<?php
//declare(strict_types=1);
function custom_exception_handler($e){
    //var_dump($e);
    echo PHP_EOL;
    echo "Generated Exception ".$e->getMessage();
    echo PHP_EOL;
}
set_exception_handler("custom_exception_handler");

function printEvenNumbers(int $start,int $end){
    if($start<=0 || $end <=0 || $start==$end){
        throw new Exception("Invalid Input Elements");
    }
    for(;$start<=$end;$start++){
        if($start % 2== 0){
            echo $start.PHP_EOL;
        }
    }
}

printEvenNumbers(5,12);
echo PHP_EOL;
printEvenNumbers(12,12);