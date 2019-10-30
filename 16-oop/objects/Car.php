<?php
class Car{
    public $name;
    public $color;
    function sayHello(){
        echo "Hello From Car Class".PHP_EOL;
    }

}

$car1 = new Car();
$car1->name = "Ferrai";
$car1->color = "Red";
$car1->sayHello();
echo $car1->name;
echo PHP_EOL;
echo $car1->color;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
$car2 = new Car();
$car2->name = "BMW";
$car2->color="Blue";
$car2->sayHello();
echo $car2->name;
echo PHP_EOL;
echo $car2->color;