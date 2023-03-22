<?php

    class Person{
        public $Name;
        public $NumberStudent;

        public function __construct($Name,$NumberStudent)
        {
            $this->Name=$Name;
            $this->NumberStudent=$NumberStudent;
        }
        public function GetName(){
            return $this->Name;
        }
        public function GetNumber(){
            return $this->NumberStudent;
        }
    }

    $Student =new Person("Phan Thanh Lực",01);
    echo $Student->GetName()."<br>";
    echo $Student->GetNumber()."<br>";
    $Student1 =new Person("Nguyễn Văn Biên",02);
    echo $Student1->GetName()."<br>";
    echo $Student1->GetNumber()."<br>";
    $Student2 =new Person("A Tiến ",03);
    echo $Student2->GetName()."<br>";
    echo $Student2->GetNumber()."<br>";
?>
