<?php


$name = $_POST['name'];
$request = $_POST['request'];

$to = "pentarocktz@gmail.com"; 
$Subject = "Email from Pentalishe website";
$body = "This is an automated message. Please dont reply to this. \n\n $request";



mail($to, $Subject, $body);

echo "Email has been sent! Thank you. <a href='index.html'>Click here</a> to send another email";
?> 
