<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "recipient@example.com"; // Replace with the recipient's email address
    $subject = "Test Email";
    $message = "This is a test email sent from a PHP script.";
    $headers = "From: sender@example.com"; // Replace with the sender's email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    <h1>Send Email</h1>
    <form method="post">
        <input type="submit" value="Send Email">
    </form>
</body>
</html>
