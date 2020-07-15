<?php 
extract($_POST);
print_r($_POST);
echo $_POST['message'];

	$email_to = "darshshah9813988@gmail.com";
	$subject = $_POST['message'];
	$body=$_POST['message'];
	$headers = "From: ". $_POST['username'];
	mail($email_to, $subject, $body, $headers);


?>