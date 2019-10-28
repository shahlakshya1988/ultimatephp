<?php
require_once  "example1_namespace.php";
var_dump(max_count_namespace\MAX_COUNT);
echo "Printing Even Numbers Only till ".max_count_namespace\MAX_COUNT;
$i=1;
while(true){
    if($i>max_count_namespace\MAX_COUNT){
        break;
    }
    if($i%2 == 0){
        echo $i;
        echo PHP_EOL;
    }
    $i++;
}
echo PHP_EOL;
echo PHP_EOL;

echo "Printing Odd Numbers Only till ".max_count_namespace\MAX_COUNT;
$i=1;
while(true){
    if($i>max_count_namespace\MAX_COUNT){
        break;
    }
    if($i%2 != 0){
        echo $i;
        echo PHP_EOL;
    }
    $i++;
}
echo PHP_EOL;
echo PHP_EOL;