<?php
$arr = [1,2,3,4,5,6,7,8,9,10];
// removing element from array
print_r($arr);
unset($arr[5]);
print_r($arr);
echo array_pop($arr);
print_r($arr);
echo array_pop($arr);
print_r($arr);
echo array_pop($arr);
print_r($arr);
echo array_pop($arr);
print_r($arr);
$arr[]=50;
print_r($arr);

$arr = ["first"=>1,2,3,4,5,"last"=>6];
print_r($arr);
echo array_pop($arr);
print_r($arr);


$arr = ["first"=>1,2,3,4,5,"last"=>6];
$arr[]=7;
print_r($arr);