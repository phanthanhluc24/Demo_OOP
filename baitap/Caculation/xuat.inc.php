<?php
    declare (strict_types=1);
    include "./server-autolaod.inc.php";

    $Phep_t=$_POST['choose'];
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $Tinh=new Tinh_Toan($Phep_t,(int)$num1,(int)$num2);

    try {
        echo $Tinh->Tinh();
    } catch (TypeError $th) {
        echo "Erro! ".$th->getMessage();
    }

?>