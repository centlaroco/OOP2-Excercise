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

$shippings = [
    new StandardShipping(),
    new ExpressShipping(),
    new InternationalShipping()
];
$weight = 10; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exercise 8</title>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="w-[50%] space-y-4 bg-white border p-10">
        <?php foreach($shippings as $shipping): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <h2 class="text-xl font-bold text-blue-600">
                    <?php echo get_class($shipping); ?>
                </h2>
                <p class="text-gray-700">
                    <?php echo $shipping->calculateFee($weight); ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>