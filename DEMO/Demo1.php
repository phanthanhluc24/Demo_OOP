<?php

    class Demo1{
        public $Name;
        public $Pro;

        public function __construct($Name,$Pro)
        {
            $this->Name=$Name;
            $this->Pro=$Pro;
        }
    }

    $run=new Demo1("Phan Thanh Lực","Province");
    
    echo $run->Name."<br>";
    echo $run->Pro; 
    

?>