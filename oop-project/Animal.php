<?php
class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function makeSound()
    {
        return 0;
    }
}

class Dog extends Animal
{
    private $dogSound;
    public function __construct($name, $dogSound)
    {
        parent::__construct($name);
        $this->dogSound = $dogSound;
    }

    public function makeSound()
    {
        return "{$this->name} is {$this->dogSound}";
    }
}

class Cat extends Animal
{
    private $catSound;

    public function __construct($name, $catSound)
    {
        parent::__construct($name);
        $this->catSound = $catSound;
    }

    public function makeSound()
    {
        return "{$this->name} says {$this->catSound}";
    }
}

class Cow extends Animal
{
    private $cowSound;

    public function __construct($name, $cowSound)
    {
        parent::__construct($name);
        $this->cowSound = $cowSound;
    }

    public function makeSound()
    {
        return "{$this->name} says {$this->cowSound}";
    }
}

$animals = [
    new Dog("Dog", "Woof!"),
    new Cat("Cat", "Meow!"),
    new Cow("Cow", "Moo!")
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Exercise 3</title>
</head>

<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="w-[50%] space-y-4 bg-white border p-10">
        <?php foreach ($animals as $animal): ?>
            <div class="bg-gray-100 p-5 rounded-lg border border-gray-100 shadow">
                <h2 class="text-xl font-bold text-blue-600">
                    <?= get_class($animal) ?>
                </h2>
                <p>
                    <?= $animal->makeSound() ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>