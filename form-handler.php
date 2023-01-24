<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "hoolio.suarez@gmail.com";
    $subject = "New portfolio message from $name";
    $txt = "You have received a new message from $name. Email: $email. Message: $message";
    $headers = "From: $email" . "\r\n" .
    "CC: somebodyelse@example.com";

    mail($to,$subject,$txt,$headers);
    header("Location: index.html");
?>
