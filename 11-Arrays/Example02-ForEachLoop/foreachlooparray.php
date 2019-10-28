<?php
$days = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
var_dump($days);
echo PHP_EOL;
$counter = 0;
foreach($days as $day){
    echo $counter." => ".$day." => ".$days[$counter].PHP_EOL;
    $counter++;
}
$counter = 0;
$days = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday",7.5,true,33];
foreach($days as $day){
    echo "[$counter] => ".$day." => ".$days[$counter].PHP_EOL;
    $counter++;
}
