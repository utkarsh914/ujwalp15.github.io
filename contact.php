<?php
// the message
$message = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$message = wordwrap($message,70);

// send email
mail("utiwari914@gmail.com","My subject Test",$message);
?>
