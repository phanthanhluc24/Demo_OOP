<?php



    class People{
        protected $Name;
        protected $Province;

        public function setInfor($Name,$Province){
            $this->Name=$Name;
            $this->Province=$Province;
        }
        public function Display(){
            return "Tên là: ".$this->Name."<br>".
            "Sinh ra ở :".$this->Province."<br>";
        }
    }

    trait School{
        protected $Name_Sch;
        protected $Class;

        public function setInforsch($Name_Sch,$Class){
            $this->Name_Sch=$Name_Sch;
            $this->Class=$Class;
        }

        public function Displayschool(){
            return "Học ở trường: ".$this->Name_Sch."<br>". 
            "Tại lớp: ".$this->Class."<br>";
        }
    }

    class student extends People{
        use School;
    public function setPersonInfo($Name, $Province,$Name_Sch, $Class)
    {
        parent::setInfor($Name, $Province);
        $this->setInforsch($Name_Sch, $Class);
    }
    }

    $stu =new student();
    $stu->setPersonInfo("Phan Thanh Lực","Quảng Trị","PNV","24A");
    echo $stu->Display();
    echo $stu->Displayschool();
    

?>