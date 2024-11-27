<?php

if (!empty($_POST)) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["numb"];
    $textmsg = $_POST["message"];

    $msg = "";
    $msg .= "name: " . $name . "\n";
    $msg .= "email: " . $email . "\n";
    $msg .= "tel number:" . $tel . "\n";
    $msg .= "message:" . $textmsg . "\n";

    $from = 'taxi  Leads <contact@dreamspotmussorietaxi.com>';
    $to = 'taxi Leads <contact@dreamspotmussorietaxi.com>';
    $subject = 'Leads';
    $message = $msg;
    $headers = 'From: ' . $from;
  

    // echo $msg ;
    
    if (!mail($to, $subject, $message, $headers)) {
        echo "Error.";
    } else {
        header('Location: '. $_SERVER['HTTP_REFERER']);
    die();
        echo "Message sent.";
    }
}
