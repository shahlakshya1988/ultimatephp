<?php
$date = date_create();
var_dump($date);
echo PHP_EOL;
$date = date_create("+1 day");
var_dump($date);
echo PHP_EOL;
$date = date_create("-1 day");
var_dump($date);
echo date_create("now")->format("d-F-Y h:i:s a");echo PHP_EOL;
echo date_create("+1 day")->format("d-F-Y h:i:s a");echo PHP_EOL;
echo date_create("+5 day")->format("d-F-Y h:i:s a");echo PHP_EOL;
echo date_create("-1 day")->format("d-F-Y h:i:s a");echo PHP_EOL;
echo date_create("-5 day")->format("d-F-Y h:i:s a");echo PHP_EOL;
echo date_create("-5 year")->format("d-F-Y h:i:s a");echo PHP_EOL;
echo date_create("-5 month")->format("d-F-Y h:i:s a");echo PHP_EOL;
echo strtotime(date("d-F-Y h:i:s a"));echo PHP_EOL;
echo date("d:F:Y",strtotime(date("d-F-Y h:i:s a")));echo PHP_EOL;
echo date("d:m:Y",strtotime(date("d-F-Y h:i:s a")));echo PHP_EOL;
echo date("d:M:Y",strtotime(date("d-F-Y h:i:s a")));echo PHP_EOL;
