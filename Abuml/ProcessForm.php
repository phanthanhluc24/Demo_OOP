<?php
include "./Connect.php";



class Add_person extends DataBase
{
    private $Full_name;
    private $Province;
    private $Gender;
    public function InsertStudent($Full_name, $Province, $Gender)
    {
        $this->Full_name = $Full_name;
        $this->Province = $Province;
        $this->Gender = $Gender;

        $sql = "INSERT INTO hocsinh(Full_name,Province,Gender) values (?,?,?)";
        $stmt = $this->ketnoi()->prepare($sql);
        $stmt->execute([$Full_name, $Province, $Gender]);
        header("location:Show_student.php");
    }

    public function getStudent()
    {
        $sql = "SELECT * From hocsinh";
        $stmt = $this->ketnoi()->query($sql);
        $student=array();

        while($row=$stmt->fetch()){
            $student[]=$row;
        }
        return $student;

    }

    public function Delete(){
        $delete=$_GET['delete'];
        $sql="DELETE From hocsinh where ID_Stu=$delete";
        $stmt=$this->ketnoi()->query($sql);
        header("location:Show_student.php");
    }

    public function Edit(){
        $edit=$_GET['update'];
        $sql="SELECT *from hocsinh where ID_Stu=$edit";
        $stmt=$this->ketnoi()->query($sql);
        $row=$stmt->fetch();
        return $row;
    }

    public function Update($Full_name, $Province, $Gender,$edit){
        // $edit=$_GET['update'];
        $sql ="UPDATE hocsinh set Full_Name=?,Province=?,Gender=? where ID_Stu=?";
        $stmt=$this->ketnoi()->prepare($sql);
        $stmt->execute([$Full_name, $Province, $Gender,$edit]);
        header("location:Show_student.php");
    }
}

if (isset($_POST['ok'])) {
    $Full_name = $_POST['name'];
    $Province = $_POST['province'];
    $Gender = $_POST['select'];

    if ($Full_name != "" && $Province != "" && $Gender != "") {
        $Name = $Full_name;
        $Tinh = $Province;
        $Gtinh = $Gender;
        $add = new Add_person();
        $add->InsertStudent($Name, $Tinh, $Gtinh);
    } else {
        echo "<script> alert('Không thành công')</script>";
    }
}


?>