<?php

class Dog {
    // Egenskap = en variabel inne i ett objekt
    private $name = "";
    private $color = "";
    private $age =0;

    // Konstruktor
    function __construct(string $name, string $color, int $age){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    // Metod = funktion inne i objekt
    function getInfo(): string {
        return "Name: {$this->name}, Color: {$this->color}, Age: {$this->age}";
    }
}

class DogHotell {
    private $dogs = [];

    function __construct($dogs){
        $this->dogs = $dogs;
    }

    function getDogs(){
        return $this->dogs;
    }
}

class RenderDog {
    function Info(Dog $dog): string {
        return "<p>{$dog->getInfo()}</p>";
    }
}

$myDogs = new DogHotell(
    new Dog("Sebbe", "White", 20),
    new Dog("Sebb", "White", 21),
    new Dog("Seb", "White", 22),
    new Dog("Se", "White", 23),
    new Dog("S", "White", 24)
);


// $Writeout = new Dog("Sebbe", "White", 20);
$render = new RenderDog();

// echo "<h3>Name: {$Writeout->name}</h3>";
// echo "<h3>Age: {$Writeout->age}</h3>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Dogs</h1>

<?php
foreach($myDogs->getDogs() as $dog){
    echo $render->Info($dog);
}
?>
</body>
</html>