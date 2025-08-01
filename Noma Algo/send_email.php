<?php
// Replace with your email address
$to = 'noma.algo@gmail.com';
$subject = 'Contact Form Submission from NOMA Algo';

$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$message = isset($_POST['message']) ? strip_tags($_POST['message']) : '';

$body = "Name: $name\nEmail: $email\nMessage:\n$message";
$headers = "From: $email\r\nReply-To: $email\r\n";

if ($name && $email && $message) {
    if (mail($to, $subject, $body, $headers)) {
        echo '<h2>Thank you! Your message has been sent.</h2>';
    } else {
        echo '<h2>Sorry, there was a problem sending your message.</h2>';
    }
} else {
    echo '<h2>Please fill in all fields.</h2>';
}
?>
