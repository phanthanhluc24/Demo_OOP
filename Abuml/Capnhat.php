<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include "./ProcessForm.php";

    $edit=new Add_person();
    $row=$edit->Edit();

?>
   <form action="./Edit.php" method="post">
 <div class="form-group">
     <label for="exampleInputPassword1">Full_Name</label>
     <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Full name" value="<?php echo $row["Full_Name"] ?>">
 </div>
     <input type="hidden" name="update" class="form-control" id="exampleInputPassword1" placeholder="Full name" value="<?php echo $_GET['update']; ?>">
 <div class="form-group">
     <label for="exampleInputPassword1">Province</label>
     <input type="text" name="province" class="form-control" id="exampleInputPassword1" placeholder="Province" value="<?php echo $row["Province"] ?>">
 </div>
 <div class="form-group">
     <label for="exampleFormControlSelect1">Select gender</label>
     <select class="form-control" name="select" id="exampleFormControlSelect1" value="<?php echo $row["Gender"] ?>">
         <option value="Male">Male</option>
         <option value="Famale">Famale</option>
     </select>
 </div>
 <button type="submit" name="capnhat" class="btn btn-danger">Update</button>
</form>
   
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
