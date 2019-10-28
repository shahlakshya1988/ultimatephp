<?php
// Define an array
// array is the collection of items
// array(), [] two ways we can define
// square brackets [] => This is better way
$array = ["1",3.2,4,5,6,7,"String",978.22,true];

// functions to print the array
var_dump($array);
print_r($array);
echo PHP_EOL;
echo "<pre>",print_r($array),"</pre>";
echo PHP_EOL;
//echo $array; // error Notice
echo count($array); // number of elements in array, number of elements last is count() - 1 position
echo $array[0].PHP_EOL;
echo $array[1].PHP_EOL;
echo $array[2].PHP_EOL;
echo $array[3].PHP_EOL;
echo $array[4].PHP_EOL;
echo $array[5].PHP_EOL;
echo $array[6].PHP_EOL;
echo $array[7].PHP_EOL;
echo $array[8].PHP_EOL;

// using for loop
echo PHP_EOL."Accessing the array with for loop".PHP_EOL;
for($i = 0 ;$i<count($array); $i++){
    echo $array[$i].PHP_EOL;
}

echo PHP_EOL."Accessing the array with for loop".PHP_EOL;
for($i = 0 ;$i<=count($array)-1; $i++){
    echo $array[$i].PHP_EOL;
}

echo PHP_EOL."Accessing the array with foreach loop".PHP_EOL;
foreach($array as $a){
    echo $a.PHP_EOL;
}

echo array_pop($array);echo PHP_EOL;
var_dump($array);
echo array_pop($array);echo PHP_EOL;
var_dump($array);
//echo $array[9].PHP_EOL; // this will give error
//echo "This is string Demo ".$array; // error

echo PHP_EOL."Accessing the Array With Constant".PHP_EOL;
const ARRAY_INDEX = 1;
echo @"$array[ARRAY_INDEX]"; // THROW ERROR

//ECHO $php_errormsg;
echo PHP_EOL;
echo "{$array[ARRAY_INDEX]}";
echo PHP_EOL;

echo PHP_EOL."**********".PHP_EOL;
var_dump($array);
$array[0]=6.5;
var_dump($array);
$array[0]="This is changed to string";
$array[2]=9887.33;
var_dump($array);

echo PHP_EOL."**********".PHP_EOL;
$array_2 = [
            1,
            2,
            3,
            4,
            5,
            "STring",
            334.34,
            True

          ];

var_dump($array_2);