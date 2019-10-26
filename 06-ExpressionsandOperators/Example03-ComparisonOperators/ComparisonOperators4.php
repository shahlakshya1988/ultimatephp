<?php
$ages = [56,82,98,74,56,32,14,69,56,52,32,14,78,56,87,41,45,46,49];
$senior_age = 60;
$count = 0;
foreach($ages as $age){
    if($age >= $senior_age){
        $count++;
    }
}
echo "There are {$count} persons having age greater than or equal to {$senior_age} <br>".PHP_EOL;