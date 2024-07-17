<?php

    trait PersonInfo{
        public function getName(){
            echo "Rasel";
        }

      
    }

    trait PersonOther{
        public function getInf(){
            echo "Ahmed";
    }
}
    class Admission{
        USE PersonInfo;
        use PersonOther;
    }

    $ad = new Admission();
    $ad->getName();
    $ad->getInf();

?>