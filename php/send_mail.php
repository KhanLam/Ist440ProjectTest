<?php
/* To do -- add email functionality */

	include_once('/Applications/XAMPP/xamppfiles/htdocs/IST440/ist440/db_connection.php');	//Only for local development
	if(isset($_POST['message']) && isset($_POST['email']))
	{
		$email = $_POST['email'];
		$message = $_POST['message'];

		//Log to database
		if ($stmt = $mysqli->prepare("INSERT INTO mail(email, message) VALUES (?, ?)")) 
		{
	        $stmt->bind_param('ss', $email, $message);
	        $stmt->execute();
	        $stmt->store_result();
	 	    $stmt->fetch();
	 	    header('Location: '. '/IST440/ist440/email_complete.php');
 		}
	}
	else
	{
		echo "fail";
	}
?>