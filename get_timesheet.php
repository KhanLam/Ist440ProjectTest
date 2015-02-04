<?php
	include_once('db_connection.php');
	
	if ($stmt = $mysqli->prepare("SELECT id, username, password FROM timesheet WHERE username = ? LIMIT 1")) 
	{
	    $stmt->bind_param('s', $username);
	    $stmt->execute();  
	    $stmt->store_result();

	    $stmt->bind_result($user_id, $dbusername, $db_password);
	    $stmt->fetch();
	}
?>