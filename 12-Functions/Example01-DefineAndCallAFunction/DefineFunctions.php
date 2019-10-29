<?php
/**
 * function function_name (param1,param2,.....,paramn){
 *  statement 1;
 *  statemtnt 2;
 *  ........
 *  ........
 *  ........
 *  ........
 *  ........
 *  ........
 *
 *  return return_value;
 * }
 */


//define function
function print_evennumber($limit){
    for($index = 0 ;$index <= $limit ; $index++){
        if($index%2 == 0){
            echo "Even Number {$index}".PHP_EOL;
        }
    }
}


// calling the function
print_evennumber(20);
echo PHP_EOL."**************".PHP_EOL;
print_evennumber(30);
echo PHP_EOL."**************".PHP_EOL;
print_evennumber("30"); // don't do this in production
echo PHP_EOL."**************".PHP_EOL;
print_evennumber("t30"); // don't do this in production


function add($a,$b){
    return ($a + $b);
}
echo add(10,20);
echo PHP_EOL;
echo add(13,20);
echo PHP_EOL;
echo add(13,20);
echo PHP_EOL;
