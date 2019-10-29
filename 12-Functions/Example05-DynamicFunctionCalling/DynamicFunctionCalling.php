<?php
/**
 * calling a function from a variable value
 * VARIABLE IS HOLDING THE FUNCTION NAME AND CAN BE CHANGED
 * PADDING ARGUMENT WITH $VARAIBLE WILL CALL THAT FUNCTION [FUNCTION CAN CHANGE AS THEY ARE ASSIGNED TO VARIABLE]
 */
declare(strict_types = 1);

function add(int $a,int $b):int{
    return $a+$b;
}
function sub(int $a,int $b):int{
    return $b - $a;
}
$addFunction = "add";
echo $addFunction;
ECHO PHP_EOL;
echo $addFunction(1,2).PHP_EOL;
ECHO PHP_EOL;
ECHO PHP_EOL;
$addFunction = "sub";
echo $addFunction(1,2).PHP_EOL;