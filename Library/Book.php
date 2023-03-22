<?php
    interface FatherInterface{
       function Display_Infor();
    }


    class Book implements FatherInterface{
        private $So_id;
        private $Title;
        private $NhXB;
        private $NXB;
        private $Private;
        public function setBook($So_id,$Title,$NhXB,$NXB,$Private){
            $this->So_id=$So_id;
            $this->Title=$Title;
            $this->NhXB=$NhXB;
            $this->NXB=$NXB;
            $this->Private=$Private;

        }
        public function Display_Infor(){
            return "Mã số sách là: ".$this->So_id."<br>"."Tên sách là: ".$this->Title.
            "<br>"."Nhà Sản Xuất là: ".$this->NhXB."<br>"."Năm  xuất bản là: ".$this->NXB.
            "<br>"."Có giá là: ".$this->Private."<br>";
        }

    }

    class Library_Book extends Book{
        private $ID_lib_book;
        private $VTKe;
        private $NDVThV;
        private $So_luon_CS;

        public function SetLibrary($So_id,$Title,$NhXB,$NXB,$Private,$ID_lib_book,$VTKe,$NDVThV,$So_luon_CS)
        {
            parent::setBook($So_id,$Title,$NhXB,$NXB,$Private);
            $this->ID_lib_book=$ID_lib_book;
            $this->VTKe=$VTKe;
            $this->NDVThV=$NDVThV;
            $this->So_luon_CS=$So_luon_CS;
        }

        public function Display_Infor(){
            return "Id sách :".$this->ID_lib_book."<br>".
            "Vị trí kệ sách: ".$this->VTKe."<br>".
            "Thư viện: ".$this->NDVThV."<br>".
            "Số lượng cuốn sách: ".$this->So_luon_CS."<br>";
        }
    }



    



    
    
    




?>