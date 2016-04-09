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
	*	@modulo Exemplo
	*	@author João Reis
	*	@Year 2016
	*	@license GPL ( http://www.gnu.org/licenses/gpl-3.0.en.html )
	*/
	// Modulo exemplo
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

			try
			{

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
		*	@param $
		*	@return
		*/
		function _instalarServidor($Id)
		{

		}

		/**
		*	@author João Reis
		*	@Year 2016
		*	@param $
		*	@return
		*/
		function _atualizarServidor($Id)
		{

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
		*	@param $
		*	@return
		*/
		function _reinstalarServidor($Id)
		{
			try
			{
				_apagarServidor();
				_instalarServidor();
			}
			catch(Exception $e)
			{
				return false;
			}
		}

		/**
		*	@author João Reis
		*	@Year 2016
		*	@param $Id
		*/
		function _iniciarServidor($Id)
		{

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

	}
	#print_r(_iniciaModulo("188.209.52.63", 27015));
