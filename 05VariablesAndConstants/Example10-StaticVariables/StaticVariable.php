<?php 
function counter(){
    $count = 1;
    echo $count."<br>".PHP_EOL;
    $count++;
}
counter();
counter();
counter();
counter();
counter();
counter();
counter();
?>
<?php 
echo PHP_EOL."<h1>Static Variables</h1>".PHP_EOL;

function counter_static(){
    static $counter_static = 1; // static retains values between function call
    echo $counter_static."<br>".PHP_EOL;
    $counter_static++;
}
counter_static();
counter_static();
counter_static();
counter_static();
counter_static();
counter_static();
counter_static();
counter_static();
echo PHP_EOL."Print Static".PHP_EOL;
function print_static(){
    static $counter_static = 1; // static retains values between function call
    echo $counter_static."<br>".PHP_EOL;
    $counter_static++;
}
print_static();
print_static();
print_static();
print_static();
?>
