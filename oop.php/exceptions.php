<?php
    function checkNum($number) {
        if($number > 1) {
            throw new Exception("Value must be 1 or below"); // Exception yra objektas (OOP)
        }
        return true;
        }
        
        try {
            checkNum(5); // apgaubiame pavojingą kodą try bloku
        } catch(Exception $e) {   // (exception (tai objekto tipas), $e (laikinas vardas)
            echo 'Message: ' . $e->getMessage();
        }
        print("<br>Po exception!");




?>