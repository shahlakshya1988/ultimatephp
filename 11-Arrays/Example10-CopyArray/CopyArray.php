<?php
$arr = [0, 1, 2, 3, 4, 5];
$arr1 = $arr; // assigning values will copy it.
print_r($arr1);

foreach($arr as $value){
    $arr2[]=$value;
}
print_r($arr2);

// sample 3
$arr3 = [ "3" => "John", "1" => "Ajit", "2" => "Roger"];
$arr4 = $arr3;
print_r($arr4);
foreach($arr3 as $key => $value){
    $arr5[$key] = $value;
}
print_r($arr5);