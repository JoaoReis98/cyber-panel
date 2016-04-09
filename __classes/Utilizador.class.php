<?php
	#require_once("../base_dados/sql.php");
	
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
	*	@class Utilizador
	*	@author Joуo Reis
	*	@Year 2015
	*	@license GPL ( http://www.gnu.org/licenses/gpl-3.0.en.html )
	*/
	class Utilizador
	{
		// Atributos Utilizador
		private $Id = -1;
		private $Nome = "null";
		private $Apelido = "null";
		private $Email = "null";
		private $Password = "null"; // Nunca Revelar ao utilizador.
		private $DataHoraRegisto = "null";
		private $TipoUtilizador = -1;
		private $NumeroMaxServidores = -1;
		private $IdTema = -1;
		private $NomeTema = "Classico";
		private $PastaTema = "Classico";
		private $Linguagem = "Portugues";
		private $Cron = false;
		
		// Base dados
		private $conexaoBaseDados = null;

		//  Existe
		private $existe = false;
		
		/**
		*	@Constructor
		*	@param $Id
		*	@param $conexaoBaseDados
		*/
		function __construct($Id, $conexaoBaseDados)
		{
			// Atribuir dados.
			$this->Id = $Id;
			$this->conexaoBaseDados = $conexaoBaseDados;
			$this->existe = $this->getInfo();
			# $this->printInfo();
		}

		/** 
		*	===================================================================================================
		* 	============================================== Getter's ===========================================
		*	===================================================================================================
		*/

		/**
		*	@author Joуo Reis
		*	@return boolean
		*/
		function getExiste()
		{
			if($this->getPassword() == "null")
			{
				return false;
			}
			else
			{
				return true;
			}
		}

		/**
		*	@author Joуo Reis
		*	Atualiza a informaчуo do utilizador retirando a informaчуo apartir da base de dados.
		*	@return Boolean
		*/
		function getInfo()
		{
			try
			{
				// Buscar informaчуo
				$stmt = $this->conexaoBaseDados->prepare(GETUTILIZADORBYID); // Preparar Statement
				$stmt->execute(
					array(
						":Id" => $this->Id
					)
				); // Executar Statement
				$result = $stmt->fetchAll();
				
				if( count($result) )
				{
					$this->Nome 				= $result[0]['Nome'];
					$this->Apelido 				= $result[0]['Apelido'];
					$this->Email 				= $result[0]['Email'];
					$this->Password 			= $result[0]['Password'];
					$this->DataHoraRegisto 		= $result[0]['DataHoraRegisto'];
					$this->TipoUtilizador 		= $result[0]['TipoUtilizador'];
					$this->NumeroMaxServidores 	= $result[0]['NumeroMaxServidores'];
					$this->IdTema				= $result[0]['IdTema'];
					$this->Cron 				= $result[0]['Cron'];
					$res					 	= getTemaById($this->IdTema);
					if($res['Ativado'] == 0) // Se o tema n estiver ativo. passar o primeiro tema ativado
					{
						$res = getPrimeiroTemaAtivado();
						$this->atualizaInfo(); // Forчa utilizador a utilizar novo tema proposto pelo sistema.
					}
					$this->IdTema				= $res['Id'];
					$this->NomeTema				= $res['Nome'];
					$this->PastaTema			= $res['Pasta'];
					$this->Linguagem			= $result[0]['Linguagem'];
				}
				
				return true;
			}
			catch(Exception $ex)
			{
				// Erro ao buscar informaчуo.
				return false;
			}
		}

		/**
		*	@author Joуo Reis
		*	@return Int
		*/
		function getId()
		{
			return $this->Id;
		}

		/**
		*	@author Joуo Reis
		*	@return String
		*/
		function getNome()
		{
			return $this->Nome;
		}

		/**
		*	@author Joуo Reis
		*	@return String
		*/
		function getApelido()
		{
			return $this->Apelido;
		}

		/**
		*	@author Joуo Reis
		*	@return String
		*/
		function getEmail()
		{
			return $this->Email;
		}

		/**
		*	@author Joуo Reis
		*	@return String
		*/
		function getPassword()
		{
			return $this->Password;
		}

		/**
		*	@author Joуo Reis
		*	@return String
		*/
		function getDataHoraRegisto()
		{
			return $this->DataHoraRegisto;
		}

		/**
		*	@author Joуo Reis
		*	@return Int
		*/
		function getTipoUtilizador()
		{
			return $this->TipoUtilizador;
		}

		/**
		*	@author Joуo Reis
		*	@return Boolean
		*/
		function isAdmin()
		{
			if($this->getTipoUtilizador() == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		/**
		*	@author Joуo Reis
		*	@return Int
		*/
		function getNumeroMaxServidores()
		{
			return $this->NumeroMaxServidores;
		}

		/**
		*	@author Joуo Reis
		*	@return Int
		*/
		function getNumeroServidores()
		{
			return count(getServidoresByIdUtilizador($this->Id));
		}

		/**
		*	@author Joуo Reis
		*	@return Array
		*/
		function getServidores()
		{
			return getServidoresByIdUtilizador($this->Id);
		}

		/**
		*	@author Joуo Reis
		*	@return Array
		*/
		function getServidoresOffline()
		{
			return getServidoresByIdUtilizadorAndStatus($this->Id, 0);
		}

		/**
		*	@author Joуo Reis
		*	@return Array
		*/
		function getServidoresOnline()
		{
			return getServidoresByIdUtilizadorAndStatus($this->Id, 1);
		}

		/**
		*	@author Joуo Reis
		*	@return Array
		*/
		function getServidoresAInstalar()
		{
			return getServidoresByIdUtilizadorAndStatus($this->Id, 2);
		}

		/**
		*	@author Joуo Reis
		*	@return Int
		*/
		function getSlotsUsados()
		{
			$Servidores = $this->getServidoresOnline();
			$total = 0; // Total slots usados
			foreach ($Servidores as $Servidor) 
			{
				try
				{
					$Server = new Servidor($Servidor['Id'], $this->conexaoBaseDados); // Criar Instтncia do Servidor
					$Server->getFullStatus(); // Atualizar Servidor
					$total += $Server->getSlots(); // Adicionar slots usados para o total
				}
				catch(Exception $e)
				{
					continue; // Se ouver algum erro com o servidor e/ou base dados continuar para proximo servidor
				}
			}
			return $total;
		}
		/**
		*	@author Joуo Reis
		*	@return boolean
		*/
		function hasCron()
		{
			return $this->Cron;
		}
		/**
		*	@author Joуo Reis
		*	@return Int
		*/
		function getIdTema()
		{
			return $this->IdTema;
		}
		
		/**
		*	@author Joуo Reis
		*	@return String
		*/
		function getNomeTema()
		{
			return $this->NomeTema;
		}
		
		/**
		*	@author Joуo Reis
		*	@return String
		*/
		function getPastaTema()
		{
			return $this->PastaTema;
		}

		/**
		*	@author Joуo Reis
		*	@return String
		*/
		function getLinguagem()
		{
			return $this->Linguagem;
		}
		
		/** 
		*	===================================================================================================
		* 	============================================== Setter's ===========================================
		*	===================================================================================================
		*/

		/**
		*	@author Joуo Reis
		*	@param $Nome
		*/
		function setNome($Nome)
		{
			$this->Nome = $Nome;
		}

		/**
		*	@author Joуo Reis
		*	@param $Apelido
		*/
		function setApelido($Apelido)
		{
			$this->Apelido = $Apelido;
		}

		/**
		*	@author Joуo Reis
		*	@param $Email
		*/
		function setEmail($Email)
		{
			$this->Email = $Email;
		}

		/**
		*	@author Joуo Reis
		*	@param $Password
		*/
		function setPassword($Password)
		{
			$this->Password = md5($Password);
		}

		/**
		*	@author Joуo Reis
		*	@param $TipoUtilizador
		*/
		function setTipoUtilizador($TipoUtilizador)
		{
			$this->TipoUtilizador = $TipoUtilizador;
		}

		function setNumeroMaxServidores($NumeroMaxServidores)
		{
			$this->NumeroMaxServidores = $NumeroMaxServidores;
		}
		
		/**
		*	@author Joуo Reis
		*	@param $Id
		*/
		function setIdTema($Id)
		{
			$this->IdTema = $Id;
		}
		
		/**
		*	@author Joуo Reis
		*	@param $Linguagem
		*/
		function setLinguagem($Linguagem)
		{
			$this->Linguagem = $Linguagem;
		}
		
		/**
		*	@author Joуo Reis
		*	@param $Cron
		*/
		function setCron($cron = 0)
		{
			$this->Cron = $cron;
		}
		
		/** 
		*	===================================================================================================
		* 	============================================== Funчѕes ============================================
		*	===================================================================================================
		*/
		
		/**
		*	Auto Remover-se
		*/
		function eliminar()
		{
			return removeUtilizador($this->Id);
		}

		/**
		* 	Atualiza a informaчуo alterada na classe para a base de dados faz alteraчѕes
		*	@return Boolean
		*/
		function atualizaInfo()
		{
			try
			{
				// Atualizar informaчуo
				$stmt = $this->conexaoBaseDados->prepare(UPDATEUTILIZADORBYID); // Preparar Statement
				$stmt->execute(
					array(
						":Id" 					=> $this->Id,
						":Nome" 				=> $this->Nome,
						":Apelido" 				=> $this->Apelido,
						":Email" 				=> $this->Email,
						":Password"				=> $this->Password,
						":TipoUtilizador" 		=> $this->TipoUtilizador,
						":NumeroMaxServidores"	=> $this->NumeroMaxServidores,
						":IdTema"				=> $this->IdTema,
						":Linguagem"			=> $this->Linguagem,
						":Cron"					=> $this->Cron
					)
				); // Executar Statement
				
				return true;
			}
			catch(Exception $ex)
			{
				// Erro ao atualizar informaчуo.
				return false;
			}
		}
		/**
		*	@author Joуo Reis
		*	Para Debugs
		*/
		function printInfo()
		{
			echo "Id=>".$this->getId()."  Nome=>".$this->getNome()."  Apelido=>".$this->getApelido()."  Email=>".$this->getEmail();
		}
		
	}
	
?>