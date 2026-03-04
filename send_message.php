<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ayogeswari2006@gmail.com";
    $subject = "New message from portfolio";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "<script>alert('Message sent successfully!'); window.location='contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send message.'); window.location='contact.html';</script>";
    }
}
?>