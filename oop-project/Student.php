<?php
class Student{
    /* properties of name and Score*/
    protected $name;
    protected $score;

    public function __construct($name, $score){
        $this->name = $name;
        $this->score = $score;
    }

    public function evaluateGrade(){
        return "unevaluated";
    }

    public function getStudentName(){
        return $this->name;
    }
}

class RegularStudent extends Student{
    public function evaluateGrade(){
        return ($this->score >=75) ? "Passed" : "Failed";
    }
}

class HonorsStudent extends Student{
    public function evaluateGrade(){
        if($this->score >= 98){
            return "With Highest Honor";
        } 
        else if($this->score >= 95){
            return "With High Honor";
        }
        else if($this->score >= 90){
            return "With Honor";
        }
        else{
            return "Failed (Doesn't meet the Honors Standard)";
        }
    }
}


$students = [
    new RegularStudent("Vincent", 90),
    new HonorsStudent("Mason", 90)
];

foreach($students as $student){
    echo "{$student->getStudentName()} | {$student->evaluateGrade()}";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exercise 4</title>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="w-[50%] space-y-4 bg-white border p-10">

    </div>
</body>
</html>