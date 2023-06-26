<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['Name'];
  $message = $_POST['Message'];
  $to = 'janishpatel174@gmail.com';

  // Set email headers
  $headers = "From: $name\r\n";
  $headers .= "Reply-To: $name\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

  // Send email
  mail($to, "New Message from Contact Form", $message, $headers);

  // Redirect user to a thank you page
  header("Location: thank_you.html");
  exit;
}
?>
