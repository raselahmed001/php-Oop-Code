<?php
// class Person{
//     function __construct(){
//         echo "default __construct0r";
//     }
// }
// new Person();

class Teacher{
    public $name, $dept, $course_code;

    function __construct($tname, $tdept, $c_code){
       $this->name = $tname;
       $this->dept = $tdept;
       $this->course_code = $c_code;

    }
    function DisplayInformation(){
        echo "Name :".$this->name . "<br>";
        echo "Dept :".$this->dept . "<br>";
        echo "Course Code :".$this->course_code . "< br>";
    }
}

$t1 = new Teacher("Rasel", "CSE", "CSE_123");
$t1->DisplayInformation();

?>