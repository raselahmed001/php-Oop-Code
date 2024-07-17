<?php

    interface canSwim{
        public function Swim();
            
    }
    interface canFly{
        public function Fly();

        
    }
    class Duck implements CanSwim, CanFly{
        public function Swim(){
            echo "The duck is swiming.";
        }
        public function Fly(){
            echo "The duck is flying.";
        }
    }

    $duck1 = new Duck();
    $duck1->Fly();
    $duck1->Swim();

?>