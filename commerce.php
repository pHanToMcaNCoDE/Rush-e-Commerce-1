<?php

// require("storeRegData.php");

require("connection.php");

session_start();

?>

<style>
        /* body{
          overflow-x: hidden;
        } */

        img {
          height: 250px;
        }
        /* .owl-prev{
          padding: 10px;  
        }
        .owl-prev span{
          font-size: 20px;
        }
        .owl-next{

        } */
        
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script> -->
  <!-- <script type="text/javascript" src="Scripts/bootstrap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
 
  <!-- JS FIle -->
  <script src="js/script.js" type="text/javascript"></script>

</head>
<body class="bg-light">
  
<nav class="navbar navbar-expand-lg navbar-dark" style="background: #ffffff;">
  <a class="navbar-brand mx-3 text-dark" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
 
  
  <form class="form-inline d-flex my-lg-2">
    <div class="form">
      <input class="form-input input-normal px-2 py-2 border border-1 rounded-0" type="search" size='90'  placeholder="Search products" style="margin-left: 12%;">
    </div>
    <button class="btn-right btn-outline my-sm-0 px-4 rounded-0 rounded-left" type="submit" style="background: #d94174; border: #d94174; color: #f0f1f1; margin-left: 5%;"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
   
  <!-- </div> -->
  
  <div class="dropdown show">
      <a href="#" class="d-flex align-items-center text-white dropdown-toggle text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-solid fa-user btn border-0 ms-5 text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;"></i>
        <strong class="text-dark" style="font-size: 15px; font-family: sans-serif;"><?php echo $_SESSION['FNAME']; ?></strong><i class="fa-solid fa-angle-down text-dark ms-2" style="font-size: 13px;"></i>
      </a>
      <ul class="dropdown-menu dropdown-menu-light text-small rounded-0" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">My Rush Account</a></li>
        <li><a class="dropdown-item" href="#">Inbox</a></li>
        <li><a class="dropdown-item" href="#">Saved Items</a></li>
        <li><hr class="dropdown-divider">Rush Coupons</li>
        <hr class="py-2">
        <li><a class="dropdown-item" href="#">Log out</a></li>
      </ul>
    </div>


    <div class="about d-flex">
      <a class="link text-dark d-flex text-decoration-none" href="#" tabindex="-1" aria-disabled="true"> 
        <i class="fa-solid fa-circle-question ms-4 my-3" style="font-size: 18px; cursor: pointer;"></i><p class="ms-2 my-3" style="font-size: 15px; font-family: sans-serif cursor: pointer;">about us</p>
      </a> 
    </div>
    

    <div class="cart text-dark ms-4">
    <a class="link text-dark d-flex" href="#" tabindex="-1" aria-disabled="true" style="text-decoration: none;"><i class="fa-solid fa-cart-shopping  my-3"></i><p class="ms-2 my-3 text-dark" style="font-size: 15px; font-family: sans-serif;">cart</p></a>
    </div>
  </div>
</nav>

<div class="clearfix overflow-hidden">
  <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 300px; position: absolute; top: 18%; left: 3%; background: #ffffff;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Category</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="#" class="nav-link text-dark my-1" style="font-size: 17px; letter-spacing: 2px; font-family: sans-serif;">
          <i class="fa-solid fa-gauge"></i>
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Automobile
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-dark my-1" style="font-size: 17px; letter-spacing: 2px; font-family: sans-serif;">
         <i class="fa-solid fa-laptop"></i>
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#grid"/></svg>
          Electronics
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-dark my-1" style="font-size: 17px; letter-spacing: 2px; font-family: sans-serif;">
          <i class="fa-solid fa-shirt"></i>
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#table"/></svg>
          Fashion
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-dark my-1" style="font-size: 17px; letter-spacing: 2px; font-family: sans-serif;">
          <i class="fa-solid fa-pizza-slice"></i>
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Groceries
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-dark my-1" style="font-size: 17px; letter-spacing: 2px; font-family: sans-serif;">
          <i class="fa-solid fa-couch"></i>
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#table"/></svg>
          Furniture
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark my-1" aria-current="page" style="font-size: 17px; letter-spacing: 2px; font-family: sans-serif;">
          <i class="fa-solid fa-gamepad"></i>
          <svg class="bi me-0" width="16" height="16"><use xlink:href="#home"/></svg>
          Games
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-dark my-1" style="font-size: 17px; letter-spacing: 2px; font-family: sans-serif;">
          <i class="fa-solid fa-ellipsis"></i>
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Others
        </a>
      </li>
    </ul>
    <hr class="mb-5">
</div>
 


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="position: absolute; top: 18%; left: 30%; right: 1%;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 32rem; width: 55rem;">
        
      <img class="d-block w-150" src="assets/pexels-guduru-ajay-bhargav-863988.jpg" alt="Third slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Get the best sport kit</h1>
            <p>At limited prices only.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="height: 32rem; width: 55rem;">
        <img class="d-block" style="weight: 50%;" src="assets/man-lifts-bar-bell.jpg" alt="Third slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Stay fit at home.</h1>
            <p>Explore the latest equipment to keep you healthy.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      
      <div class="carousel-item" style="height: 32rem; width: 55rem;">
        
        <img class="d-block" style="weight: 50%;" src="assets/wedding-vows-and-wedding-rings.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="text-light">Get the latest accessories.</h1>
            <p class="text-light">Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<section class="products">
  <h2 class="p-3 h3">Explore</h2>
      <div class="row">
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <div class="con">
            <h3 class="h5">Electronics</h3>
            <img src="assets/pexels-mockupeditorcom-205316.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
          </div>
        </div>

        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Toys</h3>
          <img src="assets/pexels-pixabay-63637.jpg" width="263" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Get fit at home</h3>
          <img src="assets/pexels-pixabay-221247.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Groceries</h3>
          <img src="assets/pexels-polina-tankilevitch-4110226.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
      </div>
</section>

<section class="products2">
      <div class="row">
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <div class="con">
            <h3 class="h5">Get the latest foot wears</h3>
            <img src="assets/pexels-melvin-buezo-2529147.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
          </div>
        </div>

        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Back to school</h3>
          <img src="assets/pexels-jamal-yahyayev-12861343.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Get quality pet supplies</h3>
          <img src="assets/pexels-chevanon-photography-1108099.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Culteries</h3>
          <img src="assets/pexels-karolina-grabowska-4397817.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
      </div>
</section>

<!-- Multiple - Line Carousel used to show products -->

    <div class="products2 container-fluid my-5">
      <h1 class="h3">Latest fantasy-drama books</h1>
        <div class="row py-3" style="background: #fff;">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-mick-haupt-5210960.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>

                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-pixabay-256450.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-polina-zimmerman-3747279.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-thought-catalog-904620.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-ready-made-3847640.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-ann-h-1765033.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<section class="products2">
  <h2 class="p-3 h3">Most purchased beauty products</h2>
      <div class="row">
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <div class="con">
            <!-- <h3 class="h5">Get the latest foot wears</h3> -->
            <img src="assets/pexels-kinkate-208052.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
          </div>
        </div>

        <div class="col p-3 mx-2" style="background: #ffffff;">
          <!-- <h3 class="h5">Back to school</h3> -->
          <img src="assets/pexels-kinkate-212236.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <!-- <h3 class="h5">Get quality pet supplies</h3> -->
          <img src="assets/pexels-dan-cristian-pădureț-1377034.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <!-- <h3 class="h5">Hi there!</h3> -->
          <img src="assets/pexels-shiny-diamond-3373739.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
      </div>
</section>



<section class="products2">
      <div class="row">
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <div class="con">
            <h3 class="h5">Get the latest foot wears</h3>
            <img src="assets/pexels-melvin-buezo-2529147.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
          </div>
        </div>

        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Back to school</h3>
          <img src="assets/pexels-jamal-yahyayev-12861343.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Get quality pet supplies</h3>
          <img src="assets/pexels-chevanon-photography-1108099.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
        <div class="col p-3 mx-2" style="background: #ffffff;">
          <h3 class="h5">Hi there!</h3>
          <img src="assets/pexels-mockupeditorcom-205316.jpg" width="250" height="300" alt="" srcset="">
            <a href="#">See more</a>
        </div>
      </div>
</section>
    

<!-- Multiple - Line Carousel used to show products -->

    <div class="container-fluid my-5">
      <h1 class="h3">Most sold games (Inter-state)</h1>
        <div class="row py-3" style="background: #fff;">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-mick-haupt-5210960.jpg" alt="" class="card-img" style="width: 13rem;">
                        </div>
                    </div>

                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-pixabay-256450.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-polina-zimmerman-3747279.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-thought-catalog-904620.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-ready-made-3847640.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                    <div class="item" style="width: 4rem;">
                        <div class="card border-0 shadow">
                            <img src="assets/pexels-ready-made-3847640.jpg" alt="" class="card-img-top" style="width: 13rem;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: -501,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script> 
  
</body>

</html>