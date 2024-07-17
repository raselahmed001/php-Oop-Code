<?php

    abstract class Teacher{
        abstract function msg($n1,$n2);
    }

    class Student extends Teacher{

        function msg($n1,$n2){
            echo "I am student <br>";
            echo $n1+$n2;
        }
    }

    $s1 = new Student();
    $s1->msg(10,20);

?>