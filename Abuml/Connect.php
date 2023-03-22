<?php
class DataBase{
    protected function ketnoi(){
        $conn="mysql:host=localhost;dbname=sinhvien";
        $pdo=new PDO($conn,"root","");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }
    
}





?>