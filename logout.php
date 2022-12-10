<?php
    include 'login-backend.php';
    session_start();
    session_unset();
    session_destroy();
    // echo "logout";
    header("location:index.php");
?>