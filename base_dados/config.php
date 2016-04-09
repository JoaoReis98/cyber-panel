<?php
	@session_start();
	
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	date_default_timezone_set('Europe/Lisbon');
	
	$db_dbname = "cyberpanel";
	$db_hostname = "localhost";
	$db_username = "root";
	$db_password = "";

	$email_host = "smtp.gmail.com";
	$email_port = 587;
	$email_user = "gmail_account@gmail.com";
	$email_pass = "yourpassword_here";
	$email_sec  = "tls";

	try
	{
		$conn = new PDO('mysql:dbname='.$db_dbname.';host='.$db_hostname.'', $db_username, $db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		die("Erro => ".$e->getMessage());
	}
?>
