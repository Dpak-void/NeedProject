<?php
	$dsn = 'mysql:host=localhost;dbname=need';
	$username = 'deepak';
	$password = 'deepak';
	
	try
	{
		$db = new PDO($dsn,$username,$password);
		//print"Connection is Established..";
	}
	catch(PDOException $e)
	{
		print"Error in connection..";
		$error_msg=$e->getMessage();
		print"$error_msg";
	}
?>