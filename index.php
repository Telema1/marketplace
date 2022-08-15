<?php
session_start();

// database connection file
include("inc/config.php");

// take user to login if they are not logged in
if(!(isset($_SESSION['userid']))){
    echo "<script>location= 'login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
  <?php require("inc/nav.php"); ?>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>


  <div class="row justify-content-center">
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Untitled-3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/Untitled-1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/Untitled-4.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
      </div>
    </div>
  </div>
 

  <h3 class="text-center py-5"> Featured Products</h3>
  <div class="row justify-content-center">
    <div class="col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/p1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pretty in Pink Headphones</h5>
          <p class="card-text">$40.00</p>
              <a href="#" class="btn btn-success"> Shop now</a>
        </div>
      </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/p2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Shirts</h5>
          <p class="card-text">$30.00</p>
            <a href="#" class="btn btn-success"> Shop now</a>
        </div>
      </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/p3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Plain-tees</h5>
          <p class="card-text">$10.00</p>
              <a href="#" class="btn btn-success"> Shop now</a>
        </div>
      </div>
    </div>
        
  </div>

  <div class="py-5 category"> 
    <h3>Categories</h3>
    <a href="viewmore.php" class="link mt-2 ml-5">View more</a>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/p1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gadgets</h5>
          <p class="card-text">
          <!-- <a href="#" class="btn btn-success"> Shop now</a> -->
          </p>
              
        </div>
      </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/makeup.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Makeup Products</h5>
          <p class="card-text">
          <!-- <a href="#" class="btn btn-success"> Shop now</a> -->
          </p>
            
        </div>
      </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/accessory.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Accessories</h5>
          <p class="card-text">
          <!-- <a href="#" class="btn btn-success"> Shop now</a> -->
          </p>
              
        </div>
      </div>
    </div>
  
  </div>
  <div class="row justify-content-center">
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/shoe.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Men Shoes</h5>
          <p class="card-text"></p>
              <!-- <a href="#" class="btn btn-success"> Shop now</a> -->
        </div>
      </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/women shoe.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Women Shoes</h5>
          <p class="card-text"></p>
              <!-- <a href="#" class="btn btn-success"> Shop now</a> -->
        </div>
      </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
      <div class="card">
        <img src="images/kids.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kids clothings</h5>
          <p class="card-text"></p>
              <!-- <a href="#" class="btn btn-success"> Shop now</a> -->
        </div>
      </div>
    </div>
  </div>
  
  <div class="row justify-content-center">
      <div class="col-10">
      <h3 class="text-center py-5"> This weeks top sales</h3>
      <div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicatorss" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicatorss" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicatorss" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/bag.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/Untitled-1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/Untitled-4.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicatorss" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicatorss" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>

      </div>
     </div>
  
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>