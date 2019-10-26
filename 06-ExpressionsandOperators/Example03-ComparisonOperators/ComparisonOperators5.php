<?php
$ages = [5,6,4,45,12,13,18,17,145,16,19,14,15,12,25,24,24,26,29,27,45,46,48,47];
$freepizza_upto = 15;
$count = 0;
foreach($ages as $age){
    if($age <= $freepizza_upto ){
        $count++;
    }
}
echo "There are {$count} kids who can be given free pizza out of ".count($ages)." Persons".PHP_EOL;