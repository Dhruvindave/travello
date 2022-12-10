<?php
 session_start();
 

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page travello</title>
    <link rel="stylesheet" href="basic-structure.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- <link rel="stylesheet" href="css\style.css"> -->
    <!-- <link rel="stylesheet" href="css\services.css"> -->
    <link rel="stylesheet" href="css\main.css">
    <!-- <link rel="stylesheet" href="css\home.css"> -->
    <link rel="stylesheet" href="css\contact.css">
    <link rel="stylesheet" href="css\basic-structure.css">
    <link rel="stylesheet" href="css\about.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- navigation bar started  -->
    <?php require 'partial\partial.php';?>

    <!-- navigation bar  ended-->
    <section id="about">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="padding: 23px 32px">
                <div class="carousel-item active">
                    <img src="image/3_background.jpg" style="height:70vh;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image\massori.jpg" style="height:70vh;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/dex-ezekiel-GBJ7uFCqsh4-unsplash (2).jpg" style="height:70vh;" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="about-us">
        <p>The something amazing about us</p>
        <h1 class="about-heading">Few words about us</h1>
        <div class="about-content">
            <div class="tile1">
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae in commodi totam nesciunt,
                    eaque debitis laudantium quae? Minus, laboriosam. Nostrum?</h3>
                <p id="para"> dolor, sit amet consectetur adipisicing elit. Saepe, laudantium!Lorem ipsum
                    dolor, sit amet consectetur adipisicing elit. Saepe, laudantium! amet consectetur adipisicing elit.
                    Saepe, laudantium!Lorem ipsum
                    dolor, sit amet consectetur adipisicing elit. Saepe, laudantium!Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Saepe, laudantium!Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Saepe, laudantium!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe,
                    laudantium!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, laudantium!Lorem ipsum
                    dolor, sit amet consectetur adipisicing elit. Saepe, laudantium!</p>
                <button class="more-about" id="about-btn" onclick="toggleHide()" type="button">Read More</button>
            </div>
            <div class="tile2">
                <img src="image/1_background.jpeg" alt="">
            </div>

        </div>
        <hr>
        <section class="blocks4">
            <div class="box-main box-setting">
                <div class="box box-hover">
                    <div class="icon-box"><span class="material-symbols-outlined">
                            receipt_long
                        </span></div>
                    <span class="milestone_counter" data-end-value="10">10+</span>
                    <h3>Years Work experience</h3>
                </div>
                <div class="box box-hover">
                    <div class="icon-box"><span class="material-symbols-outlined">
                            groups
                        </span></div>
                    <span class="milestone_counter" data-end-value="30">30+</span>
                    <h3>Team member & support staf</h3>
                </div>
                <div class="box box-hover">
                    <div class="icon-box"><span class="material-symbols-outlined">
                            flight_takeoff
                        </span></div>
                    <span id="counter" class="milestone_counter" data-end-value="15000">15000+</span>
                    <h3>International trips done by us</h3>
                </div>
                <div class="box box-hover">
                    <div class="icon-box"><span class="material-symbols-outlined">
                            public
                        </span></div>
                    <span class="milestone_counter" data-end-value="13">13+</span>
                    <h3>Available in 2 countries & 13 districts</h3>
                </div>
            </div>
        </section>
        <hr>
        <section class="why-choose-us">
            <div class="heading heading-styling">
                <h1>Why Choose Us</h1>
            </div>

            <div class="card-group">
                <div class="card">
                    <img src="image\kerala.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fast Services</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, nam!</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image\massori.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Great Team</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image\beach.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Best Deal</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </section>

    </section>

    <!-- footer started -->

    <?php require 'partial\partial1.php';?>
    <!-- footer ended -->
    <script src="index.js"></script>
    <script>
    function toggleHide() {
        let btn = document.getElementById("about-btn");
        let para = document.getElementById("para");
        if (para.style.display != 'none') {
            para.style.display = 'none';
        } else {
            para.style.display = 'block';
        }
    }
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>