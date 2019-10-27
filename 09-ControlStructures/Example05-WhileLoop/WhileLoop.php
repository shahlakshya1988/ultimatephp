<?php
/**
 * while loop
 * while(condition){
 *      // code to be executed until condition is true
 *
 *      breaking of condition [Increment/Decrement]
 * }
 */

$i=0;
while($i<=10){
    if($i%2 == 0){
        echo "$i is Even".PHP_EOL;
    }else{
        echo "$i is Odd ".PHP_EOL;
    }
    $i++;
}
echo $i;
echo PHP_EOL;
// don't try this is infinite loop
$value = 0;
while(true){
    echo $value++;
    echo PHP_EOL;
}