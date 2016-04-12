<?php
	@include_once("includes/querys/SourceQuery.class.php");
	@include_once("../includes/querys/SourceQuery.class.php");
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
	*	@modulo Counter-Strike Global Offensive
	*	@author João Reis
	*	@Year 2016
	*	@license GPL ( http://www.gnu.org/licenses/gpl-3.0.en.html )
	*/
	// Modulo cs go
	{
		$_ip = "";
		$_portaQuery = -1;
		$_objQuery = null;
		
		/**
		*	@author João Reis
		*	@param $ip_q String, $portaQuery_q integer, $retornaStatus boolean
		*	@return boolean, array
		*/
		function _iniciaModulo($ip_q, $portaQuery_q, $retornaStatus = true)
		{
			global $_ip, $_portaQuery, $_objQuery;
			$_ip = $ip_q;
			$_portaQuery = $portaQuery_q;

			if($retornaStatus)
			{
				return _getStatus();
			}
			return true;
		}

		/**
		*	@author João Reis
		*	@return array
		*/
		function _getStatus()
		{
			global $_ip, $_portaQuery, $_objQuery;

			// Objeto para Query's
			$_objQuery = new SourceQuery();
			try
			{
				// Conectar-se ao servidor
				$_objQuery->Connect( $_ip, $_portaQuery, 1, SourceQuery::GOLDSOURCE );
				#print_r($_objQuery);
				$Info = array();
				$Jogadores = array();
				$Regras = array();
				// Retornar Plugins neste caso sao Regras
				$_Regras = $_objQuery->GetRules();
				// Retornar lista de Jogadores
				$Jogadores = $_objQuery->GetPlayers();
				// Retornar Informação do servidor.
				$Info = $_objQuery->GetInfo();

				$_MapaAtual = $Info['Map'];
				$_SlotsUsados = $Info['Players'];
				$_MaxSlots = $Info['MaxPlayers'];
				$_Versao = $Info['Version'];
				// Passar lista de jogadores recebida em algo Global para que o painel perceba.
				$JogadoresJ = array();
				if(count($Jogadores)>0 && $Info != null)
				{
					foreach($Jogadores as $Jogador)
					{
						$JogadoresJ[] = utf8_encode($Jogador["Name"]);
					}
				}
				$_Jogadores = $JogadoresJ;
				$_Plugins = $Regras;
			}
			catch(Exception $e)
			{
				$_MapaAtual = ".....";
				$_SlotsUsados = ".....";
				$_MaxSlots = ".....";
				$_Versao = "1.0.0";
			}
			return array(
				"Map" 			=> $_MapaAtual,
				"Players" 		=> $_SlotsUsados,
				"MaxPlayers" 	=> $_MaxSlots,
				"Playerlist" 	=> $_Jogadores,
				"Plugins" 		=> $_Regras,
				"Versao"		=> $_Versao
				);
		}

		/**
		*	@author João Reis
		*	@Year 2016
		*	@param $retornaStatus boolean
		*	@return boolean, array
		*/
		function _paraModulo($retornaStatus = false)
		{
			global $_ip, $_portaQuery, $_objQuery;
			if($retornaStatus)
			{
				return _getStatus();
			}
			return true;
		}

		/**
		*	@author João Reis
		*	@Year 2016
		*	@param $Id
		*	@return Boolean
		*/
		function _apagarServidor($Id)
		{
			try
			{
				_pararServidor($Id);
				$comando = "rm -r /home/cyberpanel/".$Id."; exit";
				#shell_exec($comando);
				shell_exec("sudo tmux new-session -s apaga$Id -d");
				shell_exec("sudo tmux send -t apaga$Id '$comando' ENTER");
				eliminarServidorById($Id);
				return true;
			}
			catch(Exception $ex)
			{
				return false;
			}
		}

		/**
		*	@author João Reis
		*	@Year 2016
		*	@param $Id
		*/
		function _pararServidor($Id)
		{
			shell_exec("sudo tmux kill-session -t '".$Id."'");
		}
		
		function csgo_teste()
		{
			echo "TESTE";
		}
		
		function _atualizarServidor($Id)
		{
			
			echo "Updating";
			_pararServidor($Id);
			shell_exec("sudo tmux new-session -s $Id -d");
			shell_exec("sudo tmux send -t $Id 'chown $Id:cyberpanel /home/cyberpanel/$Id/* -R; chmod 770 /home/cyberpanel/$Id/* -R; sudo su - cyberpanel -c \"bash /home/cyberpanel/steamcmd.sh +login anonymous +force_install_dir /home/cyberpanel/$Id/ +app_update 740 +quit\"; exit' ENTER");
			
		}
	}
	#print_r(_iniciaModulo("37.228.132.250", 27115));
