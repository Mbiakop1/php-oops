<?php

class Car {
    public $name;
    public $color;

    function sayHello(){
          echo "hello from car class";
    }
}


$car1 = new Car();

$car1->name = "ferrari";
$car1->color = "red";
$car1->sayHello();
echo "$car1->name is  $car1->color";
?>