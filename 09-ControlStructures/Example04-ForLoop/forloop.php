<?php
/*
 * for(initialization; condition to brea; increment/decrement){
 *  code to be repeated
 * }
 */

// recommended way of doing it, avoid other way
for($i=1;$i<=10;$i++){
    echo $i.PHP_EOL;
    if($i%2==0){
        echo "$i is Even ".PHP_EOL;
    }else{
        echo "$i is Odd".PHP_EOL;
    }
}
echo PHP_EOL;
$i=1;
for(;$i<=10;$i++){
    echo $i.PHP_EOL;
    if($i%2==0){
        echo "$i is Even ".PHP_EOL;
    }else{
        echo "$i is Odd".PHP_EOL;
    }
}
echo PHP_EOL;
$i=1;
for(;$i<=10;){
    echo $i.PHP_EOL;
    if($i%2==0){
        echo "$i is Even ".PHP_EOL;
    }else{
        echo "$i is Odd".PHP_EOL;
    }
    $i++;
}
echo PHP_EOL;