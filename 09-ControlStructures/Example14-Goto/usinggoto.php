<?php
/**
 * goto is to create a label or breakpoint, checkmark where we have to jump to that location
 * // user break, or continue instead of goto
 * Limit: can't go inside the loop, but we can go outside the loop
 */
$inputValue = 1;
$inputValue = 10;
if($inputValue == 1){
    goto error_block; // error_block is the label
}
echo "This is before go to block".PHP_EOL;

error_block:
    echo "This is the error block and will excecute in any way".PHP_EOL;


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
for($count = 1; $count<=20;$count++){
    echo $count.PHP_EOL;
    if($count % 4 == 0){
        goto loop2;
    }
}
loop2:
    echo "{$count}".PHP_EOL;