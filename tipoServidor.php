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
                $Sucessos[] = "Login Realizado.";
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
                $Erros[] = "Erro ao realizar login";
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
				echo json_encode(array("Status" => true, "Result" => "Tema alterado com sucesso!"));
				die();
			}
			else 
			{
				echo json_encode(array("Status" => false, "Result" => "Erro ao alterar tema!"));
				die();
			}
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
						"Result" => "Linguagem alterada com sucesso!"
						)
					);
				die();
			}
			else 
			{
				echo json_encode(
					array(
						"Status" => false, 
						"Result" => "Erro ao alterar linguagem!"
						)
					);
				die();
			}
			echo json_encode(
					array(
						"Status" => false, 
						"Result" => "Erro ao alterar linguagem!"
						)
					);
			die();
		}
	}
	if($_GET)
	{
		if(!isset($_GET['Tipo']) && empty($_GET['Tipo']))
		{
			header("Location: index.php");
			die();
		}
		$Tipo = addslashes($_GET['Tipo']);
	}
	else
	{
		header("Location: index.php");
		die();
	}
	
	$ServidoresTipo = getServidorByTipoServidorAndIdUtilizador($Tipo, $User->getId());
	foreach($ServidoresTipo as $Servidor)
	{
	
		$server = new Servidor($Servidor['Id'], $conn);
		$server->getFullStatus(); // Fazer update aos Status
	}
	addInformacaoServidores($ServidoresTipo);

	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 10;

	$smarty->assign("NomeTema", $User->getNomeTema(), true);
	$smarty->assign("PastaTema", $User->getPastaTema(), true);
	$smarty->assign("Titulo", "Cyber-Panel", true);
	$smarty->assign("Zona", $linguagens[$User->getLinguagem()]['zona_criarServidor'], true);
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
	$smarty->assign("NumTiposServidores", count(getAllTiposServidores()));
	$smarty->assign("Servidores", getServidoresByIdUtilizador($User->getId()));
	$smarty->assign("TipoServidor", getTipoServidorById($Tipo)['Nome']);
	$smarty->assign("NumServidoresTipo", count($ServidoresTipo));
	$smarty->assign("ServidoresTipo", $ServidoresTipo);
	$smarty->assign("Lang", $linguagens[$User->getLinguagem()]);
	$smarty->assign("LangKey", $User->getLinguagem());
	$smarty->assign("Langs", getLangKeys());
	$smarty->assign("Temas", getAllTemas());
	$smarty->assign("IpServidor", $_SERVER['SERVER_ADDR']);
	$smarty->display($User->getPastaTema().'/tipoServidor.tpl');
	#$smarty->display('Metromega/index.tpl');
?>
<script type="text/javascript">
  setInterval(function(){ 
  <?php
  	$Servidores = array(); 
	$Servidores = getServidorByTipoServidorAndIdUtilizador($Tipo, $User->getId());
    foreach($Servidores as $Servidor)
    {
      $server = new Servidor($Servidor['Id'], $conn);
  ?>

    // Pedido Ajax para atualizar status do servidor como os Slots usados, Slots maximos, e mapa atual.
    
       // Pedido Ajax para atualizar status do servidor como os Slots usados, Slots maximos, e mapa atual.
					$.get("includes/api.php", {Id:"<?php echo $server->getId(); ?>", AJAX: "Info"},
						function(Result){
						if(Result.Status)
						{
							$("#Slots<?php echo $server->getId(); ?>").text(Result.Slots);
							
							// console.log("Updated "+Result.Id+"!");
							if(Result.Online == 0)
							{
								$("#Status"+Result.Id).html("<font color='red'>Offline</font>");
							}
							else 
							{
								$("#Status"+Result.Id).html("<font color='green'>Online</font>");
								$("#MaxSlots<?php echo $server->getId(); ?>").text(Result.MaxSlots);
							}
							if(Result.Jogadores.length > 0)
							{
							}
							else
							{
							}
						}
						},'json'
					);

  <?php
    }
  ?>
}, 5000);
</script>

<?php
	exit();
?>