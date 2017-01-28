<?php
header('Access-Control-Allow-Origin: *');
if(isset($_POST['name'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "ujwalp09@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";



if(mail($recipient, $subject, $formcontent, $mailheader)) {
    echo "Thank You for contacting me, I will get in touch with you shortly!";
} else {
   die("Error!");
}


}




?>
