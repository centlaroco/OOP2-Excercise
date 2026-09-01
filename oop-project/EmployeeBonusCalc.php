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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exercise 7</title>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="w-[50%] space-y-4 bg-white border p-10">
        <?php foreach($employeesBonus as $employBonus): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <h2 class="text-xl font-bold text-blue-600">
                    <?= get_class($employBonus); ?>
                </h2>
                <p class="text-gray-700">
                    <?= $employBonus->getDetails(); ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>