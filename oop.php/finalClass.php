<?php 
        class Person {
        public final function doX(){
        print(">>>>");
        } 
    }
        class Employee extends Person { // gali tik paveldeti, bet is vaikines klases nepavyks modifikuoti f-jos jei ji pazymeta final
        }
    

?>