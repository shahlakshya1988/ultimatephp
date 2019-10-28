<?php
$arr =[
        "planets" =>
            [
                "sun" => [ "temp" => "hot", "color" => "red" ],
                "moon" => [ "temp" => "cold", "color"  => "white" ],
                "earth" => [ "temp" => "normal", "color" => "blue" ]
            ]
    ];
print_r($arr);
foreach($arr as $key => $value){
    echo ucfirst($key);
    echo PHP_EOL;
    foreach($value as $subkey => $subvalue){
        echo ucfirst($subkey);
        echo PHP_EOL;
        foreach($subvalue as $subsubkey => $subsubvalue){
            echo $subsubkey."  ".$subsubvalue;
            echo PHP_EOL;
        }
    }
    echo PHP_EOL;
    echo PHP_EOL;
}