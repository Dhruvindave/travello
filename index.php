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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\home.css">
    <!-- <link rel="stylesheet" href="css\about.css"> -->
    <link rel="stylesheet" href="css\basic-structure.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>



</head>

<body>
    <!-- --------------------------Website Started--------------------------- -->
    <section class="main-container">

       
        <!-- ---------------------------navigation started---------==----------------- -->

        <?php require 'partial\partial.php';?>


        <header id="home">
            <!-- ---------------------------Booking box Started---------==----------------- -->

            <!-- ---------------------------Booking box Ended---------==----------------- -->
            <!-- ---------------------------navigation ended---------==----------------- -->
        </header>

        <div class="home_search">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_search_container">
                            <div class="home_search_title">Search for your trip</div>
                            <div class="home_search_content">
                                <form action="#" class="home_search_form" id="home_search_form">
                                    <div
                                        class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                        <input type="text" class="search_input search_input_1" placeholder="City"
                                            required="required">
                                        <input type="text" class="search_input search_input_2" placeholder="Departure"
                                            required="required">
                                        <input type="text" class="search_input search_input_3" placeholder="Arrival"
                                            required="required">
                                        <input type="text" class="search_input search_input_4" placeholder="Budget"
                                            required="required">
                                        <button class="home_search_button">search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- destination section started -->
        <section class="destination">
            <div class="box-main">
                <div class="box">
                    <div class="icon-box"><span class="material-symbols-outlined">
                            hotel
                        </span></div>
                    <h3>Top Destination</h3>
                    <p>top destination best hotels all over the world.</p>
                </div>
                <div class="box">
                    <div class="icon-box"><span class="material-symbols-outlined">
                            payments
                        </span></div>
                    <h3>Best price on trips</h3>
                    <p>just book trip and get best deals over on any trip</p>
                </div>
                <div class="box">
                    <div class="icon-box"><span class="material-symbols-outlined">
                            luggage
                        </span></div>
                    <h3>Services</h3>
                    <p>transport,hotels...don't worry just travello</p>
                </div>
            </div>
            <hr>

            <h1 class="heading-styling">Photo Gallery</h1>
            <div class="photo-gallery">
                <div class="image card">
                    <img src="image/2_background.jpg" alt="">
                    <div class="card-text">
                        <h2>Top Destination</h2>
                    </div>
                </div>

                <div class="image card">
                    <img src="image/massori.jpg" alt="">
                    <div class="card-text">
                        <h2>Hill Station</h2>
                    </div>
                </div>


                <div class="image card">
                    <img src="image/mumbai.jpeg" alt="">
                    <div class="card-text">
                        <h2>Famous places</h2>
                    </div>
                </div>
            </div>
            <div class="photo-gallery">
                <div class="image card">
                    <img src="image/kedarnath.jpeg" alt="">
                    <div class="card-text">
                        <h2>Best place for summer vacation</h2>
                    </div>
                </div>
                <div class="image card">
                    <img src="image/sou.jpeg" alt="">
                    <div class="card-text">
                        <h2>People mostly visit</h2>
                    </div>
                </div>
                <div class="image card">
                    <img src="image/beach.jpeg" alt="">
                    <div class="card-text">
                        <h2>Beach Hotels</h2>
                    </div>
                </div>
            </div>

        </section>
        <!-- destination section ended -->
        <!-- footer -->
        <?php require 'partial/partial1.php'?>
        <!-- footer -->
         <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="material-symbols-outlined">
                arrow_upward
            </span></button>
    </section>

    <!-- --------------------------Website Ended--------------------------- -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="index.js"></script>

</body>

</html>



