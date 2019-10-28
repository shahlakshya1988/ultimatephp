<?php
/**
 * MULTIDIMENSIONAL ARRAYS => Array inside of an array is called multidimensional array
 * Array holding one or multiple arrays
 *
 */
/**
 * Single dimensional array => 0,1,2,3,4,5,6
 * array holding only value not array
 */

//single dimensional indexed array

$single_array = [1,2,3,4,5,6,7,"String",0.456,true];
// Single dimensional assosiative array
$single_array = ["email"=>"example@example.com","username"=>"someusername","password"=>"123"];

// multidimensional indexed array

$arr2=[
    [0,1,2],
    [4,5,6],
    [7,8,9]
];
print_r($arr2);
foreach($arr2 as $singlevalue_array){
    print_r($singlevalue_array);
}

foreach($arr2 as $single_array){
    foreach($single_array as $value){
        echo $value;
        echo PHP_EOL;
    }
    echo PHP_EOL."***************".PHP_EOL;
}
echo PHP_EOL."***************".PHP_EOL;
$arr3 = [
        "emaillist1"=>[
                   "user1"=>"user1@example.com",
                   "user2"=>"user2@example.com",
                    "user3"=>"user3@example.com",
                    "user4"=>"user4@example.com"
                ],
            "emaillist2"=>[
                "user5"=>"user5@example.com",
                "user6"=>"user6@example.com",
                "user7"=>"user7@example.com",
                "user8"=>"user8@example.com"
            ],
        ];
var_dump($arr3);
print_r($arr3);

foreach($arr3 as $emaillist){
    print_r($emaillist);
    echo PHP_EOL."***************".PHP_EOL;
}

echo PHP_EOL."***************".PHP_EOL;echo PHP_EOL."***************".PHP_EOL;
foreach($arr3 as $emaillist){
    foreach($emaillist as $value){
        echo $value.PHP_EOL;
    }
    echo PHP_EOL."***************".PHP_EOL;
}

/**
 * KEY IS STRING AND VALUES IS THE ARRAY IN MULTIDIMENSIONAL ARRAY
 */