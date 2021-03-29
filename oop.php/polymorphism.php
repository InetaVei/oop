<?php
class Person {
    private $firstname; 
    private $lastname;
    public function __construct($fn, $ln){
        $this->firstname = $fn;
        $this->lastname = $ln;
    }
    public function getFirstname(){
     return $this->firstname; 
    }
    public function getLastname(){
     return $this->lastname; 
    }
     }
     
     class Employee extends Person {
     function someFun(){ print("ABC"); }  // someFun() tai papildoma kazkokia f-ja
     }

     $people = array(
        // new Employee("Mindaugas", "Bern"),
        new Person("Jonas", "Jonaitis"),
        new Person("Petras", "Petraitis")
        );
        
    // var_dump($people);

        foreach($people as $person){
        print($person->getFirstname() . ' ' . $person->getLastname() . '<br>');

    //     // Uncaught Error: Call to undefined method Person::someFun()
    //     // print($person->getFirstname() . ' ' . $person->getLastname() . ' ' . $person->someFun() . "\n");
    }

    class X {
        function getFirstname(){
       echo ">>>"; 
       }
        } 
        $x = new X();
        
        print("-----------------" . '<br>');
        function poly(Person $p){
        print($p->getFirstname() . '<br>');
        }
        
        poly($people[0]); // Employee
        poly($people[1]); // Person
        // poly($x); // X Uncaught TypeError: Argument 1 passed to poly() must be an instance of Person, instance of X given
        print("-----------------" . '<br>');
?>