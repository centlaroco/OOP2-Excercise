<?php
class Shipping{
    public function calculateFee($weight){
        return 0;
    }
}

class StandardShipping extends Shipping{
    public function calculateFee($weight){
        return $weight * 2.00;
    }
}

class ExpressShipping extends Shipping{
    public function calculateFee($weight){
        return $weight * 5.00;
    }
}

class InternationalShipping extends Shipping{
    public function calculateFee($weight){
        $baseFee = 25.00;
        return $baseFee + ($weight * 8.00);
    }
}

?>