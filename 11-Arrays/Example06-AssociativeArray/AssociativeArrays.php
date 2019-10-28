<?php
/**
 * In Associative array, you have to specify the index.
 * index => value
 * => is a special meaning attached of defining assisiative array
 * left side is key and right is value
 * key => value, key is the index, value is the value at that index[key]
 */
$arr = ["Mon","Tues","Wed","Thur","Fri","Sat","Sun"];
var_dump($arr);
foreach($arr as $value){
    echo $value.PHP_EOL;
}

// Associative Array
$developer = [
                "fullname"=>"Lakshya",
                "Age"=>30,
                "Designation"=>"Senior Developer",
                "Language"=>["HTML","CSS","Jquery","PHP"]
            ];
var_dump($developer);
echo  PHP_EOL;
echo  PHP_EOL;
echo  PHP_EOL;
foreach($developer as $key => $value){
    var_dump($key)." ".var_dump($value);
}

$days = [0 => "Monday",1=>"Tuesday",2=>"Wednesday",3=>"Thursday",4=>"Friday",5=>"Saturday","Six"=>"Sunday"];
var_dump($days);
echo  PHP_EOL;
foreach($days as $value){
    echo $value.PHP_EOL;
}
echo  PHP_EOL;
foreach($days as $key1 => $value1){
    echo $key1." => ".$value1.PHP_EOL;
}

echo  PHP_EOL;
var_dump(array_keys($days)); // accessing only keys
var_dump(array_values($days)); // accessing only values
foreach(array_keys($days) as $key){
    echo $key.PHP_EOL;
}
echo PHP_EOL;
foreach(array_values($days) as $value){
    echo $value.PHP_EOL;
}
echo PHP_EOL;
echo PHP_EOL;
$userdetails = [
    "username"=>"someusername",
    "email"=>"example@example.com",
    "phone"=>963852741,
    "password"=>"123"
];
foreach($userdetails as $key=>$value){
    echo $key." => ".$value;
    echo PHP_EOL;
}

$userdetails = [
    0=>["username"=>"someusername",
        "email"=>"example1@example.com",
        "phone"=>963852741,
        "password"=>"123"],
    1=>["username"=>"someusername",
        "email"=>"example2@example.com",
        "phone"=>963852741,
        "password"=>"123"],
    2=>["username"=>"someusername",
        "email"=>"example3@example.com",
        "phone"=>963852741,
        "password"=>"123"],
    3=>["username"=>"someusername",
        "email"=>"example4@example.com",
        "phone"=>963852741,
        "password"=>"123"]
];
var_dump($userdetails);
echo PHP_EOL.PHP_EOL;
foreach($userdetails as $key=>$value){
    echo $userdetails[$key]["email"].PHP_EOL;
}
