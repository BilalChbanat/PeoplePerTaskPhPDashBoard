<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$mail = new PHPMailer();

//Server settings

$mail->isSMTP();                                                 //Send using SMTP
$mail->Host = 'smtp.gmail.com';                                 //Set the SMTP server to send through
$mail->SMTPAuth = true;                                        //Enable SMTP authentication
$mail->Username = 'bilal.chbanat2003@gmail.com';              //SMTP username
$mail->Password = 'yrow nngx vift zxst';                     //SMTP password
$mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
$mail->Port = 465;

$mail->isHTML = true;
?>