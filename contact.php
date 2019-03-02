<?php
// the message
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "utiwari914@gmail.com";
$subject = "Contact Form";
if(mail($recipient, $subject, $formcontent)) {
    echo "Thank You for contacting me, I will get in touch with you shortly!";
}
?>
