<?php
$to = "lp@boomergroup.com.ar";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];
$cars = $_POST['cars'];

$message = "
<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h1>Contacto information from the website</h1>
<p>User name: $name </p> 
<p>Email: $email </p> 
<p>Where are you from?: $country </p>
</body>
</html>";
 echo 'Thanks';
mail($to, $subject, $message, $headers);
?>

