<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $date = htmlspecialchars($_POST['date']);
  $message = htmlspecialchars($_POST['message']);

  $to = "salescasachic@gmail.com"; // Replace with your email
  $subject = "New Booking Appointment from $name";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nPreferred Date: $date\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Appointment request sent successfully!'); window.location.href='booking.html';</script>";
  } else {
    echo "<script>alert('Failed to send request. Try again.'); window.history.back();</script>";
  }
} else {
  echo "Invalid request.";
}
?>
