<?php
class Library{
    protected $title;
    protected $author;

    public function __construct($title,$author){
        $this->title = $title;
        $this->author = $author;
    }

    public function getBorrowPeriod(){
        return "Standard borrow";
    }

    public function getTitle(){
        return $this->title;
    }
}

class Book extends Library{
    public function getBorrowPeriod(){
        return "14 Days";
    } 
}

class Magazine extends Library{
    public function getBorrowPeriod(){
        return "4 Days";
    }
}

class EBook extends Library{
    public function getBorrowPeriod(){
        return "20 Days";
    }
} 


?>