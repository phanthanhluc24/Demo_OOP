<?php
include "./ProcessForm.php";
 if (isset($_POST['capnhat'])) {
    $Full_name = $_POST['name'];
    $Province = $_POST['province'];
    $Gender = $_POST['select'];
    $ID_update=$_POST['update'];
    if ($Full_name != "" && $Province != "" && $Gender != "") {
        $add = new Add_person();
        $add->Update($Full_name, $Province, $Gender,$ID_update);
    } else {
        echo "<script> alert('Không thành công')</script>";
    }
}
?>