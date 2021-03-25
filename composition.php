<?php
      /*---------- HAS A ------------*/
    
    
    class Car {
        private $engine;  // composition

        /* constructor dependency injection */

        function __construct(Engine $engine) { 
            $this->engine = $engine;   
        }
    
        /* no dependency injection - nerekomenduojama taip kurti objektu
        function __construct() { 
            $this->engine = new Engine();
        }                               */     
    

        /* setter dependency injection 
         function setEngine(Engine $engine) {
             $this->engine = $engine;  
        }                             */
        
    }

    class Engine {
        private $maker = "BMW";
        function __construct(){
            print("Engine is ON! (constructor)");
        }
        function __toString(){
            return "This is an awesome engine by " . $this->maker;
        }
    }
        
       $engine = new Engine();
       $car = new Car($engine);
       var_dump($car);
    //    $car2 = new Car(new Engine());
    //    print($car->getEngine());




?>