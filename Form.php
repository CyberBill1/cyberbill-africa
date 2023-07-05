<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];

  // Email settings
  $to = "your_email@example.com";  // Replace with your own email address
  $subject = "Form Submission";
  $message = "Name: " . $name . "\n";
  $message .= "Email: " . $email . "\n";

  // Send the email
  $headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
  if (mail($to, $subject, $message, $headers)) {
    echo "<h2>Submitted Information:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Email sent successfully.";
  } else {
    echo "Error occurred while sending email.";
  }
}
?>

