<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
$to= "fiza.patel2001@gmail.com";
$headers= "From: noreply@yoursite.com" . "\r\n" . "CC: fmpatel@mitaoe.ac.in";
if($email!=NULL){
    mail($to, $subject, $message, $headers);
}

header("Location:thankyou.html");
?>
