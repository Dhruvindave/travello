<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark" id="nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">travello</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="services.php">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="book.php">Book</a>
                        </li>
                    </ul>

                    <div class="mx-3">
                        <?php
                        if($_SESSION['loggedin']!=true){
                        echo '<a class="btn btn-primary" href="signup.php" target="_blank">Login</a>';
                        header("location:signup.php");
                        }
                        else{
                            echo '<a class="btn btn-primary" href="dashboarad.php"><i class="fa fa-user"></i></a>';
                            echo '<button type="button" class="btn btn-danger" style="color:white;" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            Logout
                            </button>
                            ';
                        }

                    ?>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <form class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sure you want to logout from
                                            travello</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body mg-5">
                                       <a href="logout.php" class="btn btn-danger btn-md">Logout</a>
                                    </div>

                                    <div class="modal-footer">

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </nav>



</body>
</html>