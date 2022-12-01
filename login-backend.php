
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
</body>
</html> 

<?php
//   // include data from db_connect  
//   include 'db_connect.php';
//   //get data from login form
//   $username = $_POST['username'];
//   $password = $_POST['password'];
//   $dusername;
//   $dpassword;
//   $showAlert;
//   //sql query 
//   $query ="SELECT `uname`, `password` FROM `signup`";
//   //fetching data from db
//   $result=mysqli_query($conn, $query);

//   if(mysqli_num_rows($result)>0){
//     while($row=mysqli_fetch_assoc($result)){
//       // echo "username:".$row["uname"]." name:".$row["password"];
//       $dusername = $row["username"];
//       $dpassword = $row["password"];
//       // echo $dusername;
//       // echo $dpassword;  
//       if($username == $dusername && $password == $dpassword){
//         // session_start();
//         // $_SESSION['loggedin']= true;
//         // $_SESSION['username']= $username;
//         $showAlert =1;
        
//       }   
//       else{
//         $showAlert=0;
//       }
//     }
//   }
// // //  echo $username;
// //  echo $dusername;
// echo $showAlert;
  
//   if($showAlert==0){
//   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//   <strong>Holy guacamole!</strong> You should check in on some of those fields below.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';

//   echo '<div class="card text-center">
//   <div class="card-header">
//     Featured
//   </div>
//   <div class="card-body">
//     <h5 class="card-title">Sorry login was unsuccesful</h5>
//     <p class="card-text">check your network, username or password there some mistake in one of them...</p>
//     <a href="signup.php" class="btn btn-primary">Go back to login page</a>
//   </div>
//   <div class="card-footer text-muted">
//     2 days ago
//   </div>
// </div>';
//   }
//   else{
//   header("location:index.php");
//   }
  

?>




<?php 
//  $username = "root";
//  $servername = "localhost";
//  $password = "";
//  $database = "signup-login";

//  $conn=mysqli_connect($servername, $username, $password, $database);

  include 'db_connect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $showAlert = 0;
  $dpassword;
  $dusername;
  // echo $username;
  // echo $password;
  //select data from database.
  $sql="SELECT `uname`, `password` FROM `signup`";
  //fetching data from database.
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      // echo "username :".$row['uname']." password:".$row['password']." ";
      $dusername = $row['uname'];
      $dpassword = $row['password'];
      // echo $dusername;
      // echo $dpassword.'<br>';
    
      // echo $showAlert;
      if($username == $dusername && $password == $dpassword){
        $showAlert = 1;
      }
      // else{
      //   $showAlert = 0;
      // }
    }
  }
  
  if($showAlert==1){
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("location:index.php");
  }
  else{
    // header("location:signup.php");
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Login failed</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo '<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Sorry login was unsuccesful</h5>
    <p class="card-text">check your network, username or password there some mistake in one of them...</p>
    <a href="signup.php" class="btn btn-primary">Go back to login page</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>';
  }
  








?>






