<?php
session_start();
require ('inc/config.php');


$sql= "SELECT * FROM products_tbl";

$query = mysqli_query($connection, $sql);

   if(isset($_POST['submitForm'])){
        $name = $_POST['pname'];
        $price = $_POST['pprice'];
        $description = $_POST['pdescription'];
        echo "Name : $name <br> Price : $price <br> Description : $description";
    }else{
        echo "no submit";
        // redirect to homepage
    }
    
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Categories</title>
</head>
<body>
    <?php require("inc/nav.php"); ?>

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
    <div class="py-5 category"> 
    <h3>Products</h3>

    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="row">
        
        <?php
            if(mysqli_num_rows($query) > 0){
                // loop through all the results
                while($res = mysqli_fetch_assoc($query)){
                //   echo "productname: ". $res['productname']. ", description: ".$res['description']. ", price: ". $res['price']. ", product_img: ".$res['product_img']. ", quantity: ".$res['quantity']. "<br>";
            ?>
                <div class="col-lg-3 col-md-2 col-sm-6 mb-4">
                    <div class="card">
                    <img src="images/<?=$res['product_img']?>" class="card-img-top pname" alt="...">
                    <div class="card-body">
                        <h6 class="card-title pprice"><?=$res['productname']?></h6>
                        <p class="card-text pdescription">$30.00</p>
                        <!-- <input type="number" class="form-control"> -->
                        <a href="#" class="btn btn-success button mt-2" name= "submitForm"><i class='bx bx-cart'></i> Add to cart </a>
                        
                    </div>
                    </div>
                </div>

                <?php

            }
            }else{
            echo "No result found";
            }

        ?>
        </div>
        </div>
    </div>

    <!-- <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/denim.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Mother and Daugther denim jackets</h6>
            <p class="card-text">$50.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/trouser.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Stretchy denim trousers for women</h6>
            <p class="card-text">$40.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>

    </div>
    <div class="row justify-content-center">
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/shoe.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Cloth covered shoe for men</h6>
            <p class="card-text">$20.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/winter.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Cmmfortable winter wear</h6>
            <p class="card-text">$50.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/kids.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Baby set</h6>
            <p class="card-text">$50.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div> -->
    
    </div>
    <!-- <div class="row justify-content-center">
    <div class="col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/glasses.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Summer shades <span class="badge badge-info">New</span></h6>
            <p class="card-text">$10.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button mt-2"><i class='bx bx-cart'></i> Add to cart </a>
            
                
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/watch.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Rolex watch</h6>
            <p class="card-text">$50.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/stationary.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Pretty Stationary set <span class="badge badge-info">New</span></h6>
            <p class="card-text">$40.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div> -->

    </div>
    <!-- <div class="row justify-content-center">
    <div class="col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/bagg.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">A brown bag</h6>
            <p class="card-text">$20.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button"><i mt-2 class='bx bx-cart'></i> Add to cart </a>
            
                
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/man.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Non-tarnish accessory</h6>
            <p class="card-text">$50.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/mann.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">NON-tarnish Ring</h6>
            <p class="card-text">$40.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div> -->

    </div>
    <!-- <div class="row justify-content-center">
    <div class="col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/beachwear.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Hugging red swimsuit</h6>
            <p class="card-text">$30.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button mt-2"><i class='bx bx-cart'></i> Add to cart </a>
            
                
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/denim.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Mother and Daugther denim jackets <span class="badge badge-info">New</span></h6>
            <p class="card-text">$50.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/trouser.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Stretchy denim trousers for women</h6>
            <p class="card-text">$40.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>

    </div> -->
    <!-- <div class="row justify-content-center">
    <div class="col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/beachwear.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Hugging red swimsuit</h6>
            <p class="card-text">$30.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button mt-2"><i class='bx bx-cart'></i> Add to cart </a>
            
                
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/denim.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Mother and Daugther denim jackets</h6>
            <p class="card-text">$50.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/trouser.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Stretchy denim trousers for women <span class="badge badge-info">New</span></h6>
            <p class="card-text">$40.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>

    </div> -->
    <!-- <div class="row justify-content-center">
    <div class="col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/beachwear.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Hugging red swimsuit</h6>
            <p class="card-text">$30.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button"><i mt-2 class='bx bx-cart'></i> Add to cart </a>
            
                
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/denim.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Mother and Daugther denim jackets</h6>
            <p class="card-text">$50.00</p>
             <input type="number" class="form-control">
            <a href="#" class="btn btn-success button"> < mt-2i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>
    <div class=" col-lg-3 col-md-2 col-sm-6 mb-4">
        <div class="card">
        <img src="images/trouser.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title">Stretchy denim trousers for women</h6>
            <p class="card-text">$40.00</p>
             <input type="number" class="form-control">
                <a href="#" class="btn btn-success button mt-2"> <i class='bx bx-cart'></i>Add to cart</a>
        </div>
        </div>
    </div>

    </div> -->



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
  $(document).ready(function(){
        $(".button").click(function(){

            $.ajax({
                url: 'http://localhost/marketplace/checkout.php',
                type: 'POST',
                data: {cart: 'cart_tbl'},
                success:function(data){
                alert("Succesfully added to cart")
                }   
            })
        })
    })
    
</script>
</body>
</html>