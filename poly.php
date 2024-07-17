<?php
class Base {
    public $msg = "This is base class";

    public function calculate($a,$b){
        return $a+$b;
    }
}

class child extends Base{
    public $msg = "This is child class";

    public function calculate($a,$b){
        return $a*$b;
    }
}

$c1 = new Child();
echo $c1->calculate(10,20);


?>