
<?php 
    include 'db_connect.php';
   
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $topic = $_POST['topic'];

    $sql="insert into form(fname,email,subject,topic) values('$fname','$email','$subject','$topic')";

    $result=mysqli_query($conn , $sql);
    if($result){
        echo    1;
    }

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
    <!-- <link rel="stylesheet" href="css\about.css"> -->
    <link rel="stylesheet" href="css\basic-structure.css">
    <!-- <link rel="stylesheet" href="css\home.css"> -->
    <link rel="stylesheet" href="css\contact.css">
    <link rel="stylesheet" href="css\main.css">

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>



</head>

<body>
    <!-- --------------------------Website Started--------------------------- -->
    <section class="main-container">

        <!-- ---------------------------Home started---------==----------------- -->
        <header id="contact">
            <!-- ---------------------------Home ended---------==----------------- -->
            <!-- ---------------------------navigation started---------==----------------- -->
            <?php require 'partial\partial.php';?>
            <!-- ---------------------------Booking box Started---------==----------------- -->
<?php echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>your form has submitted successfully</strong> thank you for contacting us response would be in few seconds.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';?>

            <!-- ---------------------------Booking box Ended---------==----------------- -->
            <!-- ---------------------------navigation ended---------==----------------- -->
        </header>
        <div class="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact_content">
                            <div class="contact_title">Get in touch with us</div>
                            <div class="contact_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.
                                    Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit
                                    amet mattis eget, tristique at leo. Vivamus massa.</p>
                            </div>
                            <div class="contact_list">
                                <ul>
                                    <li>
                                        <div>address:</div>
                                        <div>1481 Creekside Lane Avila Beach, CA 931</div>
                                    </li>
                                    <li>
                                        <div>phone:</div>
                                        <div>+53 345 7953 32453</div>
                                    </li>
                                    <li>
                                        <div>email:</div>
                                        <div>yourmail@gmail.com</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact_form_container">
                            <form action="contact_submit.php" method="post">
                                <div style="margin-bottom: 18px">
                                    <input type="text" name="fname" class="contact_input contact_input_name inpt" placeholder="Your Name"
                                        required="required">
                                    <div class="input_border" style="visibility: hidden; opacity: 0;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6" style="margin-bottom: 18px">
                                        <div><input type="text" name="email" class="contact_input contact_input_email inpt"
                                                placeholder="Your E-mail" required="required">
                                            <div class="input_border"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" style="margin-bottom: 18px">
                                        <div><input type="text" name="subject" class="contact_input contact_input_subject inpt"
                                                placeholder="Subject" required="required">
                                            <div class="input_border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div><textarea name="topic" class="contact_textarea contact_input inpt" placeholder="Message"
                                        required="required"></textarea>
                                    <div class="input_border" style="bottom: 3px; visibility: hidden; opacity: 0;">
                                    </div>
                                </div>
                                <button type="submit" class="contact_button">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer started -->

        <?php require 'partial\partial1.php';?>
        <!-- footer ended -->

    </section>

    <!-- --------------------------Website Ended--------------------------- -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="index.js"></script>

</body>

</html>




