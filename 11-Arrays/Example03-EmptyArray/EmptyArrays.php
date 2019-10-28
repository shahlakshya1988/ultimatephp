<?php
$empty_array1 = array(); // array is initialized,but it is empty
$empty_array2 = [];// array is initialized,but it is empty
var_dump(isset($empty_array1));
var_dump(empty($empty_array1));

var_dump(isset($empty_array2));
var_dump(empty($empty_array2));
echo (empty($empty_array2)) ? "Array is Empty":"Array has some value";
$array = [];
var_dump($array);
$array = 10; // now it is int, not array
var_dump($array);
$array=[];
$array[] = 10;
$array[]=20;
$array[]=30;
$array[]=40;
$array[]=50;
var_dump($array);
$array = [10];
print_r($array);
$array[0] = [10];
print_r($array);
$array = []; // resetting the array
var_dump($array);
echo PHP_EOL."Array Of Array".PHP_EOL;
$array = [[]];
var_dump($array);

$array=[["Monday","Tuesday","Wednesday","Thursday","Friday"],["Saturday","Sunday"]];
print_r($array);