<?php

    interface super{
        public function MainNotice();

    }
    class Teacher implements super{
        public function MainNotice(){
            echo "Teacher send notice";
        }
    
    }
    class Student implements super{
        public function MainNotice(){
            echo "Student send notice";
        }
    
    }
    class Sub implements super{
        public function MainNotice(){
            echo "Sub send notice";
        }
    
    }
    $t = new Teacher();
    $s1 = new Student();
    $s = new Sub();
    $myArray = array($t,$s1,$s);

    foreach ($myArray as $key => $value) {
        echo $value->MainNotice()."<br/>";
    }

?>