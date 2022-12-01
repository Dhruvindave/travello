<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  
</body>
</html>
<?php 
  include 'db_connect.php';
  //   $username = "root";
  //   $servername = "localhost";
  //   $password = "";
  //  $database = "signup-login";
  //  $conn=mysqli_connect($servername, $username, $password, $database); 


    $name = $_POST['fname'];
    $username=$_POST['uname'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $cpassword =$_POST['cpassword'];

    $result= mysqli_query($conn,"insert into signup(fname,uname,email,password,cpassword) values('$name','$username','$email','$password','$cpassword')");

   if($password == $cpassword){
  echo '<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
  </div>';
  echo '<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">THANK YOU FOR CREATING ACCOUNT.</h5>
    <p class="card-text">by clicking this below button go to home page.</p>
    <a href="index.php" class="btn btn-primary">Go Homepage</a>
  </div>

  </div>';
  
    }
    else{
      echo '<div class="alert alert-danger" role="alert">
  account is not created by us check some issues discussed in below
  </div>';
  echo '<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">SOrry your account is not created</h5>
    <p class="card-text">because your password is not matched with. click below button and try it again...</p>
    <a href="signup.php" class="btn btn-warning">Go back to signinpage</a>
  </div>

  </div>';

    }

 
 ?>
