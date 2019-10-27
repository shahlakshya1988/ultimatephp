<?php
// if else if laddar

$array = [1,2,2,3,4,5,6,7,8,9,9,12,1,3,14,13,14,26,64,56,767,87,98,99,2,23,23];
foreach($array as $number){
    @$result = $number % 2;
    if($result){
        echo "{$number} is Odd Number".PHP_EOL;
    }else if(!$result){
        echo "{$number} is Even Number ".PHP_EOL;
    }else{
        echo PHP_EOL."ERROR".PHP_EOL;
    }
}
echo PHP_EOL.PHP_EOL;
$number =10;
$number =2;
$number =12;
if($number >= 30){
    echo "{$number} is greater than 30";
}else if($number >= 20){
    echo "{$number} is greater than 20";
}else if($number>10){
    echo "{$number} is greater than 10";
}else if($number == 10){
    echo "{$number} is 10";
}else{
    echo "Number {$number} is less than 10";
}
echo PHP_EOL.PHP_EOL;