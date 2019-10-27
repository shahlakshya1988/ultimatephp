<?php
/**
 * if no break is kept then all the below cases will execute until break is found
 * default don't need break as it is last one
 */
$inputNumber =10;
$inputNumber =1;
$inputNumber =12;
switch($inputNumber){
    case ($inputNumber>=30):
        echo "{$inputNumber} is greater than 30";
        break;
    case ($inputNumber >= 20):
        echo "{$inputNumber} is greater than 20 but less than 30";
        break;
    case ($inputNumber > 10):
        echo "{$inputNumber} is greater than 10 but less than 20";
        break;
    case ($inputNumber == 10):
        echo "{$inputNumber} is 10";
        break;
    default:
        echo "{$inputNumber} is less than 10";

}
echo PHP_EOL;
echo PHP_EOL;
$weekday = "Friday";
$weekday = "Saturday";
switch($weekday){
    case "Monday":
        echo "Today is Monday";
        echo PHP_EOL."Work Work...";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        echo PHP_EOL."Work Work...";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        echo PHP_EOL."Work Work...";
        break;
    case "Thursday":
        echo "Today is Thursday";
        echo PHP_EOL."Work Work...";
        break;
    case "Friday":
        echo "Today is Friday";
        echo PHP_EOL."Work Work...";
        break;
    case "Saturday":
        echo "Today is Saturday";
    case "Sunday":
        echo PHP_EOL.PHP_EOL."Party Time...............";
        break;
    default:
        echo "Enter Proper Week Day Name";

}