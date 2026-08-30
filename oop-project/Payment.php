<?php

class Payment{
    public function processPayment($amount){
        echo "Processing general payment of {$amount}";
    }
}

class CashPayment extends Payment{
    public function processPayment($amount){
        echo "Processing Cash Payment: $" . number_format($amount, 2) . " (No additional fee)\n";
    }
}

class CreditCardPayment{
    public function processPayment($amount){
        $fee = $amount * 0.03; //3 percent fee for credit
        $total = $amount + $fee;
        echo "Processing Credit Card Payment: $" . number_format($amount,2) .
            " Fee: $" . number_format($fee,2) .
            "Total: $" . number_format($total,2);
    }
}

class EWalletPayment{
    public function processPayment($amount){
        $fee = 1.50; //giving the flat fee for E-Wallet
        $total = $amount + $fee;
        echo "Processing E-Wallet Card Payment: $" . number_format($amount,2) .
            "| Fee: $" . number_format($fee,2) . 
            "| Total: $" . number_format($total,2);
    }
}

$amount = 300;
?>