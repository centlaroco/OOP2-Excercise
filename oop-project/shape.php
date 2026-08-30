<?php
class Shape{
    public function calculateArea(){
        return 0;
    }
}

class Circle extends Shape{
    /*
    pi 
    radius 
    multiply pi *radius
     */

    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius,2);
    }
}

class Rectangle extends Shape{
    private $length;
    private $width;

    public function __construct($length,$width){
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea(){
        return $this->length * $this->width;
    }
}

class Triangle extends Shape{
    private $base;
    private $height;

    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea(){
        return 0.5 * $this->base * $this->height;
    }
}

$shapes = [
    new Circle(5),
    new Rectangle(5,5),
    new Triangle(5,5)
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
<body>
    
</body>
</html>