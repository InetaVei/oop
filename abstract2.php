<?php 
    abstract class Shape {
        private $color;
        public function __construct($c){
        $this->color = $c;
        }
        abstract public function calculateArea();
        }
        
        class Rectangle extends Shape {
            private $length;
            private $height;
            public function __construct($c, $l, $h){
            parent::__construct($c);
            $this->length = $l;
            $this->height = $h;
        }
        public function calculateArea(){ // kiekvienas nurodo savo asmenini calculateArea metoda
        return $this->length * $this->height;
        }
        }
    class Circle extends Shape {
        private $radius;
        public function __construct($c, $r){
        parent::__construct($c);
        $this->radius = $r;
        }
        public function calculateArea(){  // kiekvienas nurodo savo asmenini calculateArea metoda
        return 3.1456 * ($this->radius * $this->radius); 
        }
    }
        
        $c = new Circle("RED", 10);
        print($c->calculateArea())



?>