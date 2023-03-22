 <?php
    class Test extends DB
    {
        private $Full;
        private $Emai;
        private $Pas;
        private $Confirm_Pas;
        public function getUser()
        {
            $sql = "SELECT * from user ";
            $stmt = $this->connect()->query($sql);
            // 
            ?>
            <table class="table">
        <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Action</th>
      </tr>
        </thead>
        <tbody>
      <?php while (($row = $stmt->fetch())) : ?>
        <tr>
          <td><?php echo $row['ID'] ?></td>
          <td><?php echo $row['Full_Name'] ?></td>
          <td><?php echo $row['Email'] ?></td>
          <td><?php echo $row['Pass'] ?></td>
          <td> <a href="User.php?delete=<?php echo $row['ID'] ?>">Xóa</a> <a href="sua.php?update=<?php echo $row['ID'] ?>">Cập nhật</a></td>
        </tr>
      <?php endwhile; ?>
        </tbody>
        </table>
        <?php

        // public function InserUser($Full, $Emai, $Pas, $Confirm_Pas)
        // {   
        //     $this->Full=$Full;
        //     $this->Emai=$Emai;
        //     $this->Pas=$Pas;
        //     $this->Confirm_Pas=$Confirm_Pas;

        //     $sql = "INSERT INTO user (Full_Name, Email, Pass, Confirm_Pass) VALUES (?, ?, ?, ?)";
        //     $stmt = $this->connect()->prepare($sql);

        //     $full_name =  $this->Full=$Full;
        //     $email = $this->Emai=$Emai;
        //     $pass =$this->Pas=$Pas;
        //     $confirm_pass =  $this->Confirm_Pas=$Confirm_Pas;

        //     $stmt->execute([$full_name, $email, $pass, $confirm_pass]);
        //   }  
    }
    
        }
    ?>