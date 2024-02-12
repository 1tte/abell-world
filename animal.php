<?php

class Animal {
    // Properties
    public $name;
    public $type;
    
    // Constructor
    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }
    
    // Method to display information about the animal
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Type: " . $this->type . "<br>";
    }
}

// Creating an instance of the Animal class
$dog = new Animal("Buddy", "Dog");

// Accessing properties and calling a method
echo "Animal Information:<br>";
$dog->displayInfo();

?>
