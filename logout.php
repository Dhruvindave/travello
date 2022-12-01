<?php
    include 'login-backend.php';
    session_start();
    session_unset();
    session_destroy();
    echo "done";
    header("location:index.php");
?>