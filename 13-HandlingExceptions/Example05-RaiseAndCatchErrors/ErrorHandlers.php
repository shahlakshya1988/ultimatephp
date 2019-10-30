<?php
function custom_error_handler($errno,$errstr){
    echo $errno." ".$errstr;
}
set_error_handler("custom_error_handler");
echo (5/0);
echo PHP_EOL."After Error Generated".PHP_EOL;