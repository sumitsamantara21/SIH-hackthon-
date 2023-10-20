<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted email or phone number
    $email = $_POST['email']; // OR $phone = $_POST['phone'];

    // Generate a unique token (you can use a library or function for this)
    $token = bin2hex(random_bytes(32));

    // Store the token along with the email/phone number in a database or file
    // For demonstration purposes, we'll just display the token here
    echo "Token: $token";

    // Send the login link to the provided email address or phone number
    // You can use an email library or SMS gateway to send the link
    // Example for sending an email (requires a working email setup):
    /*
    $to = $email;
    $subject = 'Login Link';
    $message = 'Click the following link to log in: https://yourwebsite.com/login.php?token=' . $token;
    $headers = 'From: your@email.com' . "\r\n" .
               'Reply-To: your@email.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully. Please check your inbox for the login link.';
    } else {
        echo 'Email could not be sent. Please try again later.';
    }
    */
}
?>