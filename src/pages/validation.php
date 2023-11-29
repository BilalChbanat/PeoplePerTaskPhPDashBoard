<?php

require_once 'mail.php';

if (empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["phone"]) || empty($_POST["subject"]) || empty($_POST['email']) || empty($_POST['message'])) {
    include_once('error.php');
}
if (!preg_match('/^[A-Za-z]+$/', $_POST['fname'])) {
    include_once('error.php');
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    include_once('error.php');
}
if (strlen($_POST["message"]) < 30) {
    include_once('error.php');
} else {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mail->setFrom($email, $fname);
    $mail->addAddress('bilal.chbanat2003@gmail.com');
    $mail->Subject = 'Here is the subject';
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('location: ./succes.php');
}