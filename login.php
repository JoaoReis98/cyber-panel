<?php
	@session_start();
	require_once("base_dados/config.php");		// Conexão com base de dados
	require_once("base_dados/functions.php");
	require_once("__classes/Utilizador.class.php");	// Classe Utilizador

	$err = array();		// Erros em Array

	if(isset($_POST['MudarLang']) && isset($_POST['ID']))
	{
		if(getLangById($_POST['ID']) != false)
		{
			#$User->setIdTema($_POST['ID']);
			$_SESSION['Lang_Id'] = htmlentities($_POST['ID']);
			echo json_encode(
				array(
					"Status" => true, 
					"ID"	 => htmlentities($_SESSION['Lang_Id']),
					"Result" => $_SESSION['Lang']['login_linguagemMudadaSucesso']
					)
				);
			die();
		}
		else 
		{
			echo json_encode(
				array(
					"Status" => false, 
					"Result" => $_SESSION['Lang']['login_linguagemMudadaErro']
					)
				);
			die();
		}
		echo json_encode(
				array(
					"Status" => false, 
					"Result" => $_SESSION['Lang']['login_linguagemMudadaErro']
					)
				);
		die();
	}

	if(isset($_SESSION['Lang_Id']))
	{
		if(getLangById($_SESSION['Lang_Id']) != false)
		{
			$_SESSION['Lang'] = getLangById($_SESSION['Lang_Id']);
		}
		else 
		{
			$_SESSION['Lang_Id'] = "Portugues";
			$_SESSION['Lang'] = getLangById($_SESSION['Lang_Id']);
		}
	}
	else 
	{
		$_SESSION['Lang_Id'] = "Portugues";
		$_SESSION['Lang'] = getLangById($_SESSION['Lang_Id']);
	}
	

	if($_POST)
	{
		if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$email = addslashes($email); // Nunca confiar no que o utilizar introduz.
			$password = addslashes($password); // Nunca confiar no que o utilizar introduz.
			$password = md5($password); // Encriptar password com md5
			$User = login($email, $password);
			if(!isset($User))
			{
				header("Location: login.php?erro=2");
				die();
			}
			$User = new Utilizador($User['Id'], $conn);
			$User->printInfo();
			$_SESSION['Id'] = $User->getId();
		}
		else
		{
			header("Location: login.php?erro=1");
			die();
		}

	}
	if($_GET)
	{
		if(isset($_GET['erro']))
		{
			$erro = $_GET['erro'];
			if($erro == 1)
			{
				$err[] = $_SESSION['Lang']['login_emailOuPasswordFalta'];
			}
			if($erro == 2)
			{
				$err[] =  $_SESSION['Lang']['login_emailOuPasswordErrados'];
			}
		}
	}
	
	/**
	*	Verifica se o utilizador esta logado
	*/
	if(isset($_SESSION['Id']))
	{
		echo "Logado";
		header("Location: index.php");
		die();
	}

?>
<?php
	/**
	* Incluir Header com Titulo
	*/
	$titulo = "Cyber-Panel :: ".$_SESSION['Lang']['zona_login'];
	include("includes/header.php");
?>

	<style type="text/css">
		body
		{
			background-color: #E8E8E8;
		}
		
	</style>

    <div class="container">
     	<div class="row ">  
          	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                <strong><?php echo $_SESSION['Lang']['login_cabecalho']; ?></strong>  
                    </div>
                    <div class="panel-body">
	                    <?php
							// Percorre todos os erros que encontrou na página de login
							foreach($err as $erro)
							{
								echo '
									<div class="alert alert-danger" role="alert">'.$erro.'</div>
								';
							}
							if(isset($_GET['MudaLang']))
							{
								if($_GET['MudaLang'] == 1)
								{
									echo '<div class="alert alert-success" role="alert">'.$_SESSION['Lang']['login_linguagemMudadaSucesso'].'</div>';
								}
								elseif($_GET['MudaLang'] == 0)
								{
									echo '<div class="alert alert-danger" role="alert">'.$_SESSION['Lang']['login_linguagemMudadaErro'].'</div>';
								}
								
							}
						?>
                        <form action="" method="POST">
                           <br />
                            <div class="input-group">
							  	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
							  	<input type="text" name="email" class="form-control" placeholder="<?php echo htmlentities($_SESSION['Lang']['login_email']); ?>" aria-describedby="basic-addon1">
							</div>
							<br />
                            <div class="input-group">
							  	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
							  	<input type="password" name="password" class="form-control" placeholder="<?php echo htmlentities($_SESSION['Lang']['login_password']); ?>" aria-describedby="basic-addon1">
							</div>
							<br />
                         
                         <button type="submit" class="pull-left btn btn-primary"><?php echo $_SESSION['Lang']['login_inicarSessao']; ?></button>
                        </form>
                        <select class="pull-right" onchange="setLang(this); return false;">
                        	<option value="<?php echo htmlentities($_SESSION['Lang_Id']); ?>"><?php echo htmlentities($_SESSION['Lang_Id']); ?></option>
                        	<?php 
                        		foreach (getAllLangs() as $linguagem => $nInteressa) {
                        			if(htmlentities($linguagem) == htmlentities($_SESSION['Lang_Id'])) continue;
                        			?>
                        			<option value="<?php echo htmlentities($linguagem); ?>"><?php echo htmlentities($linguagem); ?></option>
                        			<?php 
                        		}
                        	?>
                        </select>
                    </div>
                </div>
            </div> 
        </div>
    </div>

<script type="text/javascript">
	window.setTimeout(function() {
	    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 2000);
</script>

<script type="text/javascript">
	function setLang(Id)
	{
		console.log("Id tema=> "+Id.value);
		$.post(
			"login.php", 
			{MudarLang: true, ID: Id.value}, 
			function(dados) 
			{
				var dado = JSON.parse(dados);
				console.log("A mudar linguagem"+dados);
				if(dado["Status"] == true)
				{
					//location.href = location.href;
					location.href = "login.php?MudaLang=1";
					//console.log("Okay");
				}
				else
				{
					location.href = "login.php?MudaLang=0";
				}
				
			}
		);
	}
</script>
	
<?php
	/**
	* Incluir Rodapé
	*/
	include("includes/footer.php");
?>