<?php
/**
 * optional parameters should be at the last of the function
 * argument
 */
declare(strict_types = 1);
function printOddNumbers(int $limit,$skipNumber = -1){

    for($index = 0; $index<=$limit;$index++){
        if($index == $skipNumber){
            continue;
        }
        if($index%2!=0){
            echo "Odd Number : {$index}".PHP_EOL;
        }
    }
}

function printEvenNumbers(int $limit,$skipNumber = -1){
    for($index = 0; $index<=$limit;$index++){
        if($index == $skipNumber){
            continue;
        }
        if($index%2==0){
            echo "Even Number : {$index}".PHP_EOL;
        }
    }
}

printOddNumbers(30,29);
echo PHP_EOL;
printOddNumbers(30);
echo PHP_EOL;