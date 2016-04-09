<?php
	@session_start();
	require_once("../base_dados/config.php");
	require_once("../base_dados/functions.php");
	require_once("../__classes/Utilizador.class.php");	// Classe Utilizador
	require_once("../__classes/Servidor.class.php");	// Classe Servidor
	require_once("../includes/querys/minecraftQuery.class.php");	// Classe Status Minecraft
	require_once("../includes/querys/SourceQuery.class.php");
	require_once("../lang.php");

	/**
	*    This file is part of Cyber-Panel.
	*
	*    Cyber-Panel is free software: you can redistribute it and/or modify
	*    it under the terms of the GNU General Public License as published by
	*    the Free Software Foundation, either version 3 of the License, or
	*    (at your option) any later version.
	*
	*    Cyber-Panel is distributed in the hope that it will be useful,
	*    but WITHOUT ANY WARRANTY; without even the implied warranty of
	*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	*    GNU General Public License for more details.
	*
	*    You should have received a copy of the GNU General Public License
	*    along with Cyber-Panel.  If not, see <http://www.gnu.org/licenses/>.
	*/

	/**
	*	Executa um comando para o servidor
	*	@deprecated
	*	@author João Reis
	*/
	function executaComandoServidorById($Id, $Comando)
	{
		shell_exec('sudo tmux send -t '.$Id.' "'.$Comando.'" ENTER');
	}

	/**
	*	Retorna Logs de um servidor.
	*	@author João Reis
	*	@return Array
	*/
	function getServerLogsById($Id)
	{
		global $conn;
		$Server = new Servidor($Id, $conn);
		$Server->getInfo();
		if($Server->getStatus() == 0)
		{
			return array();
		}
		$output = shell_exec("sudo tmux capture-pane -t $Id");
		$output = shell_exec("sudo tmux show-buffer");
		$Linhas = explode("\n", $output);
		$Logs = array();
		foreach($Linhas as $Linha)
		{
			$Logs[] = htmlentities($Linha);
		}
		return $Logs;
	}


	/**
	*	Instalar servidor apagando se existir o servidor atual, e instalar.
	*	@author João Reis
	*/
	function instalarServidor($Id)
	{
		global $conn;
		$server = new Servidor($Id, $conn); // cria instancia do servidor
		$server->getFullStatus();	// Atualiza informaçao do servidor
		$server->instalarServidor();
	}

	/**
	*	Inicia servidor.
	*	@author João Reis
	*/
	function iniciarServidor($Id)
	{
		global $conn;
		// Tenta Criar instancia do Servidor e iniciar
		try
		{
			$Server = new Servidor($Id, $conn);
			$Server->iniciarServidor();
			$Server->setStatus(1);
			$Server->atualizaInfo();
			$Server->getInfo();
			return true;
		}
		catch(Exception $e)
		{
			return false;
		}
		
	}
	/**
	*	Para servidor.
	*	@author João Reis
	*/
	function pararServidor($Id)
	{
		global $conn;
		// Tenta Criar instancia do Servidor e parar
		try
		{
			$Server = new Servidor($Id, $conn);
			$Server->pararServidor();
			$Server->setStatus(0);
			$Server->atualizaInfo();
			$Server->getInfo();
			return true;
		}
		catch(Exception $e)
		{
			return false;
		}
	}

	/**
	*	Verificar se tem sessão iniciada
	*/
	$User = null; // Inicialização.
	if(!isset($_SESSION['Id']))
	{
		die();
	}
	else 
	{
		$User = new Utilizador($_SESSION['Id'], $conn);		// Depois de estar logado receber toda a informação do utilizador
	}

	$Lang = $linguagens[$User->getLinguagem()];

	if($_GET)
	{
		if(isset($_GET['Id']))
		{

			/**
			*	Se o servidor não pertencer ao utilizador e o utilizador não for admin então negar acesso a API.
			*/
			if(!isServerOwnedById($_GET['Id'], $User->getId()) && !$User->isAdmin())
			{
				die(
					json_encode(
						array(
							"Status" => false, 
							"Mensagem" => "Acesso NEGADO!"
							)
						)
					);
			}
			
			updateRunningServers($User->getId()); // Update de todos os servidores para com a base de dados antes de fazer alguma ação.

			# Pedidos de Ação
			if(isset($_GET['Action']) && isset($_GET['Id']))	// Verificar se é necessario efetuar alguma açao no servidor
			{
				if($_GET['Action'] == "Start")	// Pedido para ligar algum servidor
				{
					iniciarServidor($_GET['Id']);	// Iniciar servidor
					if(isset($_GET['Return']))
					{
						header("Location: ../servidor.php?Id=".$_GET['Id']);
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> $Lang['api_servidorIniciado']
						)
					);
					die();
				}
				elseif($_GET['Action'] == "Stop") // Pedido para desligar algum servidor
				{
					pararServidor($_GET['Id']); // Parar servidor 
					if(isset($_GET['Return']))
					{
						header("Location: ../servidor.php?Id=".$_GET['Id']);
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> $Lang['api_servidorParado']
						)
					);
					die();
				}
				elseif($_GET['Action'] == "Update") // Pedido para desligar algum servidor
				{
					#atualizar($_GET['Id']); // Parar servidor 
					$Server = new Servidor($_GET['Id'], $conn);
					$Server->atualizarServidor();
					$Server->atualizaInfo();
					if(isset($_GET['Return']))
					{
						header("Location: ../servidor.php?Id=".$_GET['Id']);
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> "Atualizado"
						)
					);
					die();
				}
				elseif ($_GET['Action'] == "EliminarServidor") 
				{
					
					$Server = new Servidor($_GET['Id'], $conn);
					$Server->pararServidor();
					$Server->setStatus(0);
					$Server->atualizaInfo();

					$Server->eliminar();	// Eliminar

					if(isset($_GET['Return']))
					{
						header("Location: ../index.php?Successo=1");
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> $Lang['api_servidorEliminado']
						)
					);
					die();
				}
				elseif($_GET['Action'] == "MudaMotd" && isset($_GET['Motd']))
				{
					$Servidor = new Servidor($_GET['Id'], $conn); // Cria Servidor
					$Servidor->setMotd(addslashes(htmlentities($_GET['Motd']))); // Mudar Motd.
					$Servidor->atualizaInfo(); // Faz update na base de dados do Motd Novo

					if(isset($_GET['Return']))
					{
						
						if($Servidor->getMotd() == $_GET['Motd'])
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Sucesso=1");
						}
						else
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Erro=1");
						}
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> $Lang['api_motdAlteradoPara']." ".$Servidor->getMotd()
						)
					);
					die();
				}
				elseif($_GET['Action'] == "MudaIp" && isset($_GET['Ip']))
				{
					$Servidor = new Servidor($_GET['Id'], $conn); // Cria Servidor
					$Servidor->setIp(addslashes(htmlentities($_GET['Ip']))); // Mudar Ip.
					$Servidor->atualizaInfo(); // Faz update na base de dados do Motd Novo

					if(isset($_GET['Return']))
					{
						if($Servidor->getIp() == $_GET['Ip'])
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Sucesso=2");
						}
						else
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Erro=2");
						}
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> $Lang['api_ipAlteradoPara']." ".$Servidor->getIp()
						)
					);
					die();
				}
				elseif($_GET['Action'] == "MudaPorta" && isset($_GET['Porta']))
				{
					$Servidor = new Servidor($_GET['Id'], $conn); // Cria Servidor
					$Servidor->setPorta(addslashes(htmlentities($_GET['Porta']))); // Mudar Porta.
					$Servidor->atualizaInfo(); // Faz update na base de dados do Motd Novo

					if(isset($_GET['Return']))
					{
						if($Servidor->getPorta() == $_GET['Porta'])
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Sucesso=3");
							die();
						}
						else
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Erro=3");
							die();
						}
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> $Lang['api_portaAlteradaPara'].$Servidor->getPorta()
						)
					);
					die();
				}
				elseif($_GET['Action'] == "MudaPortaQuery" && isset($_GET['PortaQuery']))
				{
					$Servidor = new Servidor($_GET['Id'], $conn); // Cria Servidor
					$Servidor->setPortaQuery(addslashes(htmlentities($_GET['PortaQuery']))); // Mudar PortaQuery.
					$Servidor->atualizaInfo(); // Faz update na base de dados do Motd Novo

					if(isset($_GET['Return']))
					{
						if($Servidor->getPortaQuery() == $_GET['PortaQuery'])
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Sucesso=4");
						}
						else
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Erro=4");
						}
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> $Lang['api_portaQueryAlteradaPara'].$Servidor->getPortaQuery()
						)
					);
					die();
				}
				elseif($_GET['Action'] == "MudaNomeServidor" && isset($_GET['NomeServidor']))
				{
					$Servidor = new Servidor($_GET['Id'], $conn); // Cria Servidor
					$Servidor->setNomeServidor(addslashes(htmlentities($_GET['NomeServidor']))); // Mudar PortaQuery.
					$Servidor->atualizaInfo(); // Faz update na base de dados do Motd Novo

					if(isset($_GET['Return']))
					{
						if($Servidor->getNomeServidor() == $_GET['NomeServidor'])
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Sucesso=5");
						}
						else
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Erro=5");
						}
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> $Lang['api_nomeServidorAlteradoPara']." ".$Servidor->getNomeServidor()
						)
					);
					die();
				}
				elseif($_GET['Action'] == "MudaMapaInicial" && isset($_GET['MapaInicial']))
				{
					$Servidor = new Servidor($_GET['Id'], $conn); // Cria Servidor
					$Servidor->setMapaInicial(addslashes(htmlentities($_GET['MapaInicial']))); // Mudar PortaQuery.
					$Servidor->atualizaInfo(); // Faz update na base de dados do Motd Novo

					if(isset($_GET['Return']))
					{
						if($Servidor->getMapaInicial() == $_GET['MapaInicial'])
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Sucesso=6");
						}
						else
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Erro=6");
						}
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> "Alterado com sucesso!"
						)
					);
					die();
				}
				elseif($_GET['Action'] == "MudaMaxSlots" && isset($_GET['MaxSlots']))
				{
					$Servidor = new Servidor($_GET['Id'], $conn); // Cria Servidor
					$Servidor->setMaxSlotsDb((int) htmlentities($_GET['MaxSlots'])); // Mudar PortaQuery.
					$Servidor->atualizaInfo(); // Faz update na base de dados do Motd Novo

					if(isset($_GET['Return']))
					{
						if($Servidor->getMaxSlotsDb() == $_GET['MaxSlots'])
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Sucesso=6");
						}
						else
						{
							header("Location: ../servidor.php?Id=".$_GET['Id']."&Erro=6");
						}
						die();
					}
					echo json_encode(array(
						"Status"	=> true,
						"Id"		=> $_GET['Id'],
						"Mensagem"	=> "Alterado com sucesso!"
						)
					);
					die();
				}
			}



			/**
			*	Pedidos API AJAX
			*/
			# pedidos para API para receber info ( AJAX )
			if(isset($_GET['AJAX']))
			{
				$Id = addslashes($_GET['Id']);
				$Pedido = $_GET['AJAX'];

				if($Pedido == "Info")
				{
					$Server = new Servidor($Id, $conn);
					$Server->getFullStatus();
					$Jogadores = $Server->getSlots();
					updateRunningServers($User->getId());
					echo json_encode(
						array(
							"Status" 	=> true,
							"Id" 		=> $Id,
							"Online" 	=> $Server->getStatus(),
							"Slots" 	=> $Server->getSlots(),
							"MaxSlots" 	=> $Server->getMaxSlots(),
							"Mapa"		=> $Server->getMapaAtual(),
							"Jogadores" => $Server->getJogadores(),
							"Plugins" 	=> $Server->getPlugins(),
							"Versao" 	=> $Server->getVersao()
							)
						);
					die();

				}
				elseif($Pedido == "GETLOGS") // Devolve Logs do Servidor para JSON
				{			
					$Server = new Servidor($Id, $conn);
					#$Server->getFullStatus();
					updateRunningServers($User->getId());
					echo json_encode(array(
						"Status" 	=> true,
						"StatusSv"	=> $Server->getStatus(),
						"Linhas" 	=> getServerLogsById($Id)
						)
					);
					die();
				}
				elseif(isset($_GET['Comando']) && $Pedido == "EXECUTACOMANDO") // Executa comando
				{
					$comando = addslashes($_GET['Comando']);
					$teste = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', trim(strtolower($comando)));
					if($teste == "quit" || $teste == "exit" || $teste == "stop" || $teste == "")
					{
						echo json_encode(array(
							"Status" => false,
							"Mensagem" => $Lang['api_comandoRestrito']." ".$comando
							)
						);
						die();
					}
					// Se o Comando nao estiver blacklisted entao continuar.
					executaComandoServidorById($_GET['Id'], $comando);

					echo json_encode(array(
						"Status" => true,
						"Linhas" => getServerLogsById($Id)
						)
					);
					die();
				}
				elseif($Pedido == "GETESCOLHETIPOSERVIDOR" && isset($_GET['Id']))
				{
					$EscolheTipoServidor = getTipoServidorById($_GET['Id']);
					echo json_encode(
						array(
							"Status"	=> true,
							"NomeServidor"	=> $EscolheTipoServidor['AlteraNomeServidor'],
							"Ip"			=> $EscolheTipoServidor['AlteraIp'],
							"Porta"			=> $EscolheTipoServidor['AlteraPorta'],
							"PortaQuery"	=> $EscolheTipoServidor['AlteraPortaQuery'],
							"Motd"			=> $EscolheTipoServidor['AlteraMotd'],
							"Mapa"			=> $EscolheTipoServidor['AlteraMapa'],
							"ModoOnline"	=> $EscolheTipoServidor['AlteraOnlineMode'],
							"MudarSlots"	=> $EscolheTipoServidor['AlteraMaxSlots'],
							"MaxSlots"		=> $EscolheTipoServidor['FixoMaxSlots']
						)
					);
					die();
				}
			}

		}


		if(isset($_GET['AJAX']))
		{
			$Pedido = $_GET['AJAX'];

			if($Pedido == "AUMENTARMAXSERVIDORES")
			{
				$UserVer = new Utilizador($Id, $conn);
				$UserVer->getInfo();
				$UserVer->setNumeroMaxServidores($UserVer->getNumeroMaxServidores()+1);
				$UserVer->atualizaInfo();
				echo json_encode(
					array(
						"Status"			=> true,
						"MaxServidores"		=> $UserVer->getNumeroMaxServidores(),
						"Percentagem" 		=> round(getPercentagem($UserVer->getNumeroServidores(), $UserVer->getNumeroMaxServidores()))
					)
				);
				die();
			}

			if($Pedido == "DIMINUIRMAXSERVIDORES")
			{
				$UserVer = new Utilizador($Id, $conn);
				$UserVer->getInfo();
				if($UserVer->getNumeroMaxServidores() > 0)
				{
					if($UserVer->getNumeroServidores() < $UserVer->getNumeroMaxServidores())
					{
						$UserVer->setNumeroMaxServidores($UserVer->getNumeroMaxServidores()-1);
						$UserVer->atualizaInfo();
					}
				}

				echo json_encode(
					array(
						"Status"			=> true,
						"MaxServidores"		=> $UserVer->getNumeroMaxServidores(),
						"Percentagem" 		=> round(getPercentagem($UserVer->getNumeroServidores(), $UserVer->getNumeroMaxServidores()))
					)
				);
				die();
			}

			if($Pedido == "InfoEstatisticas")
			{
				$Servidores = array();
				$Servidores = getServidoresByIdUtilizador($User->getId());
          		# print_r($Servidores);
          		$total = 0;
          		foreach($Servidores as $Servidor)
          		{
                	
          			$server = new Servidor($Servidor['Id'], $conn);
                	$server->getFullStatus(); // Fazer update aos Status
          			$total += $server->getSlots();
          		}
          		$SlotsUsadosTotal 	= $total;
          		$ServidoresOnline 	= count(getServidoresByIdUtilizadorAndStatus($User->getId(), 1));
          		$ServidoresOffline 	= count(getServidoresByIdUtilizadorAndStatus($User->getId(), 0));

          		echo json_encode(
					array(
						"Status" 			=> true,
						"ServidoresOnline" 	=> $ServidoresOnline,
						"ServidoresOffline"	=> $ServidoresOffline,
						"SlotsUsadosTotal" 	=> $SlotsUsadosTotal
						)
					);
				die();
			}
			elseif($Pedido == "GETPORTAS" && isset($_GET['Porta']))
			{
				echo json_encode(
					array(
						"Status"		=> true,
						"EmUso"			=> isPortaEmUso($_GET['Porta'])
						)
					);
				die();
			}
			elseif($Pedido == "INFOMAQUINA")
			{
				if($User->getTipoUtilizador() == 1)
				{
					echo json_encode(
						array(
							"Status"		=> true,
							"Ram"			=> number_format((float)get_server_memory_usage(), 2, '.', ''),
							"Cpu"			=> number_format((float)get_server_cpu_usage(), 2, '.', ''),
							"Disco"			=> number_format((float)get_server_disk_usage(), 2, '.', '')
							)
						);
					die();
				}
				else
				{
					echo json_encode(
						array(
							"Status"		=> false,
							"Mensagem"		=> $Lang['api_acessoNegado']
							)
						);
					die();
				}
				
			}
		}

		if(isset($_GET['Action']))
		{
			$Pedido = $_GET['Action'];
			if($Pedido == "CriarServidor") // Criar Servidor
			{
				$User->getInfo();
				if($User->getNumeroMaxServidores() > $User->getNumeroServidores())  // Ver quantos servidores tem e ver se +e igual ao Maximo
	  			{
					$TipoServer = array();
					if(tipoServidorExisteById($_GET['TipoServidor'])) // Verifica se tipo de servidor existe
					{
						$TipoServer = getTipoServidorById($_GET['TipoServidor']);
					}
					else
					{
						echo json_encode(
							array(
								"Status"	=> false,
								"Mensagem"	=> $Lang['api_tipoServidorNaoEncontrado']
								)
							);
						die();
					}
					
					$FTP_User = "";
					$FTP_Password = "";
					
					if(
						isset($_GET['NomeServidor']) 	&& !empty($_GET['NomeServidor']) 
						&& isset($_GET['Ip']) 			&& !empty($_GET['Ip']) 
						&& isset($_GET['Porta']) 		&& !empty($_GET['Porta']) 			&& is_numeric($_GET['Porta'])
						&& isset($_GET['PortaQuery']) 	&& !empty($_GET['PortaQuery']) 		&& is_numeric($_GET['PortaQuery'])
						&& isset($_GET['TipoServidor']) && !empty($_GET['TipoServidor']) 	&& is_numeric($_GET['TipoServidor'])
						&& isset($_GET['Motd']) 		&& !empty($_GET['Motd'])
						&& isset($_GET['Mapa']) 		&& !empty($_GET['Mapa'])
						&& isset($_GET['OnlineMode'])	&& is_numeric($_GET['OnlineMode'])
						&& isset($_GET['MaxSlots']) 	&& !empty($_GET['MaxSlots']) 		&& is_numeric($_GET['MaxSlots'])
						)
					{	
						
						addServidor($User->getId(), $_GET['TipoServidor'], $_GET['NomeServidor'], $_GET['Ip'], $_GET['Porta'], $_GET['PortaQuery'], $_GET['MaxSlots'], $_GET['OnlineMode'], $_GET['Mapa'], $_GET['Motd'], $FTP_User, $FTP_Password);
						header("Location: ../index.php");
						die();
					}
					else
					{
						// Falta algo para criar o servidor, nao correspondeu a criteria imposta
						echo json_encode(
							array(
								"Status"	=> false,
								"Mensagem"	=> $Lang['api_erroCriarServidor']
								)
							);
						die();
					}
				}
				else
				{
					// Esgotou Máximo de servidores que podia criar
					echo json_encode(
						array(
							"Status"	=> false,
							"Mensagem"	=> $Lang['api_esgotouServidoresMax']
							)
						);
					die();
				}
				die();
			}
			elseif($Pedido == "InstalarServidor") // Instalar servidor.
			{
				pararServidor($_GET['Id']);
				instalarServidor($_GET['Id']);
				header("Location: ../servidor.php?Id=".$_GET['Id']);
				die();
			}
		}

	}

		// Caso não exista nenhuma opção na API
		echo json_encode(
			array(
				"Status" => false,
				"Mensagem" => $Lang['api_pedidoNaoExiste']
				)
			);
		die();
?>
