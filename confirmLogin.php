<?php

  class Login{

    public function confirmLogin($email, $pwd){
      $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

      if($connection->connect_error){
        echo("Error! Could not connect to the database".$connection->connect_error);
      }else{

          $email = $this->cleanData($email);
          $pwd = $this->cleanData($pwd);

          $sql = "SELECT `EMAIL_ADDRESS`, `PASSWORD` FROM `users`
                  WHERE `EMAIL_ADDRESS` = '".$email."' and `PASSWORD` = '".$pwd."';";

          $result = $connection->query($sql);
          $row = $result->num_rows;

          if($row == 1){
    
            $row = $result->fetch_assoc();

            $_SESSION['EMAIL'] = $row['EMAIL_ADDRESS'];
            $_SESSION['PASSWORD'] = $row['PASSWORD'];

            return true;
          }
            $connection->close();
      }
    }
  }


?>