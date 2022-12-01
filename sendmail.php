<?php
$to_email = "dhruvin2045@gmail.com";
$subject = $_POST['subject'];
$body = $_POST['message'];
$headers = "From: dhruvindave60@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
    header("location:contact.php");
} else {
    echo "Email sending failed...";
}