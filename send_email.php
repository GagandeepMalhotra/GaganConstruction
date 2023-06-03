<?php
// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email parameters
$to = 'gaganconstructionltd@gmail.com';
$subject = 'New Message from Website';
$body = "Name: $name\nPhone: $phone\nEmail: $email\n\nMessage:\n$message";

// Send email
$headers = "From: $email\r\nReply-To: $email\r\n";
$mail_sent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mail_sent) {
    // Email sent successfully
    echo 'Email sent successfully!';
} else {
    // Failed to send email
    echo 'Oops! An error occurred while sending the email.';
}
?>