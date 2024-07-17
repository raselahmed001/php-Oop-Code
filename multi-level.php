<?php

   //multi-level inheritance 
//    class Cat{
//     function maw(){
//         echo "This is parent class";
//     }

//    }
//    class maw extends Cat{

//    }

//    class dog extends maw{

//    }

//    $animal = new dog();
//    echo $animal->maw();

class Animals{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function Eat(){
        echo "{$this->name} is eating";
    }
}

class Cat extends Animals{
    public function Mew(){
        echo "{$this->name} is mew class";
    }
}

class HouseCat extends Cat{
    public function Sleep(){
        echo "{$this->name} sleeping";
    }
}

$houseCat=new HouseCat('Tom', 'Green');
$houseCat->Eat();
$houseCat->Mew();
$houseCat->Sleep();

?>