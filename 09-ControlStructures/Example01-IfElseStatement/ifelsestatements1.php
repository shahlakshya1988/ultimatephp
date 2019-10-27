<?php
// Sample 1
// syntax of if...else condition

$some_boolean_condition = false;
if($some_boolean_condition){
    // this section will execute when the
    // condition is true
    echo "This is a If Block Condition".PHP_EOL;
    echo "This is a True Condition".PHP_EOL;
}else{
    // this section will execute when the
    echo "This is a else block condition".PHP_EOL;
    echo "This is a False Condition".PHP_EOL;
    // condition is false;
}

echo "Now the Condition is set to true".PHP_EOL.PHP_EOL;

$some_boolean_condition = TRUE;
if($some_boolean_condition){
    // this section will execute when the
    // condition is true
    echo "This is a If Block Condition".PHP_EOL;
    echo "This is a True Condition".PHP_EOL;
}else{
    // this section will execute when the
    echo "This is a else block condition".PHP_EOL;
    echo "This is a False Condition".PHP_EOL;
    // condition is false;
}

echo PHP_EOL.PHP_EOL."CHECKING WITH TWO CONDITION".PHP_EOL.PHP_EOL;
$condition1= true;
$condition2= false;
if($condition1 && $condition2){
    echo "Both Condition 1 and Condition 2 are True".PHP_EOL;
}else{
    echo "Both or any one of Condition 1 or Condition are/is False".PHP_EOL;
}
echo PHP_EOL.PHP_EOL;
if($condition1 || $condition2){
    echo "Any One or Both Condition 1 and Condition 2 are True".PHP_EOL;
}else{
    echo "Both Condition 1 and Condition 2 is False".PHP_EOL;
}