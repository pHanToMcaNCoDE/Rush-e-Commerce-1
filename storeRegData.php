<?php
session_start();

class Register{

  private $c;

  public function storeRegData($fname, $oname, $email, $add, $dob, $phone, $bname, $state, $sex, $pwd, $rPwd){
    $c = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    if($c->connect_error){
      die("Cannot connect to the database ".$c->connect_error);
    }else{

      $fname = $c->real_escape_string($fname); 
      $oname = $c->real_escape_string($oname);
      $email = $c->real_escape_string($email);
      $add = $c->real_escape_string($add);
      $dob = $c->real_escape_string($dob);
      $phone = $c->real_escape_string($phone);
      $bname = $c->real_escape_string($bname);
      $state = $c->real_escape_string($state);
      $sex = $c->real_escape_string($sex);
      $pwd = $c->real_escape_string($pwd);
      $rPwd = $c->real_escape_string( $rPwd);

      $userID = $this->userIdGen();


        $sql = "INSERT INTO `users`(`USER_ID`, `FIRST_NAME`, `OTHER_NAMES`, `EMAIL_ADDRESS`, `ADDRESS`, `DATEOFBIRTH`, `PHONE`, `BUSINESS_NAME`, `STATE`, `SEX`, `PASSWORD`, `R_PASSWORD`)
              VALUES ('".$userID."', '".$fname."','".$oname."','".$email."','".$add."','".$dob."','".$phone."','".$bname."','".$state."','".$sex."','".$pwd."','".$rPwd."')";

        if($c->query($sql)){
          $_SESSION['FNAME'] = $fname;
          
          $c->close();
          return true;
        }      
      }
    }
 

  private function userIdGen(){
    $c = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    if($c->connect_error){
      die("Cannot connect to database ".$c->connect_error);
    }else{
      $sql = "SELECT * FROM `useridgen`;";

      $result = $c->query($sql);

      $row = $result->fetch_assoc();

      $mod = "";
      $start = $row['START'];
      $curr = $row['CURRENT'];
      $str = "usr-";

      if($start >= $curr){
        $curr++;
        if($curr < 10){
          $mod = "0".$curr;
        }
      }else{
        $curr++;

        if($curr < 10){
          $mod = "0".$curr;
        }else{
          $mod = $curr;
        }
      }

      $sql = "UPDATE `useridgen` SET `CURRENT` = '".$curr."';";
      
      $c->query($sql);
        
      return $str.$mod;

    }
    
    $c->close();

  }
}





?>