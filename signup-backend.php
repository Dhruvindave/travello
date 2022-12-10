<?php 
  include 'db_connect.php';
 


    $name = $_POST['fname'];
    $username=$_POST['uname'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $cpassword =$_POST['cpassword'];


  
  if($password == $cpassword){
    // $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "insert into signup(fname,uname,email,password) values('$name','$username','$email','$password')";
    $result= mysqli_query($conn, $query);
    // if($result){
    //   echo 'done';
    // }
    header("location:index.php");
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