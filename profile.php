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
                $Sucessos[] = $linguagens[$User->getLinguagem()]['sucesso_realizarLoginOutroUser'];
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
                $Erros[] = $linguagens[$User->getLinguagem()]['erro_realizarLoginOutroUser'];
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

	$Sucessos = array();
	$Erros = array();
	if($_POST)
	{
		if($_POST['Action'])
		{
			$Action = $_POST['Action'];
			if($Action == "MudarPassword")
			{
				if(isset($_POST['PasswordAtual']) && !empty($_POST['PasswordAtual']) && isset($_POST['NovaPassword']) && !empty($_POST['NovaPassword']) && isset($_POST['RepNovaPassword']) && !empty($_POST['RepNovaPassword']))
				{
					$PasswordAtual = md5(addslashes(htmlentities($_POST['PasswordAtual'])));
					$NovaPassword = addslashes(htmlentities($_POST['NovaPassword']));
					$RepNovaPassword = addslashes(htmlentities($_POST['RepNovaPassword']));
					if($NovaPassword == $RepNovaPassword && $User->getPassword() == $PasswordAtual)
					{
						try
						{
							$User->setPassword($NovaPassword);
							$User->atualizaInfo();
							$Sucessos[] = $linguagens[$User->getLinguagem()]['sucesso_mudarPassword'];
						}
						catch(Exception $e)
						{
							$Erros[] = $linguagens[$User->getLinguagem()]['erro_mudarPassword'];
						}
					}
					else
					{
						$Erros[] = $linguagens[$User->getLinguagem()]['erro_passwordsNaoSaoIguais'];
					}
					
				}
				else
				{
					$Erros[] = $linguagens[$User->getLinguagem()]['erro_mudarPassword'];
				}
			}
			elseif($Action == "EditarPerfil")
			{
				if(isset($_POST['Nome']) && isset($_POST['Apelido']) && isset($_POST['Email']) && isset($_POST['Password']) &&
					!empty($_POST['Nome']) && !empty($_POST['Apelido']) && !empty($_POST['Email']) && !empty($_POST['Password']))
				{
					if(md5($_POST['Password']) == $User->getPassword())
					{
						try 
						{
							$Nome = htmlentities(addslashes($_POST['Nome']));
							$Apelido = htmlentities(addslashes($_POST['Apelido']));
							$Email = htmlentities(addslashes($_POST['Email']));
							if($User->getEmail() == $Email)
							{
								$User->setNome($Nome);
								$User->setApelido($Apelido);
								$User->setEmail($Email);
								$User->atualizaInfo();
								$Sucessos[] = $linguagens[$User->getLinguagem()]['sucesso_editarPerfil'];
							}
							else 
							{
								if(count(getUtilizadorByEmail($Email)))
								{
									$Erros[] = $linguagens[$User->getLinguagem()]['erro_emailJaRegistado'];
								}
								else 
								{
									$User->setNome($Nome);
									$User->setApelido($Apelido);
									$User->setEmail($Email);
									$User->atualizaInfo();
									$Sucessos[] = $linguagens[$User->getLinguagem()]['sucesso_editarPerfil'];
								}
							}
						}
						catch(Exception $e)
						{
							$Erros[] = $linguagens[$User->getLinguagem()]['erro_editarPerfil'];
						}
					}
					else 
					{
						$Erros[] = $linguagens[$User->getLinguagem()]['erro_passwordErrada'];
					}
				}
				else 
				{
					$Erros[] = $linguagens[$User->getLinguagem()]['erro_editarPerfil'];
				}
			}
			elseif($Action == "toggleCron")
			{
				$User->setCron(!$User->hasCron());
				$User->atualizaInfo();
			}
			else 
			{
				
			}
		}
	}

	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 10;

	$smarty->assign("NomeTema", $User->getNomeTema(), true); 					// Nome do Tema
	$smarty->assign("PastaTema", $User->getPastaTema(), true); 					// Pasta do Tema
	$smarty->assign("Titulo", "Cyber-Panel", true); 							// Titulo do HTML
	$smarty->assign("Zona", $linguagens[$User->getLinguagem()]['zona_perfil'], true); // Zona em que se encontra
	$PercentagemServidores = round(getPercentagem($User->getNumeroServidores(), $User->getNumeroMaxServidores()));
	if($OldUser) // Verificar se está logado com outra conta, exemplo: Admin ter entrado na conta de outro utlizador
	{
		$Uti = array(
				"Nome" 			=> utf8_encode($User->getNome()),
				"Apelido" 		=> utf8_encode($User->getApelido()),
				"Email" 		=> utf8_encode($User->getEmail()),
				"Id" 			=> $User->getId(),
				"IdTema" 		=> $User->getIdTema(),
				"NomeTema" 		=> $User->getNomeTema(),
				"IsAdmin"		=> $User->isAdmin(),
				"NumServidores"	=> count(getServidoresByIdUtilizador($User->getId())),
				"MaxServidores" => $User->getNumeroMaxServidores(),
				"PercentUsado"	=> round($PercentagemServidores),
				"Cron"			=> $User->hasCron(),
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
				"Cron"			=> $User->hasCron(),
				"OldUser"		=> $OldUser,
			);
	}
	// Passar Dados para Sistema Smarty.
	$smarty->assign("Utilizador", $Uti);										// Informação sobre o utilizador
	$smarty->assign("Infos", array(
							"NumServidores" 		=> count(getServidoresByIdUtilizador($User->getId())),
							"NumServidoresOnline" 	=> count(getServidoresByIdUtilizadorAndStatus($User->getId(), 1)),
							"NumServidoresOffline" 	=> count(getServidoresByIdUtilizadorAndStatus($User->getId(), 0)),
							"NumSlotsOcupados"		=> $slotsOcupados,
							));													// Informação adicional
	$smarty->assign("TiposServidores", getAllTiposServidores());				// Todos os tipos de servidores disponiveis
	$smarty->assign("Servidores", getServidoresByIdUtilizador($User->getId())); // Todos os servidores do utilizador
	$smarty->assign("Lang", $linguagens[$User->getLinguagem()]); 				// Todas as palavras da lingua dele.
	$smarty->assign("LangKey", $User->getLinguagem());							// Nome da Linguagem atual
	$smarty->assign("Langs", getLangKeys()); 									// Todas as linguagens disponiveis
	$smarty->assign("Temas", getAllTemas()); 									// Todos os temas disponiveis
	$smarty->assign("Erros", $Erros); 											// Erro(s) caso exista(m) algum(ns)
	$smarty->assign("Sucessos", $Sucessos); 									// Sucesso(s) caso exista(m) algum(ns)
	$smarty->display($User->getPastaTema().'/profile.tpl'); 					// Devolver para utilizador o template.
?>