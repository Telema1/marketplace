<?php
// database connection file
include("inc/config.php");

$email = "";
$fullname = "";
$usertype = "";
$success = "";
$error = array();

// if form is submitted
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $usertype = mysqli_real_escape_string($connection, $_POST['usertype']);
    $pass = mysqli_real_escape_string($connection, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($connection, $_POST['confirmpassword']);

    // lets check for errors in the file
    if(empty($email)){
        array_push($error, "fullname cannot be empty");
    }
    if(empty($fullname)){
        array_push($error, "email cannot be empty");
    }
    if($pass != $confirmpassword){
        array_push($error, "two passwords do not match");
    }

    // if there are no errors in the form continue
    if(count($error)==0){
        // encrypt password
        $password = md5($pass);

        $sql = "SELECT * FROM users where email= '$email' ";

        $query = mysqli_query($connection, $sql);

        if(mysqli_num_rows($query)>0){
            //if email already exixts
            echo "This email is already registered";
        }else{
            // insert into database
            $insert = "INSERT INTO users(email, fullname,usertype, password)
            VALUES('$email', '$fullname', '$usertype', '$password')";

            if(mysqli_query($connection, $insert)){
                $success = "<span class='text-success'>Registered successfully</span>";
            }else{
                $success = "<span class='text-danger'>Failed</span>";
            }
        }
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="reg__form" autocomplete="off">
        <h1 class="text-center">Register</h1>
        <?php echo $success; ?>
        <?php 
        foreach($error as $errors){
            echo "<p class='text-danger text-center'>". $errors . "<br> </p>";
        }
        ?>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="<?php echo $email?>">
        </div>
        <div class="form-group">
            <label for="fullname">Fullname:</label>
            <input type="text" name="fullname" class="form-control" value="<?php echo $fullname?>">
        </div>
        <div class="form-group">
            <label for="usertype">User Type:</label>
            <select name="user" class="form-control">
                <option  value="<?php echo $usertype?>">Customer</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" name="confirmpassword" class="form-control">
        </div>
        <div class="form-group text-center">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
        <div class="text-center">
            <a href="login.php">Already have an account? Login</a>
        </div>

        
    </form>
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
