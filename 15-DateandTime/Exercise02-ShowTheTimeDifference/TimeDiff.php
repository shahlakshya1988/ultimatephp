<?php
$date1 = time();
//sleep(60);
$date2=time();
$dateDiff = ($date2 - $date1)/60;
echo $dateDiff;
echo PHP_EOL;
echo PHP_EOL;
$start_date = date_create("05-05-2019 12:01:02");
$end_date = date_create("05-05-2019 13:01:02");
$diff =date_diff($start_date,$end_date);
var_dump($diff);

