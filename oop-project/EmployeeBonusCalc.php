<?php
class Employee{
    protected $name;
    protected $basicSalary;

    public function __construct($name,$basiSalary){
        $this->name = $name;
        $this->basicSalary = $basiSalary;
    }

    public function calculateBonus(){
        return 0;
    }

    public function getDetails(){
        return "Employee: {$this->name}";
    }
}

class Manager extends Employee{
    public function calculateBonus(){
        $managerBonus = 0.20; // the manager has 20% bonus
        return $this->basicSalary * $managerBonus;
    }
    public function getDetails(){
        return "Position: Employee | Name: {$this->name} | Bonus: {$this->calculateBonus()}";
    }
}

class Developer extends Employee{
    public function calculateBonus(){
        $devBonus = 0.10; //developer has 10% bonus
        return $this->basicSalary * $devBonus;
    }

    public function getDetails(){
        return "Position: Developer | Name: {$this->name} | Bonus: {$this->calculateBonus()}";
    }
}

class Intern extends Employee{
    public function calculateBonus(){
        $internBonus = 0.05; //intern has 5% bonus
        return $this->basicSalary * $internBonus;
    }

    public function getDetails(){
        return "Position: Intern | Name: {$this->name} | Bonus: {$this->calculateBonus()}";
    }
}
?>
