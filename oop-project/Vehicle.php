<?php
class Vehicle{
    protected $brand;
    protected $dailyRate;

    public function __construct($brand, $dailyRate){
        $this->brand = $brand;
        $this->dailyRate = $dailyRate;
    }

    public function calculateRentalCost($days) {
        return $this->dailyRate * $days;
    }

    public function getBrand(){
        return $this->brand;
    }
}

class Car extends Vehicle{
    public function calculateRentalCost($days) {
        return parent::calculateRentalCost($days);
    }    
}

class Motorcycle extends Vehicle{
    public function calculateRentalCost($days) {
        return parent::calculateRentalCost($days);
    }
}

class Van extends Vehicle{
    public function calculateRentalCost($days) {
        return parent::calculateRentalCost($days);
    }
}

$vehicles =[
    new Car("Toyota",50),
    new Motorcycle("Hyundai",5),
    new Van("Ford", 3)
];

$days = 3;
?>