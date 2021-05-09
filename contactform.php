<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$mailTo = 'hellosrproject601@gmail.com';
	$headers = "From: ".$email; 

	$txt = "Name = ".$name."\n\n". "Mobile No. =".$mobile."\n\n"."Message = ".$message;

	if(mail($mailTo,$subject, $txt,$headers)){
header("Location: demo.php?Mail Sent.");
	}
	else
	{
		header("Location: demo.php? not sent Mail.");
	}

}