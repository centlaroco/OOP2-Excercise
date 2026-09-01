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

$characters =[
    new Warrior("Alucard",100),
    new Mage("Eudora",50),
    new Archer("Miya",75)
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exercise 10</title>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="w-[50%] space-y-4 bg-white border p-10">
        <?php foreach($characters as $character): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <h2 class="text-xl font-bold text-blue-600">
                    <?php echo get_class($character); ?>
                </h2>
                <p class="text-gray-700">
                    <?php echo $character->attack(); ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>