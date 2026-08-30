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


?>
