<?php
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $subject = htmlspecialchars($_GET['subject']);
    $message = htmlspecialchars($_GET['message']);
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        echo 'Fill all fields';
        exit;
    }
    //Send
//    $msg
    $subject = "?=utf-8?B?".base64_decode($subject)."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-Type: text/html; charset=utf-8\r\n";
    if (mail("klugmankd@gmail.com", $subject, $message, $headers))
        echo "Message were send";
    else
        echo "Message were not send";