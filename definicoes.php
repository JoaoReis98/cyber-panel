<?php

	@session_start();
	require('includes/smarty/libs/Smarty.class.php'); // Sistema de templates
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
    $User = new Utilizador($_SESSION['Id'], $conn);		// Depois de estar logado receber toda a informação do utilizador
    $User->getInfo();
    updateRunningServers($User->getId());
    if($_GET)
    {
        if(isset($_GET['Logged']))
        {
            $Logged = $_GET['Logged'];
            if($Logged == 1)
            {
                $Sucessos[] = $linguagens[$User->getLinguagem()]['alerta_loginRealizado'];
            }
        }
        if(isset($_GET['Option']) && $_GET['Option'] == "Login")
        {
            try
            {
                $_SESSION['Id'] = $_SESSION['Old_Id'];  // Meter Id do utilizar anterior
                $_SESSION['Old_Id'] = "";
                unset($_SESSION['Old_Id']);
                header("Location: admin.php?Logged=0");
                die();
            }
            catch(Exception $e)
            {
                $Erros[] = $linguagens[$User->getLinguagem()]['alerta_erroAoFazerLogin'];
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

	if($_POST)
	{
		if(isset($_POST['MudarTema']) && isset($_POST['ID']))
		{
			if(count(getTemaById($_POST['ID'])))
			{
				$User->setIdTema($_POST['ID']);
				$User->atualizaInfo();
				$User->getInfo();
				echo json_encode(
					array(
						"Status" => true, 
						"Result" => $linguagens[$User->getLinguagem()]['alerta_okMudarTema']
						)
					);
				die();
			}
			else 
			{
				echo json_encode(
					array(
						"Status" => false, 
						"Result" => $linguagens[$User->getLinguagem()]['alerta_erroMudarTema']
						)
					);
				die();
			}
			echo json_encode(
				array(
					"Status" => false, 
					"Result" => $linguagens[$User->getLinguagem()]['alerta_erroMudarTema']
					)
				);
			die();
		}
		if(isset($_POST['MudarLang']) && isset($_POST['ID']))
		{
			if(getLangById($_POST['ID']) != false)
			{
				$User->setLinguagem($_POST['ID']);
				$User->atualizaInfo();
				$User->getInfo();
				echo json_encode(
					array(
						"Status" => true, 
						"ID"	 => $User->getLinguagem(),
						"Result" => $linguagens[$User->getLinguagem()]['alerta_okMudarLinguagem']
						)
					);
				die();
			}
			else 
			{
				echo json_encode(
					array(
						"Status" => false, 
						"Result" => $linguagens[$User->getLinguagem()]['alerta_erroMudarLinguagem']
						)
					);
				die();
			}
			echo json_encode(
					array(
						"Status" => false, 
						"Result" => $linguagens[$User->getLinguagem()]['alerta_erroMudarLinguagem']
						)
					);
			die();
		}
	}

	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 10;

	$smarty->assign("NomeTema", $User->getNomeTema(), true);
	$smarty->assign("PastaTema", $User->getPastaTema(), true);
	$smarty->assign("Titulo", "Cyber-Panel", true);
	$smarty->assign("Zona", $linguagens[$User->getLinguagem()]['zona_definicoes'], true);
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
	$smarty->assign("Temas", getAllTemas());
	$smarty->display($User->getPastaTema().'/definicoes.tpl');
	#$smarty->display('Metromega/index.tpl');
?>
<script type="text/javascript">
	function setTema(Id)
	{
		console.log("Id tema=> "+Id.value);
		$.post(
			"definicoes.php", 
			{MudarTema: true, ID: Id.value}, 
			function(dados) 
			{
				var dado = JSON.parse(dados);
				if(dado['Status'] == true)
				{
					location.href = location.href;
				}
				else
				{
					alert("Erro ao mudar de tema. Tente novamente.");
				}
				
			}
		);
	}
	function setLang(Id)
	{
		console.log("Id tema=> "+Id.value);
		$.post(
			"definicoes.php", 
			{MudarLang: true, ID: Id.value}, 
			function(dados) 
			{
				var dado = JSON.parse(dados);
				console.log("A mudar linguagem"+dados);
				if(dado["Status"] == true)
				{
					//location.href = location.href;
					location.href = location.href;
					//console.log("Okay");
				}
				else
				{
					alert("Erro ao mudar linguagem. Tente novamente.");
				}
				
			}
		);
	}
</script>