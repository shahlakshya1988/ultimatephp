<?php
// all the details of date in array format
$dateArr = getdate();
print_r($dateArr);
foreach($dateArr as $format => $value){
    echo $format ." => ". $value;
    echo PHP_EOL;
}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "Weekday => ".$dateArr["weekday"].PHP_EOL;
echo "Month => ".$dateArr["month"].PHP_EOL;