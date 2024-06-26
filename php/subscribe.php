<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $subject = "New Newsletter Subscription";
        $message = "You have subscribed to great news!";
        $headers = "From: no-reply@example.com\r\n"; // Replace with your domain email

        if (mail($email, $subject, $message, $headers)) {
            echo "Subscription successful. A confirmation email has been sent.";
        } else {
            echo "Error: Unable to send email. Please try again later.";
        }
    } else {
        echo "Invalid email address. Please go back and try again.";
    }
} else {
    echo "Invalid request method.";
}