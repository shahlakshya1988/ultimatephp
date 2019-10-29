<?php
/**
 * when declare is used for strict type, automatic convertion from string to int or any other between
 * datatype will throw error PHP7
 */
declare(strict_types = 1);
function print_oddnumbers(int $limit,$skipnumbers){
    for($index = 0; $index <= $limit; $index++){
        if($index == $skipnumbers){
            continue;
        }
        if($index % 2 !=0){
            echo "Odd Number {$index}".PHP_EOL;
        }
    }
}
print_oddnumbers(20,10);
print_oddnumbers(20,9);
print_oddnumbers(20,"9");
print_oddnumbers("20",9);

