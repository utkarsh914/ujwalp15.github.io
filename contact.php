<?php
// the message
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "utiwari914@gmail.com";
$subject = "Contact Form";
if(mail($recipient, $subject, $formcontent)) {
    echo "Thank You for contacting me, I will get in touch with you shortly!";
}
?>
