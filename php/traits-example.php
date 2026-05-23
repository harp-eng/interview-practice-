<?php

trait Sale {
    public $brand;
    public function sale(){
        $this->brand="BMW";
    }
}

class Car {
    use Sale;
}

class Bike {
    use Sale;
}

$car = new Car();
$car->brand = "Audi";
echo $car->brand;

$bike = new Bike();
$bike->brand = "Honda";
echo $bike->brand;  