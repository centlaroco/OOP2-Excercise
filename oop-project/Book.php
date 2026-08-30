<?php
class Book {
   // properties of the class
    private string $title;
    private string $author;
    private int $price;

    // constructor to initialize all the properties
    public function __construct($title, $author, $price) {

        if(!is_string($title)){
            throw new Exception("The title is not a string");
        }

        if(!is_string($author)){
            throw new Exception("The author is not a string");
        }

        if(!is_int($price)){
            throw new Exception("The price is not an int");
        }

        $this->title = $title; 
        $this->author = $author;
        $this->price = $price;
    }

    // getter and setters of the $title
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }

//     // getter and setters of the $author
    public function getAuthor(){
        return $this->author;
    }
    public function setAuthor($author){
        $this->author = $author;
    }

    // getter and setters of the $price
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }

    // method to display the book info
    public function displayInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }

    // destructor
    public function __destruct() {
        echo "Book object destroyed. ";
    }
}

try{
// instantiate a Book object 
$myBook1 = new Book("PHP Basics", "Juan Dela Cruz",450);
$myBook1->setAuthor("Vincent Laroco");
// envoke the method(displayInfo) in instance object of $myBook1 to display the info
$myBook1->displayInfo();
}
catch(Exception $e){
    echo $e->getMessage();
}

?>

<html>
<head>
    <title>Hey</title>
</head>
<body>
    <header class="bg-dark">
    dfd
    </header>
    <label for="">Name:</label>
    <input id="my" type="text" placeholder="enter name">
    <!-- <button type="submit" onclick="myname()"> Submit -->
    </button>

    <p id="result"></p>

    <!-- <script>

        function myname(){
        const user = document.getElementById('my').value;

        if(user === "vincent"){
            document.getElementById('result').innerHTML = "Hi VIncent";
        }
        else
        {
            document.getElementById('result').innerHTML = "wassup " + user;
        }
}
    </script> -->
</body>
</html>
