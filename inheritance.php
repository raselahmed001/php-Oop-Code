<?php
    //single inheritance
    class Father{
        public $jomi="10bigha", $taka=1000;

        function FatherSayText(){
            echo "Ami tomader sompotti dan kore dilam";
        }
    }
    class Child extends Father{

        function __construct($j,$t){
            $this->jomi = $j;
            $this->taka = $t;
        }
        function Display(){
            echo "Jomi = ".$this->jomi."<br>";
            echo "Jomi = ".$this->taka."<br>";
        }
    }
    $son1 = new Child("101 biga", 10000);
    $son1->Display();
    $son1->FatherSayText();

?>