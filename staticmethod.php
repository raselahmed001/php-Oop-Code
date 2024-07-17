<?php

class Person{
    public static $name="Ahmed";
    public static function get(){
        // echo "Rasel";
        echo self::$name;
    }
}
Person::get();
Person::$name;


?>