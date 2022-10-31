//<?php
include("../phpMailer/PHPMailer.php");
include("../phpMailer/SMTP.php");
include("../phpMailer/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host ="smtp.gmail.com";
$mail->SMTPAuth = "true";
$mail->SMTPSecure ="ssl";
$mail->Port ="587";
$mail->username ="elite.service.technique@gmail.com";
$mail->Password ="dplphulsajfbnfhh";
$mail->Subject ="Nouveau mot de passe;
$mail->setFrom('88995522');
$mail->isHTML(true);
$mail->Body ='Le corps du message';
$mail->addAdress('elite.fitness.paris@gmail.com');
if ($mail->Send() ) {
 echo 'Email envoye';
} else {
echo 'Email non envoye';
}
sendmail();
