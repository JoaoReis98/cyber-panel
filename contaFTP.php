<?php 
	require_once("base_dados/config.php");		// Conexão com base de dados
	require_once("base_dados/functions.php");
	require_once("__classes/Utilizador.class.php");	// Classe Utilizador
	require_once("__classes/Servidor.class.php");	// Classe Utilizador
	require_once("includes/querys/SourceQuery.class.php");
	require_once("lang.php");
	if(!isset($_SESSION['Id']))
	{
		header("Location: login.php");
	}
	$User = new Utilizador($_SESSION['Id'], $conn);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1" />
</head>
<style>
    body
    {
        background-color: white;
    }
</style>
<body>
	<div class="row">
		<div class="col-md-12">
			<form class="col-md-4 col-md-offset-4" id="LoginForm1" action="/includes/ftp/index.php" method="post" onsubmit="return CheckInput(this);">
				<center>
						<div>
								<?php 
								if($_GET) 
								{ 
									if(isset($_GET['ip']))
									{
									?>
										<input type="hidden" name="ftpserver" value="<?php echo $_GET['ip']; ?>" class="form-poshytip" title="" />
									<?php 
									}
									else 
									{
										?>
										<input type="text" name="ftpserver" value="" class="form-poshytip" title="" />
										<?php 
									}
								}
								?>
						</div>
						<div>
							
							<input type="hidden" name="username" value="<?php if($_GET) { if (isset($_GET['user'])) { echo $_GET['user']; } }?>" class="form-poshytip" title="Enter your username" />
						</div>
						<div>
							<input type="hidden" name="password" value="<?php if($_GET) { if (isset($_GET['pw'])) { echo $_GET['pw']; } }?>" class="form-poshytip" title="Enter your password" />
						</div>
						<input style="width: 100px; height: 70px; color: black; background-color: green;" type="submit" id="LoginButton1" name="Login" value="Login" alt="Login" />
					
					<input type="hidden" name="state"     value="browse" />
					<input type="hidden" name="state2"    value="main" />
				</center>
			</form>
		</div>
	</div>
</body>
</html>