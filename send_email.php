<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'austinTech/send_email.php'; 


$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'augustinegerman829@gmail.com'; // Your Gmail address
    $mail->Password = 'rhmbqljphzcpxzax';   // Your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('ambitious.austine@gmail.com', 'AustinTech');
    $mail->addAddress('ambitious.austine@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Contact Form Submission';
    $mail->Body    = "Name: {$_POST['name']}<br>Email: {$_POST['email']}<br>Message: {$_POST['message']}";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
