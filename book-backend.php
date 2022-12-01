



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/book.css">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/basic-structure.css">
   <link rel="stylesheet"
   href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
   

<?php 
// require 'partial\partial.php';?>

<!-- header section ends -->

<?php 
if($result){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>SUCCESS</strong>Your form has been submitted succesfully. response would be come soon.

<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

echo '<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">form submitted succesfully</h5>
    <p class="card-text">kindly check your email we have sent our price list and best packages offer on in and plz consider your best deal with it.</p>
    <a href="index.php" class="btn btn-primary">GO to home page</a>
  </div>
</div>';

}
else{
    echo "error";
}
?>

<!-- booking section starts  -->


<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn btn-dark btn-lg" name="send">

   </form>

</section>

<!-- booking section ends -->


<?php 
require 'partial\partial1.php';?>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>


<?php 

$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$where = $_POST['location'];
$how = $_POST['guest'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];

$result= mysqli_query($conn,"insert into trip-form(fname,email,phone,address,where-to,how-many,arrivals,leaving) values('$fname','$email','$phone','$address','$where','$how','$arrivals','$leaving')");
?>