<!-- 

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formsubmmited</title>
  </head>
  <body>
    
<?php 

//   $username = "root";
//   $servername = "localhost";
//   $password = "";
//   $database = "signup-login";



  $name = $_POST['fname'];
  $email =$_POST['email'];
  $subject = $_POST['subject'];
  $topic =$_POST['topic'];

  // $conn=mysqli_connect($servername, $username, $password, $database);

  $result= mysqli_query($conn,"insert into form(fname,email,subject,topic) values('$name','$email','$subject','$topic')");
if($result){
 echo "done";
}
?>

  </body>
  </html> -->