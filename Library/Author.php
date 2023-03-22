<?php
include "./Book.php";
    class Author implements FatherInterface{
        private $NameAu;
        private $Ngay_S;
        private $G_Tinh;
        private $Dia_chi;

        public function GetAuthor($NameAu,$Ngay_S,$G_Tinh,$Dia_chi){
            $this->NameAu=$NameAu;
            $this->Ngay_S=$Ngay_S;
            $this->G_Tinh=$G_Tinh;
            $this->Dia_chi=$Dia_chi;
        }

        public function Display_Infor(){
            return "Tên tác giả ".$this->NameAu."<br>"."Ngày sinh tác giả: ".$this->Ngay_S."<br>"."Giới tính: ".$this->G_Tinh."<br>".
            "Địa chỉ là: ".$this->Dia_chi."<br>";
        }
    }


?>