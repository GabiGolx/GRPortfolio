<?php 
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$to='gabrielramirezacosta@hotmail.com';
		$subject="Name: ".$subject;
		$message="Name: ".$name."\n"."Wrote the following: "."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Succesfully! Thank you"." ".$name.", I will contact you shortly!</h1>";
		} else {
			echo "Something went wrong!";
		}
	}
 ?>