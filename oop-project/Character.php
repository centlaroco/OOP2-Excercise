<?php
class Character{
    protected $name;
    protected $health;

    public function __construct($name,$health){
        $this->name = $name;
        $this->health = $health;
    }

    public function attack(){
        return "Basic Attack \n";
    }
}

class Warrior extends Character{
    public function attack(){
        return "{$this->name} is performing a physical attack!";
    }
}

class Mage extends Character{
    public function attack(){
        return "{$this->name} is performing a magic attack!";
    }
} 

class Archer extends Character{
    public function attack(){
        return "{$this->name} is performing a ranged attack!";
    }
}
?>