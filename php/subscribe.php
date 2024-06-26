<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $subject = "New Newsletter Subscription";
        $emailMessage = "You have subscribed to great news!";
        $headers = "From: no-reply@example.com\r\n"; // Replace with your domain email

        if (mail($email, $subject, $emailMessage, $headers)) {
            $_SESSION['message'] = "Subscription successful. A confirmation email has been sent.";
        } else {
            $_SESSION['message'] = "Error: Unable to send email. Please try again later.";
        }
    } else {
        $_SESSION['message'] = "Invalid email address.";
    }

    header("Location: /index.php");
    exit();
} else {
    $_SESSION['message'] = "Invalid request method.";
    header("Location: /index.php");
    exit();
}