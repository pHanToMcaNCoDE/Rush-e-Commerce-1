<?php

require("connection.php");
require("confirmLogin.php");
require("storeRegData.php");

if(isset($_GET['msg']) && $_GET['msg'] == 'Register'){
  $fname = $_POST['fname']; 
  $oname = $_POST['oname'];
  $email = $_POST['email'];
  $add = $_POST['add'];
  $dob = $_POST['dob'];
  $phone = $_POST['phone'];
  $bname = $_POST['bname'];
  $state = $_POST['state'];
  $sex = $_POST['sex'];
  $pwd = $_POST['pwd'];
  $rPwd = $_POST['rPwd'];

  

  // if(isset($_POST['submit'])){

  //   session_start();

  //   $_SESSION['FNAME'] = $fname;
  // }

  $reg1 = new Register();

  if($reg1->storeRegData($fname, $oname, $email, $add, $dob, $phone, $bname, $state, $sex, $pwd, $rPwd)){
    header("Location: commerce.php?success=You have registered successfully!");
  }else{
    header("Location: register.php?msg = Error!");
  }
}

if(isset($_GET['log']) && $_GET['log'] == "Login"){

  $log = new Login();

  if($log->confirmLogin($email, $pwd)){
    header("Location: commerce.php?success=Successfully Logged In!");
  }else{
    echo("Error!");
  }
}
?>