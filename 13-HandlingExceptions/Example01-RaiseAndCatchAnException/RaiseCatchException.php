<?php
/**
 * try{
        if there is an error inside of the try block
 * }catch(Exception $e){
        error will be caught in catch block, program is not abrubtly
 * }
 */
declare(strict_types = 1);
function divide(int $x,int $y):float{
    if($y<=0){
        Throw new Exception("Divide By Zero Might Happen");
    }
    $result = $x / $y;
    return $result;
}

//echo divide(25,0).PHP_EOL;
try{
    echo divide(25,0).PHP_EOL;
}catch(Exception $e){
    echo $e->getMessage();
}
echo PHP_EOL."Hello world"; // If there is no try catch block, then this will never be executed