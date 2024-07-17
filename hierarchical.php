<?php

    class A{
        public function ASend(){
            ECHO "i am parent class <br>";
        }
    }

    class B extends A{
        public function BSend(){
            echo "I am child class B <br>";
        }
    }

    class C extends A{
        public function CSend(){
            echo "I am child class c";
        }
    }

    $obj_c = new C();
    $obj_c->ASend();
    $obj_c->CSend();
    
?>