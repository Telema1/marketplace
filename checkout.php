<?php
session_start();
require ('inc/config.php');

$sql= "SELECT * FROM products_tbl";

if(isset($_GET['id'])){
  $id= $_GET['id'];

  $sql= "DELETE FROM `products_tbl` WHERE id = $id ";

 
}




$query = mysqli_query($connection, $sql);

$res = mysqli_fetch_assoc($query);


// // if(isset($_POST['button']))

//  # delete item from the cart
//  if (filter_input(INPUT_GET, 'action') == 'delete') {
//   # go through the products to check a product that matches the Get Id
//       foreach ($_SESSION['marketplace'] as $key => $res) {
//           if ($res['id'] == filter_input(INPUT_GET, 'id')) {
//               # remove the item
//               unset($_SESSION['marketplace'][$key]);
//           }
//       }
//       // reset session array keys so they match with product ids number array
//       $_SESSION['marketplace'] =array_values($_SESSION['marketplace']);
// }

// //check out

// if (filter_input(INPUT_GET, 'action')  == 'checkout') {
// // go through the products to check a product that matches the GET ID
// foreach ($_SESSION['marketplace'] as $key => $res) {
// # remove the iitem
// unset($_SESSION['marketplace'] [$key]);

// }
// // reset session array keys so they match with product ids number array
// $_SESSION['marketplace'] =array_values($_SESSION['marketplace']);
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
  <?php require("inc/nav.php"); ?>

      <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="viewmore.php">Categories</a></li>
      <li class="breadcrumb-item active" aria-current="page">Checkout</li>
    </ol>
  </nav>
  <div class="row justify-content-center">
    <div class="col">
    <a href="viewmore.php" class="btn btn-success btn-block mb-4">Continue Shopping</a>
    </div>
  </div>
  <div class="row justify-content-center">
      <div class="col-8">
      <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">image</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?=$res['id'];?></th>
      <td> <img src="images/<?=$res['product_img'];?>" class="card-img-top img-fluid imagee" alt="..."></td>
      <td><?=$res['productname'];?></td>
      <td><?=$res['description'];?></td>
      <td><input type="number" class="form-control"></td>
      <td>$<?=$res['price'];?></td>
     <td><a href="checkout.php?id="<?=$res['id']?> class="btn btn-danger button"></i>Remove</a> </td>
    </tr>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
  </div>





 





  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>