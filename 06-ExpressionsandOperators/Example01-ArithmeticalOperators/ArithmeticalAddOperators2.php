<?php
$maths = 70;
$science = 30;
$english = 80;
echo $maths + $science + $english;
echo "<br>".PHP_EOL;

// addition operation will not work inside of double quotes
echo "Total Marks $maths + $science + $english <br>".PHP_EOL;
//echo "Total Marks {$maths + $science + $english} <br>".PHP_EOL; // ERROR
$total  = $maths+$science+$english;
echo "Total Marks ".($maths+$science+$english)."<br>".PHP_EOL; // KEEPING OUR EXPRESSION OUTSIDE