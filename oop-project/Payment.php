<?php

class Payment{
    public function processPayment($amount){
        return "Processing general payment of {$amount}";
    }
}

class CashPayment extends Payment{
    public function processPayment($amount){
        return "Processing Cash Payment: $" . number_format($amount, 2) . " (No additional fee)\n";
    }
}

class CreditCardPayment{
    public function processPayment($amount){
        $fee = $amount * 0.03; //3 percent fee for credit
        $total = $amount + $fee;
        return "Processing Credit Card Payment: $" . number_format($amount,2) .
            " | Fee: $" . number_format($fee,2) .
            " | Total: $" . number_format($total,2);
    }
}

class EWalletPayment{
    public function processPayment($amount){
        $fee = 1.50; //giving the flat fee for E-Wallet
        $total = $amount + $fee;
        return "Processing E-Wallet Card Payment: $" . number_format($amount,2) .
            "| Fee: $" . number_format($fee,2) . 
            "| Total: $" . number_format($total,2);
    }
}
$payments = [
    new CashPayment(),
    new CreditCardPayment(),
    new EWalletPayment()
];
$amount = 300;

// foreach($payments as $payment){
//     echo "{$payment->processPayment($amount)}";
// }
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
        <?php foreach($payments as $payment): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <h2 class="text-xl font-bold text-blue-600">
                    <?= get_class($payment); ?>
                </h2>
                <p class="text-gray-700">
                    <?= $payment->processPayment($amount) ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>