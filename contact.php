<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Send email via Gmail SMTP server in PHP</title>
<meta name="robots" content="noindex, nofollow">
<style>
@import url(http://fonts.googleapis.com/css?family=Raleway);

h1{
text-align:center;
//color: black;
font-size: 2em;
margin-top: 40px;
margin-bottom: 40px;
}

#main{
margin: 25px 100px;
font-family: 'Raleway', sans-serif;
}

h2{
background-color: #FEFFED;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 30px 40px;
color: black;
font-weight: bolder;
font-size: 1.5em;
margin-top: -1px !important;
// margin-bottom: -19px !important;
}

hr{
border:0;
border-bottom:1px solid #ccc;
margin: 10px -40px;
margin-bottom: 30px;
}

#login{
width:580px;
float: left;
border-radius: 10px;
font-family:raleway;
border: 2px solid #ccc;
padding: 0px 40px 0px;
margin-top: 70px;
//margin: 50px;
margin: 0% 25%;
}

input[type=text],input[type=email],input[type=password]{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}

textarea{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
margin-bottom: 5px;
font-size: 16px;
font-family:raleway;
}

input[type=submit]{
width: 100%;
background-color:#FFBC00;
color: white;
border: 2px solid #FFCB00;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-bottom: 40px;
}
#para{
clear: both;
margin: 0 35%;
}    
</style>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-43981329-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
</script>
</head>
<body>
<div id="main">
<h1>Send email via Gmail SMTP server in PHP</h1>
<div id="login">
<h2>Gmail SMTP</h2>
<hr/>
<form action="index.php" method="post">
<input type="text" placeholder="Enter your email ID" name="email"/>
<input type="password" placeholder="Password" name="password"/>
<input type="text" placeholder="To : Email Id " name="toid"/>
<input type="text" placeholder="Subject : " name="subject"/>
<textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message"></textarea>
<input type="submit" value="Send" name="send"/>
</form>
</div>
</div>
<?php
require 'PHPMailerAutoload.php';
if(isset($_POST['send']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$to_id = $_POST['toid'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}
}
else{
echo '<p id="para">Please enter valid data</p>';
}
?>
</body>
</html><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Send email via Gmail SMTP server in PHP</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="robots" content="noindex, nofollow">
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-43981329-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
</script>
</head>
<body>
<div id="main">
<h1>Send email via Gmail SMTP server in PHP</h1>
<div id="login">
<h2>Gmail SMTP</h2>
<hr/>
<form action="index.php" method="post">
<input type="text" placeholder="Enter your email ID" name="email"/>
<input type="password" placeholder="Password" name="password"/>
<input type="text" placeholder="To : Email Id " name="toid"/>
<input type="text" placeholder="Subject : " name="subject"/>
<textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message"></textarea>
<input type="submit" value="Send" name="send"/>
</form>
</div>
</div>
<?php
require 'PHPMailerAutoload.php';
if(isset($_POST['send']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$to_id = $_POST['toid'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}
}
else{
echo '<p id="para">Please enter valid data</p>';
}
?>
</body>
</html>
