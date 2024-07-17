<?php
    class Student{
        public $name;
        public $age;
        public $roll;
        public $dept;

        function setStudentInfo($stName, $stAge, $stRoll, $stDept){
            $this->name = $stName;
            $this->age = $stAge;
            $this->roll = $stRoll;
            $this->dept = $stDept;
        }

        function DisplayStudentInfo(){
            
            echo "Name :". $this->name ."<br/>";
            echo "Age :". $this->age ."<br/>";
            echo "Roll :". $this->roll ."<br/>";
            echo "Dept :". $this->dept. "<br/>";

        }
    }
    //create a object
    $s1 = new Student();

    $s1->setStudentInfo("Rasel", 24, 1, "CSE");
    $s1->DisplayStudentInfo();




?>