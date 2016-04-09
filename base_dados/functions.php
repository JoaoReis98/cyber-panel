<?php
	@session_start();
	date_default_timezone_set('Europe/Lisbon');
	@include_once "__classes/Servidor.class.php";
	@include_once "__classes/Utilizador.class.php";
	@include_once "sql.php";
	@include_once "lang.php";
	@include_once "../__classes/Servidor.class.php";
	@include_once "../__classes/Utilizador.class.php";
	@include_once "../base_dados/sql.php";
	@include_once "../lang.php";
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
	*	@class Servidor
	*	@author João Reis
	*	@Year 2015
	*	@license GPL ( http://www.gnu.org/licenses/gpl-3.0.en.html )
	*/

	/**
	*	@author Web | StackOverFlow
	*	@return String
	*/
	function getIpUtilizador()
	{
		$ipaddress = '';
		if (@$_SERVER['HTTP_CLIENT_IP'])
			$ipaddress = @$_SERVER['HTTP_CLIENT_IP'];
		else if(@$_SERVER['HTTP_X_FORWARDED_FOR'])
			$ipaddress = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(@$_SERVER['HTTP_X_FORWARDED'])
			$ipaddress = @$_SERVER['HTTP_X_FORWARDED'];
		else if(@$_SERVER['HTTP_FORWARDED_FOR'])
			$ipaddress = @$_SERVER['HTTP_FORWARDED_FOR'];
		else if(@$_SERVER['HTTP_FORWARDED'])
			$ipaddress = @$_SERVER['HTTP_FORWARDED'];
		else if(@$_SERVER['REMOTE_ADDR'])
			$ipaddress = @$_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'Desconhecido';
		return $ipaddress;
	}

	/**
	*	@website http://stackoverflow.com/questions/22949295/how-do-you-get-server-cpu-usage-and-ram-usage-with-php
	*	@author Snoobih
	*/
	function get_server_memory_usage()
	{
	    $free = shell_exec('free');
	    $free = (string)trim($free);
	    $free_arr = explode("\n", $free);
	    $mem = explode(" ", $free_arr[1]);
	    $mem = array_filter($mem);
	    $mem = array_merge($mem);
	    $memory_usage = $mem[2]/$mem[1]*100;
	    return $memory_usage;
	}

	/**
	*	@website http://stackoverflow.com/questions/22949295/how-do-you-get-server-cpu-usage-and-ram-usage-with-php
	*	@author Snoobih
	*/
	function get_server_cpu_usage()
	{
	    $load = sys_getloadavg();
		if($load[0]*100 > 100)
		{
			return 100;
		}
	    return $load[0]*100;
	}

	function formatSize( $bytes )
	{
        $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
        for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
        return( round( $bytes, 2 ) . " " . $types[$i] );
	}

	function get_server_disk_usage()
	{
		/* get disk space free (in bytes) */
		$df = disk_free_space("/var/www");
		/* and get disk space total (in bytes)  */
		$dt = disk_total_space("/var/www");
		/* now we calculate the disk space used (in bytes) */
		$du = $dt - $df;
		/* percentage of disk used - this will be used to also set the width % of the progress bar */
		$dp = sprintf('%.2f',($du / $dt) * 100);

		/* and we formate the size from bytes to MB, GB, etc. */
		$df = formatSize($df);
		$du = formatSize($du);
		$dt = formatSize($dt);
		return $dp;
	}

	/**
	*	@author PHP
	*/
	function getDataAtual()
	{
		return date('Y/m/d H:i:s');
	}

	/**
	*	Gerador de Tokens
	*	@author João Reis
	*/
	function geraToken()
	{
		return rand(1, 1000)."".rand(1, 1000); // Gerar numeros aleatorios
	}

	/**
	*	http://stackoverflow.com/questions/6101956/generating-a-random-password-in-php
	*	Gerar Password segura
	*	@author Neal
	*	@edited João Reis
	*/
	function geraPassword($tamanho)
	{
	    $abc = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	    $pass = array();
	    $alphaLength = strlen($abc) - 1;
	    for ($i = 0; $i < $tamanho; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $abc[$n];
	    }
	    return implode($pass);
	}

	/**
	*	@author João Reis
	*	@param $Id
	*	@param $Nome
	*	@param $Apelido
	*	@param $Email
	*	@param $Password
	*	@param $DataHoraRegisto
	*	@param $TipoUtilizador
	*	@return Boolean
	*/
	function addUtilizador($Id, $Nome, $Apelido, $Email, $Password, $DataHoraRegisto, $TipoUtilizador = 0, $NumeroMaxServidores = 0, $IdTema = 1, $Linguagem = "Portugues", $Cron = 1)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(ADDUTILIZADOR);
			$stmt->execute(array(
					":Id" 				=> $Id,
					":Nome" 			=> $Nome,
					":Apelido" 			=> $Apelido,
					":Email" 			=> $Email,
					":Password" 		=> $Password,
					":DataHoraRegisto" 	=> $DataHoraRegisto,
					":TipoUtilizador"	=> $TipoUtilizador,
					":NumeroMaxServidores" => $NumeroMaxServidores,
					":IdTema"			=> $IdTema,
					":Linguagem"		=> $Linguagem,
					":Cron"				=> $Cron
					)
				);

			return true;
		}
		catch(Exception $e)
		{
			return false;
		}
	}


	/**
	*	@author João Reis
	*	@param $Id
	*	@return Array
	*/
	function getUtlizadorById($Id)
	{
		global $conn;
		$utilizador = array();
		try
		{
			$stmt = $conn->prepare(GETUTILZADORBYID);
			$stmt->execute(
				array(
					":Id" => $Id
				)
			);
			$result = $stmt->fetchAll();
			$utilizador = $result[0];
			return $utilizador;
		}
		catch(Exception $e)
		{
			return false;
		}
	}

	/**
	*	@author João Reis
	*	Retorna todos os utilizadores existentes Uso administrativo
	*	@return Array
	*/
	function getAllUtilizadores()
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETALLUTILIZADORES);
			$stmt->execute();
			$result = $stmt->fetchAll();
			if(count($result))
			{
				return $result;
			}
			else
			{
				return false;
			}
		}
		catch(Exception $e)
		{
			return false; // Erro com a query e/ou base de dados
		}
	}

	/**
	*	@author João Reis
	*	Retorna todos os servidores existentes Uso administrativo
	*	@return array
	*/
	function getAllTiposServidores()
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETALLTIPOSSERVIDORES);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		catch(Exception $e)
		{
			return false;
		}
	}

	/**
	*	@author João Reis
	*	Retorna array do utilizador ou boolean se o utilizador não existir
	*	@param $Email
	*	@param $Password
	*	@return array|boolean
	*/
	function login($Email, $Password)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETUTILIZADORBYEMAILANDPASSWORD);
			$stmt->execute(
				array(
					":Email" => $Email,
					":Password" => $Password
				)
			);
			$result = $stmt->fetchAll();
			return $result[0];
		}
		catch(Exception $e)
		{
			return false;
		}
	}

	/**
	*	@author João Reis
	*	Retorna array de servidores de um utilizador ou boolean se o utilizador/servidores não existirem
	*	@param $IdUtilizador
	*	@return array|boolean
	*/
	function getServidoresByIdUtilizador($IdUtilizador)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETSERVIDORBYIDUTILIZADOR);
			$stmt->execute(
				array(
					":IdUtilizador" => $IdUtilizador
				)
			);
			$result = $stmt->fetchAll();
			$result = addInformacaoServidores($result);
			return $result;
		}
		catch(Exception $ex)
		{
			return false;
		}
	}

	/**
	*	@author João Reis
	*	Adiciona Nome do tipo do servidor a todos os servidores passados no array.
	*	@param $Servidores
	*	@return array
	*/
	function addInformacaoServidores($Servidores)
	{
		$return = array();
		$i = 0;
		foreach($Servidores as $Servidor)
		{

			$return[$i] = $Servidor;
			$return[$i]["NomeTipoServidor"] = getTipoServidorById($Servidor['TipoServidor'])['Nome'];
			$i++;
		}
		return $return;
	}

	/**
	*	@author João Reis
	*	Adiciona Nome do tipo do servidor a todos os servidores passados no array.
	*	@param $Servidores
	*	@return array
	*/
	function addInformacaoUtilizadores($Utilizadores)
	{
		global $conn;
		$return = array();
		$i = 0;
		foreach($Utilizadores as $Utilizador)
		{
			$Servidores = getServidoresByIdUtilizador($Utilizador['Id']);
			$return[$i] = $Utilizador;
			#$Sv = new Servidor($, $conn);
			$total = 0;
			foreach($Servidores as $Servidor)
			{

				$server = new Servidor($Servidor['Id'], $conn);
				$server->getFullStatus(); // Fazer update aos Status
				$total += $server->getSlots();
			}
			$slotsOcupados = $total;

			$svOnline = getServidoresByIdUtilizadorAndStatus($Utilizador['Id'], 1);
			$return[$i]['Nome'] = utf8_encode($Utilizador['Nome']);
			$return[$i]['Apelido'] = utf8_encode($Utilizador['Apelido']);
			$return[$i]['Email'] = utf8_encode($Utilizador['Email']);
			$return[$i]["SlotsUsados"] = $slotsOcupados;
			$return[$i]["MaxServidores"] = $Utilizador['NumeroMaxServidores'];
			$return[$i]["NumServidores"] = count($Servidores);
			$return[$i]["ServidoresOnline"] = count($svOnline);
			$i++;
		}
		return $return;
	}
	/**
	*	@author João Reis
	*	Retorna array com informação sobre o tipo do Servidor ou boolean se o TipoServidor não existir
	*	@param $Id
	*	@return array|boolean
	*/
	function getTipoServidorById($Id)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETTIPOSERVIDORBYID);
			$stmt->execute(
				array(
					"Id" => $Id
				)
			);
			$result = $stmt->fetchAll();
			return $result[0];
		}
		catch(Exception $ex)
		{
			return false;
		}
	}

	function tipoServidorExisteById($Id)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETTIPOSERVIDORBYID);
			$stmt->execute(
				array(
					"Id" => $Id
				)
			);
			$result = $stmt->fetchAll();
			if(count($result) > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch(Exception $e)
		{
			return false;
		}
	}
	/**
	*	@author João Reis
	*	Retorna array de servidores usando o TipoDoServidor e Id do utilizador como filtro ou boolean se não existir nenhum servidor / Utilizador com o filtro aplicado
	*	@param $TipoServidor
	*	@param $IdUtilizador
	*	@return array|boolean
	*/
	function getServidorByTipoServidorAndIdUtilizador($TipoServidor, $IdUtilizador)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETSERVIDORESBYTIPOSERVIDORANDIDUTILIZADOR);
			$stmt->execute(
				array(
					":TipoServidor" => $TipoServidor,
					":IdUtilizador" => $IdUtilizador
				)
			);
			$result = $stmt->fetchAll();
			$result = addInformacaoServidores($result);
			return $result;
		}
		catch(Exception $ex)
		{
			return false;
		}
	}

	/**
	*	@author João Reis
	*	Retorna true se o servidor pertencer ao utilizador
	*	@param $Id | Id do Servidor
	*	@param $IdUtilizador
	*	@return array|boolean
	*/
	function isServerOwnedById($Id, $IdUtilizador)
	{
		global $conn;

		$stmt = $conn->prepare(GETSERVIDORBYID);
		$stmt->execute(array(":Id" => $Id));
		#$Server = new Servidor($Id, $conn);
		$res = $stmt->fetchAll();
		$num = count($res);
		if($num)
		{
			if($res[0]['IdUtilizador'] == $IdUtilizador)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
		#return true;
	}

	/**
	*	@author João Reis
	*	Retorna array de Servidores ou boolean se nao existir nenhum servidor com o status/utilizador enviado
	*	@param $IdUtilizador
	*	@param $Status
	*	@return array|boolean
	*/
	function getServidoresByIdUtilizadorAndStatus($IdUtilizador, $Status)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETSERVIDORESBYIDUTILIZADORANDSTATUS);
			$stmt->execute(
				array(
					":IdUtilizador" => $IdUtilizador,
					":Status" => $Status
				)
			);
			$result = $stmt->fetchAll();
			$result = addInformacaoServidores($result);
			return $result;
		}
		catch(Exception $ex)
		{
			return false;
		}
	}

	/**
	*	@author João Reis
	*	Retorna boolean ou lança uma excepção (Função só usada em Servidor.class.php)
	*	@param $Id
	*	@param $IdUtilizador
	*	@param $TipoServidor
	*	@param $NomeServidor
	*	@param $Ip
	*	@param $Porta
	*	@param $PortaQuery
	*	@param $Status
	*	@param $MaxSlots
	*	@param $OnlineMode
	*	@param $Mapa
	*	@param $Motd
	*	@param $FTP_User
	*	@param $FTP_Password
	*	@return boolean|Exception
	*/
	function updateServidorById($Id, $IdUtilizador, $TipoServidor, $NomeServidor, $Ip, $Porta, $PortaQuery, $Status, $Instalado, $MaxSlots, $OnlineMode, $Mapa, $Motd, $FTP_User, $FTP_Password)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(UPDATESERVIDORBYID);
			$stmt->execute(array(
					":IdUtilizador" 	=> $IdUtilizador,
					":TipoServidor" 	=> $TipoServidor,
					":NomeServidor" 	=> $NomeServidor,
					":Ip" 				=> $Ip,
					":Porta" 			=> $Porta,
					":PortaQuery"		=> $PortaQuery,
					":Status" 			=> $Status,
					":Instalado"		=> $Instalado,
					":MaxSlots"			=> $MaxSlots,
					":OnlineMode"		=> $OnlineMode,
					":Mapa"				=> $Mapa,
					":Motd"				=> $Motd,
					":FTP_User"			=> $FTP_User,
					":FTP_Password"		=> $FTP_Password,
					":Id" 				=> $Id
				));
			return true;
		}
		catch(Exception $ex)
		{
			throw new Exception("<pre>".$ex."</pre>");
		}
	}

	/**
	*	-- Fora de Uso --
	*	@author João Reis
	*	Retorna boolean ou lança excepção, função fora de uso pois a class Servidor.class.php consegue realizar este pedido sem usar esta função.
	*	@param $Id
	*	@param $Status
	*	@return array|boolean
	*/
	function updateServidorStatusById($Id, $Status)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(UPDATESERVIDORSTATUSBYID);
			$stmt->execute(array(
					":Status" 			=> $Status,
					":Id" 				=> $Id
				));
			return true;
		}
		catch(Exception $ex)
		{
			throw new Exception("<pre>".$ex."</pre>");
		}
	}

	/**
	*	@author João Reis
	*	Obter servidores a correr através de um comando Tmux
	*	@return Array
	*/
	function getRunningServers()
	{
		$output = shell_exec("sudo tmux list-sessions");
		if($output == "failed to connect to server")
		{
			return array("0" => 0);
		}
		$Linhas = explode("\n", $output);

		#echo "<pre>";
		$Ids = array();
		foreach($Linhas as $Linha)
		{
			$Antes =	explode( ':', $Linha);

			if($Antes[0] == "") continue;
			$Ids[] = $Antes[0];
		}

		return $Ids; # Retorna os Ids dos servidores que estão a ser executados no TMUX
	}


	/**
	*	@author João Reis
	*	Caso o serviço Tmux seja desligado e/ou a sessão estiver desligada passar para false e/ou true para a base de dados aos respetivos servidores
	*	@param $IdUtilizador
	*/
	function updateRunningServers($IdUtilizador)
	{
		global $conn;
		$Servidores = array();
		$Servidores = getServidoresByIdUtilizador($IdUtilizador);
		$ServersOn = array();
		$ServersOn = getRunningServers();
		foreach ($Servidores as $Servidor) {
			// Atualizar base de dados consuante sessoes do Tmux estiverem ativas ou nao
			$server = new Servidor($Servidor['Id'], $conn);
			$server->getInfo();
			#$server->getFullStatus();
			#$serverUpdate = new Servidor($ServersOn[$]);
			if($server->getStatus() == true)
			{
				$Ligado = false;
				if(count($ServersOn))
				{
					foreach ($ServersOn as $ServerOn)
					{
						if($ServerOn == $server->getId())
						{
							$Ligado = true;
							break; // Dar Break ao foreach ServersOn e continuar o Foreach Servidores. o Servidor continua online
						}
					}
				}
				// Se nao estiver ligado passar para desligado na base de dados
				if(!$Ligado)
				{
					$server->setStatus(0);
					$server->atualizaInfo();
				}
			}
			else
			{
				$Ligado = false;
				if(count($ServersOn))
				{
					foreach ($ServersOn as $ServerOn)
					{
						if($ServerOn == $server->getId())
						{
							// Se o servidor esta aqui significa que esta online mas esta offline na base de dados. Passar servidor para online na base de dados
							$Ligado = true;
							break;
						}
					}
				}
					// Se estiver Ligado entao passar para ligado na base de dados
					if($Ligado)
					{
						$server->setStatus(1);
						$server->atualizaInfo();
					}
			}
		}
	}

	/**
	*	@author João Reis
	*	Adiciona Servidor e retorna boolean
	*	@param $IdUtilizador
	*	@param $TipoServidor
	*	@param $NomeServidor
	*	@param $Ip
	*	@param $Porta
	*	@param $PortaQuery
	*	@param $MaxSlots
	*	@param $OnlineMode
	*	@param $Mapa
	*	@param $Motd
	*	@param $FTP_User
	*	@param $FTP_Password
	*	@return boolean
	*/
	function addServidor($IdUtilizador, $TipoServidor, $NomeServidor, $Ip, $Porta, $PortaQuery, $MaxSlots, $OnlineMode, $Mapa, $Motd, $FTP_User, $FTP_Password, $IsMaster)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(ADDSERVIDOR);
			$stmt->execute(array(
					":Id"				=> 0,
					":IdUtilizador" 	=> $IdUtilizador,
					":TipoServidor" 	=> $TipoServidor,
					":NomeServidor" 	=> $NomeServidor,
					":Ip" 				=> $Ip,
					":Porta" 			=> $Porta,
					":PortaQuery"		=> $PortaQuery,
					":Status" 			=> 0,
					":Instalado"		=> 0,
					":DataHoraCriado"	=> getDataAtual(),
					":MaxSlots"			=> $MaxSlots,
					":OnlineMode"		=> $OnlineMode,
					":Mapa"				=> $Mapa,
					":Motd"				=> $Motd,
					":FTP_User"			=> $FTP_User,
					":FTP_Password"		=> $FTP_Password
				));
			return true;
		}
		catch(Exception $ex)
		{
			return false;
		}
	}


	/**
	*	@author João Reis
	*	Procura algo no texto e substitui exemplo: ( $texto = "A iniciar servidor %nome%"; $texto = substitui(%nome%, "Nome do Servidor", $texto); )
	*	@param $Procura
	*	@param $Novo
	*	@param $Texto
	*	@return boolean
	*/
	function substitui($Procura, $Novo, $Texto) {
		return str_replace($Procura, $Novo, $Texto);
	}

	/**
	*	@author João Reis
	*	Elimina o servidor pelo seu id, retorna boolean ou lança excepção em caso de erro
	*	@param $Id
	*	@return boolean|excepção
	*/
	function eliminarServidorById($Id)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(DELETESERVIDORBYID);
			$stmt->execute(array(
					":Id" 				=> $Id
				));
			return true;
		}
		catch(Exception $ex)
		{
			throw new Exception("<pre>".$ex."</pre>");
		}
	}

	/**
	*	@author João Reis
	*	Retorna Servidores do Utilizador Usando um filtro, filtro usado na barra de procura ou boolean se o Utilizador/Query não existirem.
	*	@param $IdUtilizador
	*	@param $Query
	*	@return array|boolean
	*/
	function getServidoresByIdUtilizadorAndQuery($IdUtilizador, $Query)
	{
		# GETSERVIDORBYQUERY
		$Query = "%".$Query."%";
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETSERVIDORBYIDUTILIZADORANDQUERY);
			$stmt->execute(
				array(
					":IdUtilizador" => $IdUtilizador,
					":Query" => $Query
				)
			);
			$result = $stmt->fetchAll();
			$result = addInformacaoServidores($result);
			return $result;
		}
		catch(Exception $ex)
		{
			return false;
		}
	}

	/**
	*	@author João Reis
	*	Verifica se a porta esta em uso em algum dos servidores já existentes
	*	@return boolean
	*/
	function isPortaEmUso($Porta)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETSERVIDORESBYPORTA);
			$stmt->execute(
				array(
					":Porta" => $Porta
				)
			);
			$result = $stmt->fetchAll();
			if(count($result))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch(Exception $e)
		{
			return true; // Retorna true pois aconteceu algo errado com a base de dados e/ou com a query. Logo envia que a porta esta em uso para não haver Bugs Futuros.
		}
	}

	/**
	*	@author João Reis
	*	Realiza um cálculo simples de percentagem
	*	@param $min
	*	@param $max
	*	@return Float
	*/
	function getPercentagem($min, $max)
	{
		if($max == 0)
		{
			return 100;
		}
		return (($min*100) / $max);
	}

	/**
	*	@author João Reis
	*	Procura utilizador com respetivo email.
	*	@param $Email
	*	@return Array
	*/
	function getUtilizadorByEmail($Email)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETUTILIZADORBYEMAIL);
			$stmt->execute(
				array(
					":Email" => $Email
				)
			);
			$result = $stmt->fetchAll();
			return $result;
		}
		catch(Exception $ex)
		{
			return array();
		}
		return array();
	}

	/**
	*	@author João Reis
	*	Remover Servidor
	*	@param $Id
	*/
	function removeUtilizador($Id)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(DELETEUTILIZADORBYID);
			$stmt->execute(
				array(
					":Id" => $Id
				)
			);
			return true;
		}
		catch(Exception $ex)
		{
			return false;
		}
		return false;
	}

	/**
	*	@author João Reis
	*	Retorna Servidor pelo seu Id
	*	@param $Id
	*	@return Array
	*/
	function getServidorById($Id)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETSERVIDORBYID);
			$stmt->execute(
				array(
					":Id"	=> $Id
				)
			);
			$result = $stmt->fetchAll();
			return $result[0];
		}
		catch(Exception $ex)
		{
			return false;
		}
		return false;
	}

	/**
	*	@author João Reis
	*	Retorna tema pelo seu id
	*	@param $Id
	*	@return Array
	*/
	function getTemaById($Id)
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETTEMABYID);
			$stmt->execute(
				array(
					":Id"	=> $Id
				)
			);
			$result = $stmt->fetchAll();
			return $result[0];
		}
		catch(Exception $ex)
		{
			return false;
		}
		return false;
	}

	/**
	*	@author João Reis
	*	Retorna o primeiro tema ativo da base de dados
	*	@return Array|Boolean
	*/
	function getPrimeiroTemaAtivado()
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETPRIMEIROTEMAATIVADO);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result[0];
		}
		catch(Exception $ex)
		{
			return false;
		}
		return false;
	}

	/**
	*	@author João Reis
	*	@return Array|Boolean
	*/
	function getAllTemas()
	{
		global $conn;
		try
		{
			$stmt = $conn->prepare(GETALLTEMAS);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		catch(Exception $ex)
		{
			return false;
		}
		return false;
	}

	/**
	*	@author João Reis
	*	@return Array|Boolean
	*/
	function getLangById($ID)
	{
		global $linguagens;
		if(isset($linguagens[$ID]))
		{
			return $linguagens[$ID];
		}
		else
		{
			return false;
		}
	}

	/**
	*	@author João Reis
	*	@return Array
	*/
	function getAllLangs()
	{
		global $linguagens;
		return $linguagens;
	}

	/**
	*	@author João Reis
	*	@return Array
	*/
	function getLangKeys()
	{
		global $linguagens;
		$keys = array();
		foreach ($linguagens as $key => $value) {
			$keys[] = $key;
		}
		return $keys;
	}
?>
