<?php
include "./ProcessForm.php";

$add=new Add_person();
$student=$add->getStudent();
?>
<table>
<th>
    <tr>
        <td>Full Name</td>
        <td>Province</td>
        <td>Gender</td>
        <td>Action</td>
    </tr>
</th>
<tbody>
    <?php
   foreach ($student as $add) {
    ?>
    <tr>
        <td><?php echo $add['Full_Name'] ?></td>
        <td><?php echo $add['Province'] ?></td>
        <td><?php echo $add['Gender'] ?></td>
        <td><a href="./Delete.php?delete=<?php echo $add['ID_Stu'] ?>">Delete</a> <a href="./Capnhat.php?update=<?php echo $add['ID_Stu']?>">Edit</a></td>
    </tr>

<?php
   }
    ?>
</tbody>

</table>

