<?php
    class A{
        public $a;
        function Tinh($x){
            echo $x*2;
        }
    }

    class B extends A{
        function coun(){
            echo "<br>Class B";
        }
    }

    $b= new B;
    $b->Tinh(5);
    $b->coun();


    class Employee{
        public $Name;
        public $Age;
        public $Province;

        public function Sinh(){
            echo "Tôi năm nay $this->Age vào luc".date("h:i:s");
        }

        public function Die(){
            echo "Tôi năm nay $this->Age vào luc".date("h:i:s");
        }
    }

    $c=new Employee;
    $c->Sinh();
?>