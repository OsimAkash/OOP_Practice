
<!-- How to Abstract Class And Interface Uses -->
 <!-- Polymorephism-> 
  1. Method overloading(compile time Polymorephism) 
  2. Method overriding (Run time polymorephism)
 -->

<?php

abstract class Vehicle {
    abstract public function getBaseFare();
    abstract public function getKiloFare() :int;
   public function getTotal($kilo):int {
    return $this->getBaseFare() + ($kilo * $this->getKiloFare() );
    }
}

interface HourlyRentable {
    public function getHourlyRate():int;
}

class Car extends Vehicle implements HourlyRentable {
    public function getBaseFare() {
        return 50;
    }
    public function getKiloFare(): int
    {
        return 10;
    }
    public function getHourlyRate():int {
        return 100;
    }

} 

class Bike extends Vehicle {
    public function getBaseFare() {
        return 20;
    }
    public function getKiloFare(): int
    {
        return 5;
    }
}

class CNG extends Vehicle implements HourlyRentable {
    public function getBaseFare() {
        return 30;
    }
    public function getKiloFare(): int
    {
        return 7;
    }

    public function getHourlyRate(): int
    {
        return 50;
    }
}

// $car = new Car();
// $total = $car->getTotal(kilo:5);
// $bike = new Bike();
// $total = $bike->getTotal(kilo:5);
$cng = new CNG();
$total = $cng->getTotal(kilo:5);

var_dump($total);