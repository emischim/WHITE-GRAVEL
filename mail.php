<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$companyname = $_POST['companyname'];
$email = $POST['email'];
$country = $_POST['country'];
$message = $_POST['subject'];
$formcontent="From: $firstname \n Message: $message";
$recipient = "emischim7@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
