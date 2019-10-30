<?php
//date(format,timestamp);
/**
 * d - Represents day of the month; two digits with leading zeros (01 to 31)
 * D - Represents Day of the week in text as an abbreviation (Mon To Sun)
 * m - Represents month in numbers with leading zeros (01 to 12)
 * M - Represents month in text, abbreviated (Jan to Dec)
 * y - Represents two digit year (04  ir 14)
 * Y - Represents year in Four Digits (2008 to 2014)
 */

echo date("d-F-Y");
echo PHP_EOL;
echo date("D-F-Y");
echo PHP_EOL;
echo date("d-m-Y");
echo PHP_EOL;
echo date("d-M-Y");
echo PHP_EOL;
echo PHP_EOL;
/**
 * h - represent hour in 12 hour format with leading zeros
 * H - represents in 24 hour format with leading zero
 * i represent minutes with leading zeros
 * s represents seconds with leading zeros
 * a represents am or pm
 * A represents upper case AM OR PM
 */

echo date("d-F-Y H:i:s A");
echo PHP_EOL;


echo date("d-F-Y h:i:s A");
echo PHP_EOL;

echo date("d-F-Y h:i:s a");
echo PHP_EOL;
echo PHP_EOL;
// time in seconds
echo time();
echo PHP_EOL;
sleep(2);
echo time();
echo PHP_EOL;
sleep(2);
echo time();
echo PHP_EOL;
sleep(2);
echo time();
echo PHP_EOL;
sleep(2);
echo time();
echo PHP_EOL;
sleep(2);
echo PHP_EOL;
echo PHP_EOL;
echo date("d-F-Y h:i:s a");
echo PHP_EOL;
$newtime = time()+60;
echo date("d-F-Y h:i:s a",$newtime);
echo PHP_EOL;
