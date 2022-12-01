<?php
 session_start();
 

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelling</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/basic-structure.css">
   <link rel="stylesheet" href="css/services.css">

        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- CSS only
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->


</head>

<body>
    <!-- --------------------------Website Started--------------------------- -->
    <section class="main-container">

        <!-- ---------------------------Home started---------==----------------- -->
        <header id="services">
            <!-- ---------------------------Home ended---------==----------------- -->
            <!-- ---------------------------navigation started---------==----------------- -->
            <?php require 'partial\partial.php';?>
            <!-- ---------------------------Booking box Started---------==----------------- -->


            <!-- ---------------------------Booking box Ended---------==----------------- -->
            <!-- ---------------------------navigation ended---------==----------------- -->
        </header>
        <section class="features section-wrapper">
            <div class="container">
                <h2 class="section-title">
                    Features
                </h2>
                <p class="section-subtitle">
                    Lorem Ipsum is simply dummy text of the industry.
                </p>
                <div class="custom-table">
                    <div class="grid-50 table-cell">
                        <p class="features-details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ante ex, fermentum vel libero
                            eget interdum semper libero. Curabitur egestas, arcu id tempor convallis.
                        </p>
                        <ul class="features-list">
                            <li>Vestibulum pulvinar commodo malesuada.</li>
                            <li>Pellentesque id massa et ligula convallis porta.</li>
                            <li>Vivamus sed nunc sed ligula rhoncus sit amet eu elit.</li>
                            <li> Curabitur in ipsum vel ipsum vehicula congue.</li>
                        </ul>
                        <a href="#" class="btn btn-default btn-primary custom-button border-radius">
                            PURCHASE
                        </a>
                    </div>

                    <div class="grid-50 table-cell">
                        <img src="image\features-bg.png" alt="" class="features-img img-responsive _pos-abs">
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section>

        <section class="additional-services features section-wrapper">
            <div class="container">
                <h2 class="section-title">
                    Additional-Services
                </h2>
                <p class="section-subtitle">
                    Lorem Ipsum is simply dummy text of the industry.
                </p>
                <div class="additional-photo-gallery-container ">
                    <div class="gallery-handler">
                        <div class="addtional-photo-gallery">
                            <div class="photo">
                                <img src="image/photographer.jpeg" alt="">
                            </div>
                            <div class="text">
                                <h6>Photography</h6>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, in?</p>
                            </div>
                        </div>
                        <div class="addtional-photo-gallery">
                            <div class="photo">
                                <img src="image/cycling.jpeg" alt="">
                            </div>
                            <div class="text">
                                <h6>cycling</h6>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, in?</p>
                            </div>
                        </div>
                        <div class="addtional-photo-gallery">
                            <div class="photo">
                                <img src="image/walking.jpeg" alt="">
                            </div>
                            <div class="text">
                                <h6>walking</h6>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, in?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="additional-photo-gallery-container ">
                    <div class="gallery-handler">
                        <div class="addtional-photo-gallery">
                            <div class="photo">
                                <img src="image/hill-tracking.png" alt="">
                            </div>
                            <div class="text">
                                <h6>Hill Tracking</h6>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, in?</p>
                            </div>
                        </div>
                        <div class="addtional-photo-gallery">
                            <div class="photo">
                                <img src="image/sea-beach.png" alt="">
                            </div>
                            <div class="text">
                                <h6>Sea Beach</h6>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, doloremque.</p>
                            </div>
                        </div>
                        <div class="addtional-photo-gallery">
                            <div class="photo">
                                <img src="image/siking.png" alt="">
                            </div>
                            <div class="text">
                                <h6>Skiing</h6>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, in?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

               <!-- footer started -->
               <?php require 'partial\partial1.php';?>
               <!-- footer ended -->
       
    </section>

    <!-- --------------------------Website Ended--------------------------- -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
        <script src="index.js"></script>
</body>

</html>