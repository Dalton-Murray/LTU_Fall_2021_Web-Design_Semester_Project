<?php
	$to = "murraydalton1@comcast.net";
	$from = $_POST['email'];
	$first_name = $_POST['firstName'];
	$last_name = $_POST['lastName'];
	$subject = "From State Landmarks";
	$headers = "From:" . $from;

	$message = $_POST['message'];


	$subject2 = "Copy of your inquiry with State Landmarks";
	$headers2 = "From:" . $to;

	mail($to,$subject,$message,$headers);

	mail($from,$subject2,$message2,$headers2);

	echo "Thank you " . $first_name . ", we will contact you shortly.";

	header("refresh:5; url=https://www.dalton-murray.com/contact.html");
?>