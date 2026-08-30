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

?>