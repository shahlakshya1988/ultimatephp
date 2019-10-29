<?php
/**
 * & in function decelartion for paramerters will send the physical address of the variable
 * padding variables as a reference so any changes are automatically reflected
 */
$result = 0;
function add($a,$b,$result = null):int{
    $addition = $a + $b;
    return $addition;
}
echo $result;
echo PHP_EOL;
echo $result = add(1,2);
echo PHP_EOL;
echo PHP_EOL;
$newResult = 0;
function add1(int $a,int $b,&$result){
    $result = $a + $b;
}
echo $newResult;
echo PHP_EOL;
add1(2,5,$newResult);
echo $newResult;