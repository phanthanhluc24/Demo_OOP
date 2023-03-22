<?php
include "./Author.php";
// include "./Book.php";
include "./Library.php";
include "./Loan.php";
include "./Category.php";
include "./Student.php";


$author=new Author();
$author->GetAuthor("Phan Thanh Lực","13-09-2003","Nam","Quảng Trị");
echo $author->Display_Infor();
echo "###------###"."<br>";
$book=new Library_Book();
$book->SetLibrary("A1","Truyện ma","Phan Thanh Lưc",2020,34000.000,"U8",61,"Đà Nẵng","5");
echo $book->Display_Infor();
echo "###------###"."<br>";

$loan=new Loan();
$loan->SetLoan("98","14-03-2015",6);
echo $loan->Display_Infor();
echo "###------###"."<br>";
$student=new Student();
$student->Student("PO9","A Thi","12-09-2002","PNV24B","CNTT");
echo $student->Display_Infor();
echo "###------###"."<br>";
$category=new Cetagory();
$category->Category("Hài","23M","Hay sôi động");
echo $category->Display_Infor();
echo "###------###"."<br>";
$Library=new Library();
$Library->setLibrary("23H","Đà Nẵng");
$Library->Display_Infor();


?>