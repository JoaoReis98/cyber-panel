<?php

	@session_start();
	require('includes/smarty/libs/Smarty.class.php'); // Sistema de templates
	require_once("base_dados/config.php");		// Conexão com base de dados
	require_once("base_dados/functions.php");
	require_once("__classes/Utilizador.class.php");	// Classe Utilizador
	require_once("__classes/Servidor.class.php");	// Classe Utilizador
    require_once("includes/querys/SourceQuery.class.php");
	require_once("lang.php");
	
	
	/**
	*	Verifica se o utilizador esta logado
	*/
	if(!isset($_SESSION['Id']))
	{
		header("Location: login.php");
		die();
	}

	$Erros = array();
	$Sucessos = array();
	$hasErros = false;
	$hasSucessos = false;

	$User = new Utilizador($_SESSION['Id'], $conn);
	$User->getInfo();

	if(isset($_GET['Logged']) && isset($_SESSION['Old_Id']))
	{
		if($_GET['Logged'] == 0)
		{
			$Sucessos[] = "Voltas-te a tua conta.";
			$hasSucessos = true;
			echo "<script>location.href = 'index.php?Logged=0';</script>";
		}
	}

    $User->getInfo();
    updateRunningServers($User->getId());
    if($_GET)
    {
        if(isset($_GET['Logged']))
        {
            $Logged = $_GET['Logged'];
            if($Logged == 1)
            {
            	$hasSucessos = true;
                $Sucessos[] = "Login Realizado.";
            }
        }
    }
	
	$total = 0;
	$Servidores = getServidoresByIdUtilizador($User->getId());
	foreach($Servidores as $Servidor)
	{
	
		$server = new Servidor($Servidor['Id'], $conn);
		$server->getFullStatus(); // Fazer update aos Status
		$total += $server->getSlots();
	}
	addInformacaoServidores($Servidores);
	$slotsOcupados = $total;

	$smarty = new Smarty;
	$OldUser = false;
 	if(isset($_SESSION['Old_Id']) && (!empty($_SESSION['Old_Id'])) && ($_SESSION['Id'] != $_SESSION['Old_Id'])) // Tem outra conta iniciada Administrador
	{
		$OldUser = true;
		try
		{
			$OldUserC = new Utilizador($_SESSION['Old_Id'], $conn);	
			$OldUserC->getInfo();
		}
		catch(Exception $e)
		{
			$_SESSION['Old_Id'] = "";
			$OldUser = false;
		}
	}
	else 
	{
		$OldUser = false;
	}

	if($User->getTipoUtilizador() != 1)
	{
		header("Location: index.php");
		die();
	}
	if($_POST)
	{
		if($_POST['Action'])
		{
			$Action = $_POST['Action'];
			if($Action == "MudarPassword" 
				&& isset($_POST['Password']) 	&& !empty($_POST['Password']) 
				&& isset($_POST['Id']) 			&& !empty($_POST['Id']))
			{
				$Password = addslashes(htmlentities($_POST['Password']));
				try
				{
					$UserEditar = new Utilizador($_POST['Id'], $conn);
					$UserEditar->getInfo();
					$UserEditar->setPassword($Password);
					$UserEditar->atualizaInfo();
					$hasSucessos = true;
					$Sucessos[] = "Sucesso ao alterar a password.";
				}
				catch(Exception $e)
				{
					$hasErros = true;
					$Erros[] = "Erro ao alterar a password.";
				}
			}
			elseif($Action == "AdicionarUtilizador")
			{
				
				if(	
					isset($_POST['Email']) 				&& !empty($_POST['Email']) 
					&& isset($_POST['Nome']) 			&& !empty($_POST['Nome']) 
					&& isset($_POST['Apelido']) 		&& !empty($_POST['Apelido']) 
					&& isset($_POST['Password']) 		&& !empty($_POST['Password']) 
					&& isset($_POST['repPassword']) 	&& !empty($_POST['repPassword'])
					&& isset($_POST['TipoUtilizador'])
					&& isset($_POST['MaxServidores']) 
					)
				{

					$Email 			= addslashes(htmlentities($_POST['Email']));
					$Nome 			= addslashes(htmlentities($_POST['Nome']));
					$Apelido 		= addslashes(htmlentities($_POST['Apelido']));
					$Password 		= addslashes(htmlentities($_POST['Password']));
					$repPassword 	= addslashes(htmlentities($_POST['repPassword']));
					$TipoUtilizador = addslashes(htmlentities($_POST['TipoUtilizador']));
					$MaxServidores 	= addslashes(htmlentities($_POST['MaxServidores']));

					if($Password != $repPassword) // Passwords não sao iguais.
					{
						$hasErros = true;
						$Erros[] = htmlentities("As passwords não correspondem.");
					}
					elseif( count( getUtilizadorByEmail( $Email ) ) > 0 ) // Email em uso
					{
						$hasErros = true;
						$Erros[] = "Email <".$Email."> em uso";
						
					}
					else
					{
						$hasSucessos = true;
						$Sucessos[] = "Utilizador <".$Nome." ".$Apelido."> adicionado com sucesso.";
						addUtilizador(0, $Nome, $Apelido, $Email, md5($Password), getDataAtual(), $TipoUtilizador, $MaxServidores, 1);
					}
				}  
				
				else 
				{
					$hasErros = true;
					$Erros[] = htmlentities("Preencha as informações pedidas.");
				}	// Fim Adicionar Utilizador
			} 
			elseif($Action == "RemoverUtilizador")
			{
				$UserRem = new Utilizador($_POST['Id'], $conn);
				$ServidoresRem = getServidoresByIdUtilizador($UserRem->getId());
				if($UserRem->getId() != $User->getId())
				{
					// Eliminar todos os servidores do utilizador

					foreach($ServidoresRem as $ServidorRem) 
					{
						$ServerRem = new Servidor($ServidorRem['Id'], $conn);
						$ServerRem->eliminar();
					}
					$UserRem->eliminar(); // Eliminar Conta do utilizador
				}
			} 
				// Fim Actions
		}// Fim Post[Action]
	} // Fim Post

	if($_GET && !isset($_GET['Logged']))
	{
		if($_GET['Action'])
		{
			$Action = $_GET['Action'];
			if($Action == "Utilizador" && isset($_GET['Id']))
			{
				$Id = $_GET['Id'];
				if($_GET['Option'])
				{
					$Opcao = $_GET['Option'];
					if($Opcao == "Ver") // Opção ver informação do utilizador
					{
						$UserVer = new Utilizador($Id, $conn); // Criar instância do Utilizador
						$UserVer->getInfo();	// Atualizar a informação do utilizador
						#if()
						if(!$UserVer->getExiste()) // Se Utilizador não existir a password ira ser "null"
						{
					
							echo '
							<script>
								window.location.replace("admin.php");
							</script>
							';
							die();
						}
					}
				}
			}
		}
	}
	
	$OldUser = false;
 	if(isset($_SESSION['Old_Id']) && (!empty($_SESSION['Old_Id'])) && ($_SESSION['Id'] != $_SESSION['Old_Id'])) // Tem outra conta iniciada Administrador
	{
		$OldUser = true;
		try
		{
			$OldUserC = new Utilizador($_SESSION['Old_Id'], $conn);	
			$OldUserC->getInfo();
		}
		catch(Exception $e)
		{
			$_SESSION['Old_Id'] = "";
			$OldUser = false;
		}
	}
	else 
	{
		$OldUser = false;
	}
	if($_POST)
	{
		if(isset($_POST['Action']))
		{
			$Acao = $_POST['Action'];
			if(isset($_POST['Id']))
			{
				if($_POST['Id'] == $UserVer->getId())
				{
					$UserVer->getInfo();
					if($Acao == "Upgrade")
					{
						$UserVer->setTipoUtilizador(1);
						$UserVer->atualizaInfo();
					}

					if($Acao == "Downgrade")
					{
						$UserVer->setTipoUtilizador(0);
						$UserVer->atualizaInfo();
					}
				}
			}
		}
	}
	$smarty = new Smarty;
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 0;

	$smarty->assign("NomeTema", $User->getNomeTema(), true);
	$smarty->assign("PastaTema", $User->getPastaTema(), true);
	$smarty->assign("Titulo", "Cyber-Panel", true);
	$smarty->assign("Zona", $linguagens[$User->getLinguagem()]['zona_administracao'], true);

	$PercentagemServidores = round(getPercentagem($User->getNumeroServidores(), $User->getNumeroMaxServidores()));

	if($OldUser)
	{
		$Uti = array(
				"Nome" 			=> utf8_encode($User->getNome()),
				"Apelido" 		=> utf8_encode($User->getApelido()),
				"Email" 		=> utf8_encode($User->getEmail()),
				"Id" 			=> $User->getId(),
				"IdTema" 		=> $User->getIdTema(),
				"NomeTema" 		=> $User->getNomeTema(),
				"NumServidores"	=> count(getServidoresByIdUtilizador($User->getId())),
				"MaxServidores" => $User->getNumeroMaxServidores(),
				"IsAdmin"		=> $User->isAdmin(),
				"PercentUsado"	=> round($PercentagemServidores),
				"OldUser"		=> $OldUser,
				"OldId"			=> $OldUserC->getId(),
				"OldNome"		=> utf8_encode($OldUserC->getNome()),
				"OldApelido"	=> utf8_encode($OldUserC->getApelido()),
				"OldEmail"		=> utf8_encode($OldUserC->getEmail()),
			);
	}
	else 
	{
			$Uti = array(
				"Nome" 			=> utf8_encode($User->getNome()),
				"Apelido" 		=> utf8_encode($User->getApelido()),
				"Email" 		=> utf8_encode($User->getEmail()),
				"Id" 			=> $User->getId(),
				"IdTema" 		=> $User->getIdTema(),
				"NomeTema" 		=> $User->getNomeTema(),
				"NumServidores"	=> count(getServidoresByIdUtilizador($User->getId())),
				"MaxServidores" => $User->getNumeroMaxServidores(),
				"IsAdmin"		=> $User->isAdmin(),
				"PercentUsado"	=> round($PercentagemServidores),
				"OldUser"		=> $OldUser,
			);
	}


	$smarty->assign("Utilizador", $Uti);
	$smarty->assign("Infos", array(
							"NumServidores" 		=> count(getServidoresByIdUtilizador($User->getId())),
							"NumServidoresOnline" 	=> count(getServidoresByIdUtilizadorAndStatus($User->getId(), 1)),
							"NumServidoresOffline" 	=> count(getServidoresByIdUtilizadorAndStatus($User->getId(), 0)),
							"NumSlotsOcupados"		=> $slotsOcupados,
							));
	$smarty->assign("TiposServidores", getAllTiposServidores());
	$smarty->assign("Servidores", getServidoresByIdUtilizador($User->getId()));
	$smarty->assign("Lang", $linguagens[$User->getLinguagem()]);
	$smarty->assign("LangKey", $User->getLinguagem());
	$smarty->assign("Langs", getLangKeys());
	$smarty->assign("hasErros", $hasErros);
	$smarty->assign("hasSucessos", $hasSucessos);
	$smarty->assign("Sucessos", $Sucessos);
	$smarty->assign("Erros", $Erros);
	$smarty->assign("Temas", getAllTemas());

	$UtilizadoresAntes = getAllUtilizadores();
	$Utilizadores = addInformacaoUtilizadores($UtilizadoresAntes);

	$smarty->assign("NumUtilizadores", count($Utilizadores));
	$smarty->assign("Utilizadores", $Utilizadores);
	$passo1 = false;
	$passo2 = false;
	$passo3 = false;
	$passo4 = false;
	$opcao = "";
	$UserVer = null;
	$UserVerIgual = false;
	if($_GET && !isset($_GET['Logged']))
	{
		$passo1 = true;
		if($_GET['Action'])
		{
			$passo2 = true;
			if($Action == "Utilizador" && isset($_GET['Id']))
			{
				$passo3 = true;
				if($_GET['Option'])
				{
					$passo4 = true;
					$opcao = $_GET['Option'];
					if ($Opcao == "Login")
					{
						try
						{
							$UserVer = new Utilizador($_GET['Id'], $conn); // Criar instância do Utilizador
							$UserVer->getInfo();	// Atualizar a informação do utilizador
							$_SESSION['Id'] = $UserVer->getId();  // Meter Id do utilizar em que quer fazer login
							$_SESSION['Old_Id'] = $User->getId(); // Para voltar a Admin
							echo '
							<script>
								window.location.replace("index.php?Logged=1");
							</script>
							';
							die();
						}
						catch(Exception $e)
						{
							$Erros[] = $linguagens[$User->getLinguagem()]['alerta_erroAoFazerLogin'];
						}
					}
				}

				$UserVer = new Utilizador($Id, $conn); // Criar instância do Utilizador
				$UserVer->getInfo();	// Atualizar a informação do utilizador

				if(!$UserVer->getExiste()) // Se Utilizador não existir
				{
					echo '
					<script>
						window.location.replace("admin.php");
					</script>
					';
					die();
				}

				if($UserVer == $User)
				{
					$UserVerIgual = true;
				}


					$total = 0;
					$Servidores = getServidoresByIdUtilizador($UserVer->getId());
					foreach($Servidores as $Servidor)
					{
					
						$server = new Servidor($Servidor['Id'], $conn);
						$server->getFullStatus(); // Fazer update aos Status
						$total += $server->getSlots();

					}
					addInformacaoServidores($Servidores);
					$slotsOcupados = $total;



				$smarty->assign("UserVer", array(
					"Nome" 			=> utf8_encode($UserVer->getNome()),
					"Apelido" 		=> utf8_encode($UserVer->getApelido()),
					"Email" 		=> utf8_encode($UserVer->getEmail()),
					"Id" 			=> $UserVer->getId(),
					"IdTema" 		=> $UserVer->getIdTema(),
					"NomeTema" 		=> $UserVer->getNomeTema(),
					"NumServidores"	=> count(getServidoresByIdUtilizador($UserVer->getId())),
					"MaxServidores" => $UserVer->getNumeroMaxServidores(),
					"IsAdmin"		=> $UserVer->isAdmin(),
					"SlotsUsados"	=> $slotsOcupados,
					"PercentUsado"	=> round(getPercentagem($UserVer->getNumeroServidores(), $UserVer->getNumeroMaxServidores())),
					)
				);
			}
		}
	}
	$smarty->assign("passo1", $passo1);
	$smarty->assign("passo2", $passo2);
	$smarty->assign("passo3", $passo3);
	$smarty->assign("passo4", $passo4);
	$smarty->assign("Opcao", $opcao);
	$smarty->assign("UserVerIgual", $UserVerIgual);
	$smarty->display($User->getPastaTema().'/admin.tpl');
?>
<style type="text/css">
	#FullWidth {
	    width: calc(100% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(100% - 12px); /*For safari 6.0*/
	}
</style>
<?php 
if(isset($UserVer))
{
?>
<script type="text/javascript">
function adicionarMaxServidores($id)
{
	// Adicionar Servidores
	console.log("A realizar pedido para aumentar servidores");
	$.get("includes/api.php", {Id:"<?php echo $UserVer->getId(); ?>", AJAX: "AUMENTARMAXSERVIDORES"},
	    function(Result){
	    	if(Result.Status)
	    	{
	    		console.log("A mudar para"+Result.MaxServidores);
	         	//$("#StatusComando").html("<div class=\"alert alert-success\" role=\"alert\">Comando executado com sucesso! [ "+comando+" ]</div>");
	    		$("#MaxServidores").html(Result.MaxServidores);
	    		arranjaBarra(Result.Percentagem);
	    		arranjaBarra(Result.Percentagem);
	    	}
	    },'json'
 	);
	
}
function diminuirMaxServidores($Id)
{
	// Diminuir Servidores
	console.log("A realizar pedido para aumentar servidores");
	$.get("includes/api.php", {Id:"<?php echo $UserVer->getId(); ?>", AJAX: "DIMINUIRMAXSERVIDORES"},
	    function(Result){
	    	if(Result.Status)
	    	{
	    		console.log("A mudar para"+Result.MaxServidores);
	    		$("#MaxServidores").html(Result.MaxServidores);
	    		arranjaBarra(Result.Percentagem);
	    	}
	    },'json'
 	);
 	
}
function arranjaBarra(percentagem)
{
	$("#barraProgresso").width(percentagem+"%");
	$("#barraProgresso").html(percentagem+"%");
	if(percentagem > 0)
	{
		if($("#barraProgressoClasse").length == 0) 
		{
			$("#barraProgresso").removeClass("progress-bar-danger").removeClass("progress-bar-warning").addClass("progress-bar-success");
		}
		else 
		{
			$("#barraProgressoClasse").removeClass("progress-danger").removeClass("progress-warning").addClass("progress-success");
		}
	}
	if(percentagem > 49)
	{
		if($("#barraProgressoClasse").length == 0) 
		{
			$("#barraProgresso").removeClass("progress-bar-danger").removeClass("progress-bar-success").addClass("progress-bar-warning");
		}
		else 
		{
			$("#barraProgressoClasse").removeClass("progress-bar-danger").removeClass("progress-success").addClass("progress-warning");
		}
	}
	if(percentagem > 89)
	{
		if($("#barraProgressoClasse").length == 0) 
		{
			$("#barraProgresso").removeClass("progress-bar-warning").removeClass("progress-bar-success").addClass("progress-bar-danger");
		}
		else 
		{
			$("#barraProgressoClasse").removeClass("progress-warning").removeClass("progress-success").addClass("progress-danger");
		}
	}
}
</script>
<?php } ?>