<?php
namespace telegram;




include 'telegram/Wehicle/Car.php';

class TestClass {
 
    public static function test() {
        
        $car = new Car('Bugatti', 300, 2016, 'sedan'); 
        return $car;
    }
}


var_dump(TestClass::test());