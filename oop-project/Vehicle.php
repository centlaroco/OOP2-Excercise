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
    new Motorcycle("Honda",5),
    new Van("Ford", 3)
];

$days = 3;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exercise 4</title>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="w-[50%] space-y-4 bg-white border p-10">
        <?php foreach($vehicles as $vehicle): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <h2 class="text-xl font-bold text-blue-600">
                    <?= get_class($vehicle); ?>
                </h2>
                <p class="text-gray-700">
                    Rental Cost: <?= $vehicle->calculateRentalCost($days) ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>