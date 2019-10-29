<?php
/**
 * function function_name(param1,param2,....,paramn) : return type{

 * return something;
 *
 * }
 */
declare(strict_types=1);
function add(int $a,int $b) : int{
    return $a+$b;
    //return "Hello World"; //$a+$b;
}

echo add(23,20);
echo PHP_EOL;
echo PHP_EOL;
function getEvenNumbers(int $limit):array{
    $array = [];
    for($index = 0; $index<=$limit;$index++){
        if($index % 2 ==0){
            $array[]=$index;
        }
    }
    return $array;
}
print_r(getEvenNumbers(20));