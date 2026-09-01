<?php
class Shipping{
    public function calculateFee($weight){
        return 0;
    }
}

class StandardShipping extends Shipping{
    public function calculateFee($weight){
        return $weight * 2.00; //if 10 sha multiply by 2.00 per kg equals to 20kg
    }
}

class ExpressShipping extends Shipping{
    public function calculateFee($weight){
        return $weight * 5.00;
    }
}

class InternationalShipping extends Shipping{
    public function calculateFee($weight){
        $baseFee = 25.00; //addtional shpping fee
        return $baseFee + ($weight * 8.00);  // 10*8.00 = 80 then + 25.00 = 105
    }
}

$weight = 10; 
?>