<?php

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $phonenumber = $_POST["phonenumber"];
    $message = $_POST["message"];

    $email_from = "Tovia International";
    $email_subject = "New Mail From Tovia";
    $email_body =   "fullname: $fullname.\n".
                    "email: $email.\n".
                    "username: $username.\n".
                    "phonenumber: $phonenumber. \n";
                    "message: $message. \n";

    $to = 'tovia0201@gmail.com';
    $headers = "FROM: $email_from \r\n";
    $headers = "REPLY-TO: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");





?>