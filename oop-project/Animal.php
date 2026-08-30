<?php
class Animal{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function makeSound(){
        return 0;
    }
}

class Dog extends Animal{
    private $dogSound;
    public function __construct($name, $dogSound){
        parent::__construct($name);
        $this->dogSound = $dogSound;
    }

    public function makeSound(){
        return "{$this->name} is {$this->dogSound}";
    }
}

class Cat extends Animal{
    private $catSound;

    public function __construct($name,$catSound){
        parent::__construct($name);
        $this->catSound = $catSound;
    }

    public function makeSound(){
        return "{$this->name} is {$this->catSound}";
    }
}

class Cow extends Animal{
    private $cowSound;

    public function __construct($name, $cowSound){
        parent::__construct($name);
        $this->cowSound = $cowSound;
    }

    public function makeSound(){
        return "{$this->name} says {$this->cowSound}";
    }
}

?>