<?php

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
	class Servidor
	{
		// Atributos Servidor
		private $Id = -1;
		private $IdUtilizador = -1;
		private $User = null;
		private $TipoServidor = -1;
		private $tipo = "null";
		private $NomeTipoServidor = "null";
		private $NomeServidor = "null";
		private $Ip = "null";
		private $Porta = "-1";
		private $PortaQuery = "-1";
		private $Status = 0;
		private $DataHoraCriado = "null";
		private $Instalado = 0;
		private $MaxSlotsDb = 0; 	// Valor de Max Slots não pode passar este valor
		private $OnlineMode = 0;	// Valor que define se o servidor e local ou na Internet #No minecraft valor 0 permite versao Cracked do jogo entrarem.
		private $MapaDb 	= "null";
		private $Motd 		= "Servidor criado com Cyber-Panel";
		// Conta FTP
		private $FTP_User = "";
		private $FTP_Password = "";

		// Instalação e inicio
		private $DownloadUrl = "";
		private $ComandoInstalar = "";
		private $ComandoIniciar = "";

		// Apis
		private $MapaAtual = "Nenhum...";
		private $SlotsUsados = 0;
		private $MaxSlots = 0;		// Maximo Slots atuais
		private $Jogadores = array(); // Array com nome de jogadores
		private $Versao = "1.0.0";
		private $Plugins = array(); // Array de plugins para o minecraft e array de regras do jogo em outros servidores

		// Base dados
		private $conexaoBaseDados = null;

		/**
		*	Constructor
		*	@param $Id
		*	@param $conexaoBaseDados
		*/
		function __construct($Id, $conexaoBaseDados)
		{
			// Atribuir dados.
			$this->Id = $Id;
			$this->conexaoBaseDados = $conexaoBaseDados;
			$this->getInfo();
			# $this->printInfo();
		}

		/**
		*	===================================================================================================
		* 	============================================== Getter's ===========================================
		*	===================================================================================================
		*/

		/**
		*	@author João Reis
		*	Atualiza a informação do servidor retirando a informação apartir da base de dados.
		*	@return boolean
		*/
		function getInfo()
		{
			try
			{
				// Buscar informação
				$stmt = $this->conexaoBaseDados->prepare(GETSERVIDORBYID); // Preparar Statement
				$stmt->execute(
					array(
						":Id" => $this->Id
					)
				); // Executar Statement
				$result = $stmt->fetchAll();

				if( count($result) )
				{
					$this->Id 				= $result[0]['Id'];
					$this->IdUtilizador 	= $result[0]['IdUtilizador'];
					$this->User				= new Utilizador($this->IdUtilizador, $this->conexaoBaseDados);
					$this->TipoServidor 	= $result[0]['TipoServidor'];
					$this->NomeServidor 	= $result[0]['NomeServidor'];
					$this->Ip				= $result[0]['Ip'];
					$this->Porta			= $result[0]['Porta'];
					$this->PortaQuery 		= $result[0]['PortaQuery'];
					$this->Status			= $result[0]['Status'];
					$this->DataHoraCriado	= $result[0]['DataHoraCriado'];
					$this->Instalado		= $result[0]['Instalado'];
					$this->MaxSlotsDb 		= $result[0]['MaxSlots'];
					$this->OnlineMode 		= $result[0]['OnlineMode'];
					$this->MapaDb 			= $result[0]['Mapa'];
					$this->Motd 			= $result[0]['Motd'];
					$this->FTP_User			= $result[0]['FTP_User'];
					$this->FTP_Password		= $result[0]['FTP_Password'];

					// Tipo Servidor e variaveis do mesmo.
					$this->tipo 			= getTipoServidorById($this->TipoServidor);
					$this->DownloadUrl		= $this->tipo['Url'];
					$this->ComandoInstalar	= $this->tipo['ComandoInstalar'];
					$this->ComandoIniciar	= $this->tipo['ComandoIniciar'];

				}

				return true;
			}
			catch(Exception $ex)
			{
				// Erro ao buscar informação.
				return false;
			}
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getId()
		{
			return $this->Id;
		}

		/**
		*	@author João Reis
		*	@return Id
		*/
		function getIdUtilizador()
		{
			return $this->IdUtilizador;
		}

		/**
		*	@author João Reis
		*	Retorna Classe Utilizador do dono do servidor.
		*	@return User
		*/
		function getUser()
		{
			return $this->User;
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getTipoServidor()
		{
			return $this->TipoServidor;
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getNomeTipoServidor()
		{
			return $this->tipo['Nome'];
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getNomeServidor()
		{
			return $this->NomeServidor;
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getIp()
		{
			return $this->Ip;
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getPorta()
		{
			return $this->Porta;
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getPortaQuery()
		{
			return $this->PortaQuery;
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getStatus()
		{
			return $this->Status;
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getMaxSlotsDb()
		{
			return $this->MaxSlotsDb;
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getOnlineMode()
		{
			return $this->OnlineMode;
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getMapaDb()
		{
			return $this->MapaDb;
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getMapaInicial()
		{
			return $this->getMapaDb();
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getMotd()
		{
			return $this->Motd;
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getFTPUser()
		{
			return $this->FTP_User;
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getFTPPassword()
		{
			return $this->FTP_Password;
		}

		/**
		*	@author João Reis
		*	Atualiza os dados apartir da api do servidor.
		*	@return boolean
		*/
		function getFullStatus()
		{


			if($this->Status)
			#if(false)
			{
				@include("modulos/modulos.conf.php");
				@include("../modulos/modulos.conf.php");
				$existe = false;
				$index = 1;
				$i = 0;
				if(isset($Vmodulos))
				{

					$modulos = array();
					$modulos = $Vmodulos;
					foreach($modulos as $modulo)
					{
						$i++;
						if($modulo['tipoServidor'] == $this->getTipoServidor())
						{
							$existe = true;
							$index = $i;
							break;
						}
					}
					if($existe)
					{
						#@call_user_func("csgo_teste"); /* VER ISTO PARA CHAMAR FUNCOES DOS MODULOS */
						if(!function_exists("_iniciaModulo"))
						{
							@include($modulos[$index]['dir']);
							@include("../".$modulos[$index]['dir']);
						}
						if(isset($modulos))
						{
							#print_r($modulos[$index]);
							_iniciaModulo($this->Ip, $this->PortaQuery, false);
							$Info =  _getStatus();
							_paraModulo(false);
							#print_r($Info);
							$this->MapaAtual 	= $Info['Map'];
							$this->SlotsUsados 	= $Info['Players'];
							$this->MaxSlots 	= $Info['MaxPlayers'];
							$this->Versao 		= $Info['Versao'];
							$this->Jogadores 	= $Info['Playerlist'];
							$this->Plugins 		= $Info['Plugins'];
							return array(
								"Map" 			=> $Info['Map'],
								"Players" 		=> $Info['Players'],
								"MaxPlayers" 	=> $Info['MaxPlayers'],
								"Playerlist" 	=> $Info['Playerlist'],
								"Plugins" 		=> $Info['Plugins']
								);
							return $info;
						}
						return false;
					}
					else
					{
						#echo "nao";
						return false;
					}
				}
				return false;
			}
			return false;
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getMapaAtual()
		{
			return addslashes(htmlentities($this->MapaAtual));
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getSlots()
		{
			return addslashes(htmlentities($this->SlotsUsados));
		}

		/**
		*	@author João Reis
		*	@return Int
		*/
		function getMaxSlots()
		{
			return addslashes(htmlentities($this->MaxSlots));
		}

		/**
		*	@author João Reis
		*	@return String
		*/
		function getVersao()
		{
			return addslashes(htmlentities($this->Versao));
		}

		/**
		*	@author João Reis
		*	Retorna array de jogadores
		*	@return Array
		*/
		function getJogadores()
		{
			return $this->Jogadores;
		}

		/**
		*	@author João Reis
		*	Retorna array de Plugins/Regras
		*	@return Array
		*/
		function getPlugins()
		{
			return $this->Plugins;
		}

		/**
		*	@author João Reis
		*	Retorna se o servidor encontra-se instalado
		*	@return Boolean
		*/
		function isInstalado()
		{
			return $this->Instalado;
		}

		/**
		*	===================================================================================================
		* 	============================================== Setter's ===========================================
		*	===================================================================================================
		*/

		/**
		*	@author João Reis
		*	@param $IdUtilizador
		*/
		function setIdUtilizador($IdUtilizador)
		{
			$this->IdUtilizador = $IdUtilizador;
		}

		/**
		*	@author João Reis
		*	@param $TipoServidor
		*/
		function setTipoServidor($TipoServidor)
		{
			$this->TipoServidor = $TipoServidor;
		}

		/**
		*	@author João Reis
		*	@param $NomeServidor
		*/
		function setNomeServidor($NomeServidor)
		{
			$this->NomeServidor = $NomeServidor;
		}

		/**
		*	@author João Reis
		*	@param $Ip
		*/
		function setIp($Ip)
		{
			$this->Ip = $Ip;
		}

		/**
		*	@author João Reis
		*	@param $Porta
		*/
		function setPorta($Porta)
		{
			$this->Porta = $Porta;
		}

		/**
		*	@author João Reis
		*	@param $PortaQuery
		*/
		function setPortaQuery($PortaQuery)
		{
			$this->PortaQuery = $PortaQuery;
		}

		/**
		*	@author João Reis
		*	@param $Status
		*/
		function setStatus($Status)
		{
			$this->Status = $Status;
		}

		/**
		*	@author João Reis
		*	@param $Instalado
		*/
		function setInstalado($Instalado)
		{
			$this->Instalado = $Instalado;
		}

		/**
		*	@author João Reis
		*	@param $MaxSlotsDb
		*/
		function setMaxSlotsDb($MaxSlotsDb)
		{
			$this->MaxSlotsDb = $MaxSlotsDb;
		}

		/**
		*	@author João Reis
		*	@param $OnlineMode
		*/
		function setOnlineMode($OnlineMode)
		{
			$this->OnlineMode = $OnlineMode;
		}

		/**
		*	@author João Reis
		*	@param $MapaDb
		*/
		function setMapaDb($MapaDb)
		{
			$this->MapaDb = $MapaDb;
		}

		/**
		*	@author João Reis
		*	@param $MapaDb
		*/
		function  setMapaInicial($MapaDb)
		{
			$this->setMapaDb($MapaDb);
		}

		/**
		*	@author João Reis
		*	@param $Motd
		*/
		function setMotd($Motd)
		{
			$this->Motd = $Motd;
		}

		/**
		*	@author João Reis
		*	@param $FTP_User
		*/
		function setFTPUser($FTP_User)
		{
			$this->FTP_User = $FTP_User;
		}

		/**
		*	@author João Reis
		*	@param $FTP_Password
		*/
		function setFTPPassword($FTP_Password)
		{
			$this->FTP_Password = $FTP_Password;
		}

		/**
		*	===================================================================================================
		* 	============================================== Funções ============================================
		*	===================================================================================================
		*/

		/**
		*	@author João Reis
		*	Atualiza a informação alterada na classe para a base de dados faz alterações
		*	@return Boolean
		*/
		function atualizaInfo()
		{
			try
			{
				updateServidorById($this->Id, $this->IdUtilizador, $this->TipoServidor, $this->NomeServidor, $this->Ip, $this->Porta, $this->PortaQuery, $this->Status, $this->Instalado, $this->MaxSlotsDb, $this->OnlineMode, $this->MapaDb, $this->Motd, $this->FTP_User, $this->FTP_Password);
				return true;
			}
			catch(Exception $ex)
			{
				return false;
			}
		}

		/**
		*	@author João Reis
		*	Elimina Servidor na base de dados e respetivos ficheiros.
		*	@return Boolean
		*/
		function eliminar()
		{
			/*
			try
			{
				$this->executaComando("sudo rm /home/cyberpanel/".$this->Id."/* -R");
				eliminarServidorById($this->Id);
				return true;
			}
			catch(Exception $ex)
			{
				return false;
			}
			*/
			@include("modulos/modulos.conf.php");
			@include("../modulos/modulos.conf.php");
			#@include_once(__DIR__."/modulos/modulos.conf.php");
			$existe = false;
			$index = 1;
			$i = 0;
			if(isset($Vmodulos))
			{

				$modulos = array();
				$modulos = $Vmodulos;
				foreach($modulos as $modulo)
				{
					$i++;
					if($modulo['tipoServidor'] == $this->getTipoServidor())
					{
						$existe = true;
						$index = $i;
						break;
					}
				}
				if($existe)
				{
					if(function_exists('_apagarServidor'))
					{
						return _apagarServidor($this->Id);
					}
					else
					{
						include($modulos[$index]['dir']);
						include("../".$modulos[$index]['dir']);
						if(isset($modulos))
						{
							return _apagarServidor($this->Id);
						}
						return false;
					}
				}
				else
				{
					return false;
				}
			}
		}
		
		/**
		*	@author João Reis
		*	Atualiza servidor para ultima versão
		*/
		function atualizarServidor()
		{
			$this->setStatus(2);
			@include("modulos/modulos.conf.php");
			@include("../modulos/modulos.conf.php");
			#@include_once(__DIR__."/modulos/modulos.conf.php");
			$existe = false;
			$index = 1;
			$i = 0;
			if(isset($Vmodulos))
			{
				$modulos = array();
				$modulos = $Vmodulos;
				foreach($modulos as $modulo)
				{
					$i++;
					if($modulo['tipoServidor'] == $this->getTipoServidor())
					{
						$existe = true;
						$index = $i;
						break;
					}
				}
				if(function_exists('_atualizarServidor'))
				{
					return _atualizarServidor($this->Id);
				}
				else
				{
					@include($modulos[$index]['dir']);
					include("../".$modulos[$index]['dir']);
					if(isset($modulos))
					{
						return _atualizarServidor($this->Id);
					}
					return false;
				}
			}
		}
		
		/**
		*	@author João Reis
		*	Executa comando para o servidor
		*	@param $Comando
		*/
		function executaComando($Comando)
		{
			shell_exec("sudo tmux send -t ".$this->Id." '$Comando' ENTER");
		}

		/**
		*	@author João Reis
		*	Para Servidor
		*/
		function pararServidor()
		{
			// Comando para parar servidor
			# shell_exec("sudo tmux kill-session -t '".$this->Id."'");
			@include("modulos/modulos.conf.php");
			@include("../modulos/modulos.conf.php");
			#@include_once(__DIR__."/modulos/modulos.conf.php");
			$existe = false;
			$index = 1;
			$i = 0;
			if(isset($Vmodulos))
			{
				$modulos = array();
				$modulos = $Vmodulos;
				foreach($modulos as $modulo)
				{
					$i++;
					if($modulo['tipoServidor'] == $this->getTipoServidor())
					{
						$existe = true;
						$index = $i;
						break;
					}
				}
				if($existe)
				{
					if(function_exists('_pararServidor'))
					{
						runkit_function_remove('_pararServidor');
					}
					@include($modulos[$index]['dir']);
					@include("../".$modulos[$index]['dir']);
					if(isset($modulos))
					{
						return _pararServidor($this->Id);
					}
					return false;
				}
				else
				{
					return false;
				}
			}
		}

		/**
		*	@author João Reis
		*	Inicia Servidor
		*	@return Boolean
		*/
		function iniciarServidor()
		{
			// Comando para iniciar servidor.
			try
			{
				$this->getInfo();
				$ComandoIniciar = $this->ComandoIniciar;

				/**
				*	Substituir Variaveis de execução
				*/
				$ComandoIniciar = substitui("%Porta%", $this->getPorta(), $ComandoIniciar);
				$ComandoIniciar = substitui("%PortaQuery%", $this->getPortaQuery(), $ComandoIniciar);
				$ComandoIniciar = substitui("%Ip%", $this->getIp(), $ComandoIniciar);
				$ComandoIniciar = substitui("%Motd%", $this->getMotd(), $ComandoIniciar);
				$ComandoIniciar = substitui("%FTP_User%", $this->FTP_User, $ComandoIniciar);
				$ComandoIniciar = substitui("%FTP_Password%", $this->FTP_Password, $ComandoIniciar);
				$ComandoIniciar = substitui("%Pasta%", "/home/cyberpanel/".$this->getId(), $ComandoIniciar);
				if($this->getTipoServidor() == 1)
				{
					if($this->getOnlineMode())
					{
						$ComandoIniciar = substitui("%OnlineMode%", "true", $ComandoIniciar);
					}
					else
					{
						$ComandoIniciar = substitui("%OnlineMode%", "false", $ComandoIniciar);
					}

				}
				else // Nos cs's sv_lan <0|1> define OnlineMode
				{
					if($this->getOnlineMode())
					{
						$ComandoIniciar = substitui("%OnlineMode%", "1", $ComandoIniciar);
					}
					else
					{
						$ComandoIniciar = substitui("%OnlineMode%", "0", $ComandoIniciar);
					}
				}


				$ComandoIniciar = substitui("%Mapa%", $this->getMapaDb(), $ComandoIniciar); //Mapa inicial.
				/**
				*	Forçar a utilização de Slots Máximos, mesmo alterados no ficheiro de configuração do servidor!
				*/
				$ComandoIniciar = substitui("%MaxSlots%", $this->getMaxSlotsDb(), $ComandoIniciar);
				shell_exec('sudo tmux new-session -s '.$this->Id.' -d');
				$this->executaComando("cd /home/cyberpanel/".$this->Id.";
						sudo chown ".$this->Id.":cyberpanel /home/cyberpanel/".$this->Id."/;
						sudo chown ".$this->Id.":cyberpanel /home/cyberpanel/".$this->Id."/* -R;
						sudo chmod 770 /home/cyberpanel/".$this->Id."/* -R;
						sudo chmod 550 /home/cyberpanel/".$this->Id."/*.sh -R;
						sudo chmod 550 /home/cyberpanel/".$this->Id."/*.java -R;
						sudo chmod 550 /home/cyberpanel/".$this->Id."/*.sh -R;
						sudo chmod 550 /home/cyberpanel/".$this->Id."/*.bat -R;
						sudo chmod 550 /home/cyberpanel/".$this->Id."/*.jar -R;
						sudo chmod 550 /home/cyberpanel/".$this->Id."/*.so -R;
						sudo chmod 770 /home/cyberpanel/".$this->Id."/*.txt -R; sleep 5");

				$this->executaComando("".$ComandoIniciar."; exit");
				return true;
			}
			catch(Exception $e)
			{
				throw new Exception("Erro ao iniciar Servidor. Info: ".$e, 1);
				return false;
			}

			return false;
		}

		/**
		*	@author João Reis
		*	Criar Conta FTP para o servidor.
		*	@param $FTP_User
		*	@param $FTP_Password
		*/
		private function criarContaFtp($FTP_User, $FTP_Password)
		{
			$this->FTP_User = $FTP_User;
			$this->FTP_Password = $FTP_Password;
			// Correr script para criar utilizador FTP-
			$corre = "sudo bash criar_user_ftp.sh $FTP_User $FTP_Password /home/cyberpanel/$FTP_User; exit";
			shell_exec('sudo tmux new-session -s "ftp_'.$this->Id.'" -d');
			shell_exec("sudo tmux send -t ftp_".$this->Id." \"$corre\" ENTER");
			$this->atualizaInfo(); // Atualizar informação do servidor.
		}

		/**
		*	@author João Reis
		*	Instala o Servidor na maquina.
		*	@param $criarContaFTP default TRUE; Se TRUE então cria conta FTP.
		*	@param $forcaPW default 8; Número de caracteres na password.
		*/
		function instalarServidor($criarContaFTP = TRUE, $forcaPw = 8)
		{
			shell_exec('sudo tmux new-session -s "'.$this->Id.'" -d'); // Iniciar Sessao Tmux com Id dado
			$this->setStatus(2); // Status 2 significa que esta a ser instalado. ( Instalaçao em progresso... )
			$this->atualizaInfo(); // Atualiza o Status 2 para a base de dados.
			if($criarContaFTP) // Criar Conta ftp se for necessário
			{
				$this->FTP_User = $this->Id;
				// Verificação do tamanho da password
				if( ($forcaPw < 2) || ($forcaPw > 64) ) $forcaPw = 8;
				$this->FTP_Password = geraPassword($forcaPw);
				$this->criarContaFtp($this->FTP_User, $this->FTP_Password); // Tentar Criar conta no sistema operativo

			}
			/**
			*	Iniciar instalaçao / configuraçao do servidor
			*/
			$ComandoInstalar = $this->ComandoInstalar;
			$ComandoInstalar = substitui("%Pasta%", "/home/cyberpanel/".$this->getId(), $ComandoInstalar);
			$ComandoInstalar = substitui("%FTP_User%", $this->FTP_User, $ComandoInstalar);
			$ComandoInstalar = substitui("%FTP_Password%", $this->FTP_Password, $ComandoInstalar);
			$downloadUrl = $this->DownloadUrl;
			$this->getInfo();
			// Criar pasta se não estiver criada e remover ficheiros existentes.
			$this->executaComando("sudo mkdir -p /home/cyberpanel/".$this->Id."");
			$this->executaComando("sudo rm /home/cyberpanel/".$this->Id."/* -R");
			// Entrar dentro da pasta criada, e descarregar o downloadUrl, pacote de instalação
			$this->executaComando("cd /home/cyberpanel/".$this->Id."");
			$this->executaComando("sudo wget $downloadUrl");

			/**
			* Comando de instalação do servidor, e suas permissões, algumas extensões são bloquedas para não ser possível
			* manipular o sistema, ao utilizar as permissões 550, o utilizador apenas pode ver e executar, e não editar o ficheiro.
			*/
			$corre = "$ComandoInstalar; sudo chown ".$this->Id.":cyberpanel /home/cyberpanel/".$this->Id.";
			sudo chown ".$this->Id.":cyberpanel /home/cyberpanel/".$this->Id."/;
			sudo chown ".$this->Id.":cyberpanel /home/cyberpanel/".$this->Id."/* -R;
			sudo chmod 770 /home/cyberpanel/".$this->Id."/* -R;
			sudo chmod 570 /home/cyberpanel/".$this->Id."/*.sh -R;
			sudo chmod 570 /home/cyberpanel/".$this->Id."/*.java -R;
			sudo chmod 570 /home/cyberpanel/".$this->Id."/*.sh -R;
			sudo chmod 570 /home/cyberpanel/".$this->Id."/*.bat -R;
			sudo chmod 570 /home/cyberpanel/".$this->Id."/*.jar -R;
			sudo chmod 570 /home/cyberpanel/".$this->Id."/*.so -R;
			exit; exit; exit";
			 #die($corre);
			// Devido a um bug é necessário forçar a saida do TMUX usando 3 vezes o comando EXIT.
			// Só instalar servidor após a criação do utilizador ter sido completa! Para dar permissões aos ficheiros
			$this->executaComando($corre."; exit");
			$this->setInstalado(1);
			$this->atualizaInfo(); // Reforçar a atualização da informação na base de dados.
		}

		/**
		*	Usado apenas para Debug.
		*	@author João Reis
		*/
		function printInfo()
		{
			echo "Id=>".$this->getId()."  IdUtilizador=>".$this->getIdUtilizador()."  TipoServidor=>".$this->getTipoServidor()."  NomeServidor=>".$this->getNomeServidor()."  Ip=> ".$this->getIp()." Porta=>".$this->getPorta();
		}

		/**
		*	Usado apenas para Debug.
		*	@author João Reis
		*/
		function printUserInfo()
		{
			$this->User->printInfo();
		}

	}

?>
