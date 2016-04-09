<?php
	@session_start();
	if(isset($_SESSION['Id']))
	{
		$_SESSION = array();
	}
	header("Location: index.php");
?>