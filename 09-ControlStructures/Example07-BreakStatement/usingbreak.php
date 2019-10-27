<?php
// break will break the nearest loop when inside of multiple loops
$value = 1;
do{
    echo $value++;
    echo PHP_EOL;
    if($value>10){
        break; // WE ARE BREAKING THE LOOP OVER HERE
    }
}while(true);
$j = 1;
$k = 1;
for($i=1;$i<=10;$i++){
    while($j<=10){
        do{
            $k++;
            echo "Do..while Loop {$k}".PHP_EOL;
            if($k>=5){
                break;
            }

        }while($k<=10);
        $j++;
        if($j>=6){
            break;
        }
    }
    echo "While Loop {$j}".PHP_EOL;
    if($i>=7){
        break;
    }
    echo "For Loop {$i}".PHP_EOL;


}