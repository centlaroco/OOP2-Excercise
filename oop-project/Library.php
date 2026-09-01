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

$books = [
    new Book("The Great Gatsby", "F. Scott Fitzgerald"),
    new Magazine("National Geographic", "Various Authors"),
    new EBook("Digital Fortress", "Dan Brown")
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exercise 9</title>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="w-[50%] space-y-4 bg-white border p-10">
        <?php foreach($books as $book): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <h2 class="text-xl font-bold text-blue-600">
                    <?php echo $book->getTitle(); ?>
                </h2>
                <p class="text-gray-700">
                    <?php echo $book->getBorrowPeriod(); ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>