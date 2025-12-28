<?php
require "config/db.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$nama  = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$pesan = nl2br(htmlspecialchars($_POST['pesan']));

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'akrommuhammadyusuf@gmail.com';
    $mail->Password = 'APP_PASSWORD_16_CHAR';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('akrommuhammadyusuf@gmail.com', 'Anime Verse');
    $mail->addReplyTo($email, $nama);
    $mail->addAddress('akrommuhammadyusuf@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Saran Anime Baru';
    $mail->Body    = "
        <b>Nama:</b> $nama<br>
        <b>Email:</b> $email<br><br>
        <b>Pesan:</b><br>$pesan
    ";

    $mail->send();
    echo "Pesan terkirim!";
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
