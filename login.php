<?php
	include_once('db_connection.php');
	// if(isset($_SESSION))
	// {
	// 	session_unset();
	// }

	// session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];	
	$password = $_POST['password'];

	// Check database for username & password
	if ($stmt = $mysqli->prepare("SELECT id, username, password FROM members WHERE username = ? LIMIT 1")) 
	{
	    $stmt->bind_param('s', $username);
	    $stmt->execute();  
	    $stmt->store_result();

	    $stmt->bind_result($user_id, $dbusername, $db_password);
	    $stmt->fetch();

	    if($stmt->num_rows == 1)
	    {
	    	if($db_password == $password)
	    	{
	    		echo "Login successful";
	    		session_start();
        		$_SESSION['username'] = $username;
        		header('Location: '. 'index.php');
	    	}
	    	else
	    	{
	    		// Log attempt
	    		echo "wrong password";
	    	}
	    }
	}
}
else
{
	echo "Username and password not set";
}

?>