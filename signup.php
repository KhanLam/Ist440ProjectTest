<?php
include_once('db_connection.php');
	
if(isset($_POST['username']) && isset($_POST['password']))
{
	$m_username = $_POST['username'];	
	$m_password = $_POST['password'];
	// Check database for username & password
	if ($stmt = $mysqli->prepare("INSERT INTO members(username, password) VALUES (?, ?)")) 
	{
        $stmt->bind_param('ss', $m_username, $m_password);
        $stmt->execute();
        $stmt->store_result();
 	    $stmt->fetch();
 	    echo "success";
 	    //Redirect to homepage
 	    header('Location: '. 'signup_complete.php');
        // User has been created
	}
	else
	{
		echo "fail";
	}
}
?>