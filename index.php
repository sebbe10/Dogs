<?php

class Dog {
    private $name = "";
    private $color = "";
    private $age =0;

    function __construct(string $name, string $color, int $age){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    function getInfo(): string {
        return "Name: {$this->name}, Color: {$this->color}, Age: {$this->age}";
    }
}

class RenderDog {
    function Info(Dog $dog): string {
        return "<p>{$dog->getInfo()}</p>";
    }
}

$arrDogs = [
    new Dog("Sebbe", "White", 20),
    new Dog("Sebb", "White", 21),
    new Dog("Seb", "White", 22),
    new Dog("Se", "White", 23)
];

// $Writeout = new Dog("Sebbe", "White", 20);
$render = new RenderDog();

// echo "<h3>Name: {$Writeout->name}</h3>";
// echo "<h3>Age: {$Writeout->age}</h3>";

foreach($arrDogs as $dog) {
    echo $render->Info($dog);
    }

?>
