<?php


$name=$_POST['name'];
$company=$_POST['company'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];


$to='yourname@mail.com';

$headers = 'From: '.$name."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$subject = 'Message from Grepfrut';
$body='You have got a new message from the contact form on your website - Grepfrut.'."\n\n";

$body.='Full name: '.$name."\n";
$body.='Company name: '.$company."\n";
$body.='Telephone Number: '.$phone."\n";
$body.='Email: '.$email."\n";
$body.='Message: '."\n".$message."\n";
	
if(mail($to, $subject, $body, $headers)) {
	die('Message sent.');
} else {
	die('Error: Mail failed');
}

?>