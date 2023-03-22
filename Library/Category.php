<?php

class Cetagory implements FatherInterface{
    private $Ten_chu_M;
    private $Ma_Chu_m;
    private $Mo_ta;

    public function Category($Ten_chu_M,$Ma_Chu_m,$Mo_ta){
        $this->Ten_chu_M=$Ten_chu_M;
        $this->Ma_Chu_m=$Ma_Chu_m;
        $this->Mo_ta=$Mo_ta;
    }


    public function Display_Infor(){
        return "Tên mã chuyê mục: ".$this->Ten_chu_M."<br>"."Mã chuyên mục ".$this->Ma_Chu_m."<br>"."Mô tả ".$this->Mo_ta."<br>";
    }
}



?>