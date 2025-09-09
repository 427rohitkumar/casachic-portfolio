<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $message = htmlspecialchars($_POST['message']);

  $to = "salescasachic@gmail.com"; // Replace with your email
  $subject = "New Contact Form Message from $name";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Thank you for contacting us!'); window.location.href='contact.html';</script>";
  } else {
    echo "<script>alert('Failed to send message. Try again.'); window.history.back();</script>";
  }
} else {
  echo "Invalid request.";
}
?>
