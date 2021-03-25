<?php 
    class Person {
        private $name;
        private $lastname;

    public function __construct($name, $lastname) {
        $this->name = $name;
        $this->lastname = $lastname;
    }
    public function getName() {
        return $this->name;
    }
    public function getLastname() {
        return $this->lastname;
    }
}

    class Employee extends Person {
        private $employerId;

        public function __construct($name, $lastname, $employerId) {
            parent:: __construct($name, $lastname);
            $this->employerId = $employerId;
        }

        public function getEmployerId() {
            return $this->employerId;
        }    
    }

    $persona = new Employee("Milda", "Mildaite", 13);
    print($persona->getName() . ' ' . $persona->getLastname() . ' ' . $persona->getEmployerId());

?>