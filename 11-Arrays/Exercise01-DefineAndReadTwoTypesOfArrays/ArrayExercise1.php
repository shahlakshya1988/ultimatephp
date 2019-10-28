<?php
$employee_id_array = [100,101,102,103,104,105,106];
print_r($employee_id_array);
foreach($employee_id_array as $employee){
    echo "Employee Id :: ".$employee.PHP_EOL;
}
$employee_details = [
        "100"=>[ "name"=>"employee100","email"=>"employee100@example.com" ],
        "101"=>[ "name"=>"employee101","email"=>"employee101@example.com" ],
        "102"=>[ "name"=>"employee102","email"=>"employee102@example.com" ],
        "103"=>[ "name"=>"employee103","email"=>"employee103@example.com" ],
        "104"=>[ "name"=>"employee104","email"=>"employee104@example.com" ],
        "105"=>[ "name"=>"employee105","email"=>"employee105@example.com" ],
        "106"=>[ "name"=>"employee106","email"=>"employee106@example.com" ]
    ];
print_r($employee_details);
foreach($employee_details as $key => $value){
    echo "Employee Code {$key} => ".PHP_EOL;
    foreach($value as $subkey => $subvalue){
        echo "{$subkey} => {$subvalue}";
        echo PHP_EOL;
    }
}