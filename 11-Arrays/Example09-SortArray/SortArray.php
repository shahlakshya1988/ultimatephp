<?php
// sort(), rsort()
// index array
$arr = [9,6,3,2,5,8,7,4,1,0];
print_r($arr);
sort($arr);
print_r($arr);
rsort($arr);
print_r($arr);

//asort, arsort -> only for assosiative array

$arr=["3"=>"John","1"=>"James","2"=>"Rico"];
print_r($arr);
asort($arr);
print_r($arr);
arsort($arr);
print_r($arr);

//ksort,krsort -> assosiative array for sorting keys
print_r($arr);
krsort($arr);
print_r($arr);
ksort($arr);
print_r($arr);
