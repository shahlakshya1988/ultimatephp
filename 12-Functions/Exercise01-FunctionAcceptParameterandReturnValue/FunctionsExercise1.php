<?php
declare(strict_types = 1);
function calculate(int $a , int $b, string $operation){
    switch($operation){
        case "add":
            return $a+$b;
            break;
        case "sub":
            return $a-$b;
            break;
        case "div":
            return $a / $b;
            break;
        case "mul":
            return $a*$b;
            break;
        case "mod":
            return $a%$b;
            break;
        default:
            echo "Enter Proper Operation";
            return false;
    }
}
echo calculate(7,2,"add").PHP_EOL;
echo calculate(7,2,"sub").PHP_EOL;
echo calculate(7,2,"div").PHP_EOL;
echo calculate(7,2,"mul").PHP_EOL;
echo calculate(7,2,"mod").PHP_EOL;