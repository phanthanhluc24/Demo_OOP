<?php
declare (strict_types=1);

    class Person{
        public $Name;
        public $Age;

        public function __construct(string $Name,int $Age)
        {
            $this->Name=$Name;
            $this->Age=$Age;
        }
    }

 
    $Obj=new Person("Lực",1);
    try {
       
        echo $Obj->Name."<br>";
        echo $Obj->Age;
    } catch (TypeError $th) {
        echo "Lỗi ".$th->getMessage();
    }
?>