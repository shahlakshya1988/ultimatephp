<?php
/*
 * if index is not specificed then php will use the increment of the
 * previously used key, if the last index is 100 then next element without
 * index will be inserted into 101 pocket
 */
$mixed_array=[];
$mixed_array[0]=1;
$mixed_array[2]="String";
$mixed_array[4] = true;
$mixed_array[10] = 14.52;
var_dump($mixed_array);
$mixed_array[]="String 1";
$mixed_array[]="String 2";
var_dump($mixed_array);
$mixed_array[100]="String 100";
$mixed_array[]="String 101";
var_dump($mixed_array);

$mixed_array[0]="String 101";
var_dump($mixed_array);

/**
 * INDEX IS RANDOM NUMBER, SO WE CAN'T USE FOR LOOP WE HAVE TO USE FOREACH
 */
foreach($mixed_array as $value){
    echo $value.PHP_EOL;
}

echo $mixed_array[1].PHP_EOL; // UNDEFINED OFFSET