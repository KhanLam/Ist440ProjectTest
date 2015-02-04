<?php
//Get current time

//If we are stoping get the start time
if($_POST['type'] == 1)
{
	$stop = new DateTime();
	//Get time from DB
	//$diff = start->diff(stop);
}
//If we are starting, log the time
else
{
	$now = new DateTime();
	//Log to DB
}
?>