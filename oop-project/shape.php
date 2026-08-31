<?php
class Shape
{
    public function calculateArea()
    {
        return 0;
    }
}

class Circle extends Shape
{
    /*
    pi 
    radius 
    multiply pi *radius
     */

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return 3.14 * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}

class Triangle extends Shape
{
    private $base;
    private $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}

$shapes = [
    new Circle(5),
    new Rectangle(5, 5),
    new Triangle(5, 5)
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exercise 2</title>
</head>

<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="w-[50%] space-y-4 bg-white border p-10">
        <?php foreach ($shapes as $shape): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <h2 class="text-xl font-bold text-blue-600">
                    <?= get_class($shape) ?>
                </h2>
                <p class="text-gray-700">
                    Area:
                    <span class="font-bold">
                        <?= number_format($shape->calculateArea(), 1) ?>
                    </span>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>