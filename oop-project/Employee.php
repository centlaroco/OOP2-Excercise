<?php
class Employee{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function calculateSalary(){
        return 0;
    }
}

class FullTimeEmployee extends Employee{
    /*monthlySalary -properties */
    private $monthlySalary;

    public function __construct($name,$monthlySalary){
        parent::__construct($name);
        $this->monthlySalary = $monthlySalary;
    }

    public function calculateSalary(){
        return $this->monthlySalary;
    }

}

class PartTimeEmployee extends Employee{
    /*hourRate
      hoursWorked

      multiply it together
    */
    private $hourRate;
    private $hoursWorked;

    public function __construct($name,$hourRate, $hoursWorked){
        parent::__construct($name);
        $this->hourRate = $hourRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary(){
        return $this->hourRate * $this->hoursWorked;
    }
}

class FreelanceEmployee extends Employee{
    /*
        rateProject
        numberOfProjects
    */
    private $rateProject;
    private $numberOfProjects;

    public function __construct($name,$rateProject,$numberOfProjects){
        parent::__construct($name);
        $this->rateProject = $rateProject;
        $this->numberOfProjects = $numberOfProjects;
    }

    public function calculateSalary(){
        return $this->rateProject * $this->numberOfProjects;
    }
}

$employees = [
    new FullTimeEmployee("Vincent", 2000),
    new PartTimeEmployee("cent",2,2),
    new FreelanceEmployee("vincee",2,2)
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exercise 1</title>
</head>
<body>
   <body class="bg-gray-100 p-10">
    <div class="max-w-2xl mx-auto space-y-4 bg-white border p-10">
        <?php foreach ($employees as $employee): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <?php if ($employee instanceof FullTimeEmployee): ?>
                    <h2 class="text-xl font-bold text-blue-600">
                        Full Time Employee
                    </h2>
                <?php elseif ($employee instanceof PartTimeEmployee): ?>
                    <h2 class="text-xl font-bold text-green-600">
                        Part Time Employee
                    </h2>
                <?php elseif ($employee instanceof FreelanceEmployee): ?>
                    <h2 class="text-xl font-bold text-purple-600">
                        Freelance Employee
                    </h2>
                <?php endif; ?>
                <p>Name: <?= $employee->getName() ?></p>
                <p>Salary: <?= $employee->calculateSalary() ?></p>
            </div>
        <?php endforeach; ?>

    </div>

</body>
</html>