<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
   // Your existing code here

    $to = "tatenda@gmail.com"; // Your email address
    $subject = "Wedding RSVP";
    
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = "Hello, Sheron and Sheoga. I will be attending the wedding with my family.";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $message, $headers);

    // Redirect after sending the email
    header("Location: index");
    exit();
}
?>
