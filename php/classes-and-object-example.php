<?php

class Car {
    public $brand;
    function sale(){
        $this->brand = "BMW";
    }
}

$car = new Car();
$car->brand = "Audi";
echo $car->brand;
$car->sale();
echo $car->brand;