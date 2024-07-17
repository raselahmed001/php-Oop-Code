<?php

    class Person{

        private $name, $age;

        function display(){
            echo $this->name;
            echo $this->age;
        }
        
    }

    $p1 = new Person();
    // $p1->name = 'John';
    // $p1->age = 22;
    $p1->display();

?>