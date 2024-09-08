<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                      // Use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Set Gmail SMTP server
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'salmandabagenga5@gmail.com';             // SMTP username (your Gmail)
    $mail->Password = '#@salmajr';              // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption
    $mail->Port = 587;                                    // TCP port to connect to

    // Recipients
    $mail->setFrom('salmandabagenga5@gmail.com', 'salma');  // Sender's email address and name
    $mail->addAddress('salmandabagenga0@example.com');           // Add recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test Email Subject';
    $mail->Body    = 'This is a test email sent using PHPMailer via Gmail SMTP.';
    $mail->AltBody = 'This is the plain text version of the email content';

    // Send the email
    $mail->send();
    echo 'Message has been sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
