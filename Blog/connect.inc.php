<?php
	$mysql_host = 'localhost'; //adding local host
	$mysql_user = 'root';	// local user
	$mysql_pass = '';	// local user password
	
	$mysql_db = 'food';	// connecting to database
	
	if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db)) //condition check if database is connected or not
	{
		die('Cannot connect to the database.... Sorry for the Inconvinience'); //if not connected mewssage display
	}
?>