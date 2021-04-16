<!-- <?php 
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$msg=$_POST['msg'];

		$to='gabrielramirezacosta@hotmail.com';
		$subject="Name: ".$subject;
		$message="Name: ".$name."\n"."Wrote the following: "."\n\n".$msg;
		$headers="From: ".$email;
	
		mail($to, $subject, $message, $headers);

		// if(mail($to, $subject, $message, $headers)){
		// 	echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		// }
		// else{
		// 	echo "Something went wrong!";
		// }
	}
 ?> 




