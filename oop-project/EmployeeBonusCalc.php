<?php
class Employee{
    protected $name;
    protected $basicSalary;

    public function __construct($name,$basicSalary){
        $this->name = $name;
        $this->basicSalary = $basicSalary;
    }

    public function calculateBonus(){
        return 0;
    }

    public function getDetails(){
        return "Employee: {$this->name}";
    }

    public function getEmployeeName(){
        return $this->name;
    }

}

class Manager extends Employee{
    public function calculateBonus(){
        $managerBonus = 0.20; // the manager has 20% bonus
        return $this->basicSalary * $managerBonus;
    }
    public function getDetails(){
        return "Position: Manager | Bonus: {$this->calculateBonus()}";
    }
}

class Developer extends Employee{
    public function calculateBonus(){
        $devBonus = 0.10; //developer has 10% bonus
        return $this->basicSalary * $devBonus;
    }

    public function getDetails(){
        return "Position: Developer | Bonus: {$this->calculateBonus()}";
    }
}

class Intern extends Employee{
    public function calculateBonus(){
        $internBonus = 0.05; //intern has 5% bonus
        return $this->basicSalary * $internBonus;
    }

    public function getDetails(){
        return "Position: Intern | Bonus: {$this->calculateBonus()}";
    }
}

$employeesBonus = [
    new Manager("Vincent",10),
    new Developer("Mason",10),
    new Intern("Pretty Me",10)
];

foreach($employeesBonus as $employBonus){
    echo "{$employBonus->getDetails()} | {$employBonus->getEmployeeName()}";
}
?>

