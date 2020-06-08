<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'arnav.akash.shreya@gmail.com';

    $email_subject = "New form submission";

    $email_body = "User Name: $name.\n".
    "User Email: $visitor_email.\n".
    "User Message: $message.\n";

    $to = "palkhiwala.arnav@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $header);

    header("Location: index.html");

 ?>

 //now just need to pay money and upload php file to web server
