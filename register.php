<?php

// $pwdErr = "";

require("proxy.php");

// session_start();



?>

<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap & Css -->

  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- icons -->
  <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <main>
    <!-- <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Checkout form</h2>
      <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>    //style="margin-right: -30%;"-->

    
        
        <form class="form w-100" style="margin-top: -.5%;" action="proxy.php?msg=Register" method="POST">
            <h4 class="mx-5 h1">Rush<img src="assets\stock-vector-fast-delivery-shopping-cart-icon-thin-line-for-web-and-mobile-modern-minimalistic-flat-design-282638867-removebg-preview-removebg-preview.png" alt="" width="140" height="150" style="margin-left: 65%;" style="margin-left: -30%;"></h4>
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-4">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control rounded-0 border-0 border-bottom border-dark" name="fname" id="fname" placeholder="First Name" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-4">
                  <label for="lastName" class="form-label">Other Names</label>
                  <input type="text" class="form-control rounded-0 border-0 border-bottom border-dark" name="oname" id="lname" placeholder="Other Name" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
    
                <div class="col-sm-4">
                  <label for="email" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <!-- <span class="input-group-text">@</span> -->
                    <input type="email" class="form-control rounded-0 border-0 border-bottom border-dark" name="email" id="email" placeholder="you@example.com" required>
                  </div>
                </div>
              </div>


              <div class="row g-3 my-1">
                <div class="col-sm-4">
                  <label for="address" class="form-label"> Address</label>
                  <input type="text" class="form-control rounded-0 border-0 border-bottom border-dark" name="add" id="email" placeholder="1234 Main St">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
                
                <div class="col-sm-4">
                  <label for="dob" class="form-label"> Date Of Birth</label>
                  <input type="date" class="form-control rounded-0 border-0 border-bottom border-dark" name="dob" id="date" placeholder="1234 Main St">
                </div>
    
                <div class="col-sm-4">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="text" class="form-control rounded-0 border-0 border-bottom border-dark" name="phone" id="phone" placeholder="+(234)..." required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
              </div> 



              <div class="row g-3 my-1">
                <div class="col-sm-4">
                  <label for="Business Name" class="form-label">Business Name <span class="text-muted">(Optional)</span></label>
                  <input type="text" class="form-control rounded-0 border-0 border-bottom border-dark" name="bname" id="bname" placeholder="">
                </div>
    
                
                <div class="col-sm-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select rounded-0 border-0 border-bottom border-dark" name="state" id="state" required>
                    <option value="">--- Choose ---</option>
                    <option value="Kano">Kano</option>
                  </select>
                </div>
              
                <div class="col-sm-4">
                  <label for="sex" class="form-label">Sex</label>
                  <select class="form-select rounded-0 border-0 border-bottom border-dark" name="sex" id="state" required>
                    <option value="">--- Choose ---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
              </div>

                <!-- Password Field -->
              <div class="row g-3 my-1">
                <div class="col-md-6">
                    <label for="password" class="form-label">Create A Password <span style="color: red;"><?php  #if(empty($_POST['pwd'])) echo $pwdErr;  ?></span></label>
                    <input type="password" name="pwd" class="form-control rounded-0 border-0 border-bottom border-dark" id="pwd" placeholder="8-16 characters" required style="position: relative;">
                  <div class="pass">  
                    <div class="pas-icons">
                      <i class="fa-solid fa-eye"></i>
                      <i class="fa-solid fa-eye-slash"></i>
                    </div>
                    <div class="pas-policies">
                      <div class="length"> 8-16 Characters</div>
                      <div class="upper">At most 1 uppercase character</div>
                      <div class="special">At least 1 Special Character</div>
                    </div> 
                  </div>
                    
                </div>        

                <div class="col-md-6">
                  <label for="password" class="form-label">Re-Enter Your Password</label>
                  <input type="password" name="rPwd" class="form-control rounded-0 border-0 border-bottom border-dark" id="pwd" placeholder="Enter Your Password" required>
                </div>
              </div>
              

          
              <button class="w-25 btn btn-primary btn-lg my-4 rounded-0" type="submit" style="margin-left: 35%; background: #d94174; border: 1px solid #d94174;">Submit</button>
          <!-- </div> -->
        </form>
      </div>
    </div>
  </main>
  
  <script src="js\script.js"></script>
</body>
</html>