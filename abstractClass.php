<?php

abstract class Car { // Parent class
    public $name;
    public function __construct($name) {
    $this->name = $name;
    }
    abstract public function intro() : string;
   }
   class Audi extends Car { // Child classes
    public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
    }
   }
    // Fatal error: Uncaught Error: Cannot instantiate abstract class Car
    // var_dump(new Car("A8"))


?>