<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $property_type = htmlspecialchars($_POST['property_type']);
    $location      = htmlspecialchars($_POST['location']);
    $name          = htmlspecialchars($_POST['name']);
    $mobile        = htmlspecialchars($_POST['mobile']);

    // Change to your Gmail
    $to = "salescasachic@gmail.com";  
    $subject = "New Consultation Request";
    $message = "
    Property Type: $property_type
    Location: $location
    Name: $name
    Mobile: $mobile
    ";
    $headers = "From: Booking@" . $_SERVER['SERVER_NAME'];

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to home page after success
        header("Location: index.html?status=success");
        exit();
    } else {
        // Redirect with error
        header("Location: index.html?status=error");
        exit();
    }
}
?>
