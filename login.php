<?php

$email = $pwd = "";
$emailVal = "";
$emailErr = $pwdErr = "";

$flag = true;
if($_SERVER['REQUEST_METHOD'] == "POST"){

  // If the email field is empty, show error, otherwise save data

  if(empty($_POST['email'])){
    $emailErr = " * This field is required!";

    $flag = false;
  }else if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
    header("Location: login.php");
    $emailVal = "* Invalid E-mail Format!";
    $email = "";
  }else{
    $email = cleanData($_POST['email']);
  }

  if(strlen($_POST['pwd']) < 4){
    $pwdErr = " * Your password must be 4-16 characters long!";

    if(empty($_POST['pwd'])){
      $pwdErr = " * This field is required!";
    }else{
      $pwd = cleanData($_POST['pwd']);
    }
  }
  
  // header("Location: login.php?error = Invalid Email por Password!");
  // exit();
  // If the password field is empty, show error, otherwise save data
                    
  // if(empty($_POST['pwd'])){
  //   $pwdErr = " * This field is required!";
  //   $flag = false;
  // }

}

require("connection.php");

  if($flag){
    $c = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if($c->connect_error){
        die("Error encountered! ".$c->connect_error);
    }else{
            $sql = "SELECT * FROM users WHERE `EMAIL` ='".$email."' AND `PASSWORD` = '".$pwd."'";
            $result = $c->query($sql);
    }
  }







function cleanData($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>It's different in a "Rush" || Login Page - Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body style="background: #fff;">

      <img src="assets\stock-vector-fast-delivery-shopping-cart-icon-thin-line-for-web-and-mobile-modern-minimalistic-flat-design-282638867-removebg-preview-removebg-preview.png" alt="" width="100" height="120" style="margin-left: 65%;">

 
      <main class="form-signin" style="margin: 0% auto; width: 30%;">
         <form class="px-3 py-4 form border" style="background: #fff;" action="proxy.php?log= Login" method="POST">
          
          <h1 class="h3 mb-3 fw-normal text-dark px-2 py-3">Login</h1>

           <!-- Email Field   -->

          <div class="form">
              <label for="validationCustomPassword" class="form-label">E-mail Address</label>
              <input type="text" class="form-control rounded-0 border border-dark border-0 border-bottom my-4" id="validationCustomPassword" placeholder="abc@example.com" required>
              <div class="invalid-feedback">
                This field is required!
              </div>
          </div>

           <!-- Password Field   -->

          <div class="form">
              <label for="validationCustomPassword" class="form-label">Password
                <?php
                    if(empty($_POST['pwd'])){
                      echo "<span 'style= color: red;'>$pwdErr</span>";
                    }else{
                      $pwd = $_POST['pwd'];
                    }
                ?>
              </label>
              <input type="text" class="form-control rounded-0 border border-dark border-0 border-bottom my-4" id="validationCustomPassword" required placeholder="Enter your password">
              <div class="invalid-feedback">
                Invalid password
              </div>
            </div>
          </div>

          <!-- <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <label>
            <input type="checkbox" value="remember-me"> I want to recieve Rush's Newsletter with the best deals and offers
            </label>
          </div> -->
             <div class="col-12">
                <button class="btn btn-lg w-100 btn btn-lg rounded-0 text-light" style="background: #d94174; border: 1px solid #d94174;" type="submit">Submit form</button>
              </div>
            <label style="margin: 2% 0 0 27%;">
              <a href="register.php">Don't have an account?</a>
            </label>
        </form>
      </main> 
 


<!-- <form class="px-3 py-4 form border needs-validation" novalidate>
<h1 class="h3 mb-3 fw-normal text-dark px-2 py-3">Login</h1>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="validationCustom01" required>
    <div class="invalid-feedback">
      Invalid email
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomPassword" class="form-label">Password</label>
    <input type="text" class="form-control rounded-0 border border-dark border-0 border-bottom my-4" id="validationCustomPassword" required>
    <div class="invalid-feedback">
      Invalid password
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form> -->


<script>
  (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

</body>
</html>