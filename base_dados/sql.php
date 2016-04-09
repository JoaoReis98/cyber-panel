<?php

	###############################################################################################################
	# SQLS Usados!
	#	GETS
	
	#	Utilizadores
	define("GETUTILIZADORBYEMAILANDPASSWORD", 				"SELECT * FROM `utilizadores` WHERE `Email` = :Email AND `Password` = :Password LIMIT 1"); #Login
	define("GETUTILIZADORBYID",								"SELECT * FROM `utilizadores` WHERE `Id` = :Id LIMIT 1");
	define("GETUTILIZADORBYEMAIL", 							"SELECT * FROM `utilizadores` WHERE `Email` = :Email LIMIT 1");
	
	#	Servidores
	define("GETALLSERVIDORES",								"SELECT * FROM `servidores`");
	define("GETALLUTILIZADORES",							"SELECT * FROM `utilizadores`");
	define("GETSERVIDORBYIDUTILIZADOR",						"SELECT * FROM `servidores` WHERE `IdUtilizador` = :IdUtilizador");
	define("GETSERVIDORBYID",								"SELECT * FROM `servidores` WHERE `Id` = :Id");
	define("GETSERVIDORESBYIDUTILIZADORANDSTATUS",			"SELECT * FROM `servidores` WHERE `IdUtilizador` = :IdUtilizador AND `Status` = :Status");
	define("GETSERVIDORBYIDUTILIZADORANDQUERY",				"SELECT * FROM `servidores` WHERE `IdUtilizador` = :IdUtilizador AND (`NomeServidor` LIKE (:Query) OR `TipoServidor` LIKE (:Query) OR `Id` LIKE (:Query) OR `NomeServidor` LIKE (:Query) OR `Status` LIKE (:Query))");
	define("GETSERVIDORESBYTIPOSERVIDORANDIDUTILIZADOR",	"SELECT * FROM `servidores` WHERE `TipoServidor` = :TipoServidor AND `IdUtilizador` = :IdUtilizador");
	define("GETSERVIDORESBYPORTA",							"SELECT * FROM `servidores` WHERE `Porta` = :Porta OR `PortaQuery` = :Porta");

	#	Tipo Servidores
	define("GETALLTIPOSSERVIDORES",							"SELECT * FROM `tiposservidores`");
	define("GETTIPOSERVIDORBYID",							"SELECT * FROM `tiposservidores` WHERE `Id` = :Id");
	#	Temas
	define("GETALLTEMAS",									"SELECT * FROM `temas`");
	define("GETTEMABYID",									"SELECT * FROM `temas` WHERE `Id` = :Id");
	define("GETPRIMEIROTEMAATIVADO",						"SELECT * FROM `temas` WHERE `Ativado`=1 LIMIT 1");
	
	#	INSERTS
	define("ADDUTILIZADOR", 								"INSERT INTO `utilizadores` (`Id`, `Nome`, `Apelido`, `Email`, `Password`, `DataHoraRegisto`, `TipoUtilizador`, `NumeroMaxServidores`, `IdTema`, `Linguagem`, `Cron`) VALUES (:Id, :Nome, :Apelido, :Email, :Password, :DataHoraRegisto, :TipoUtilizador, :NumeroMaxServidores, :IdTema, :Linguagem, :Cron)");
	define("ADDSERVIDOR", 									"INSERT INTO `servidores` (`Id`, `IdUtilizador`, `TipoServidor`, `NomeServidor`, `Ip`, `Porta`, `PortaQuery`, `Status`, `DataHoraCriado`, `Instalado`, `MaxSlots`, `OnlineMode`, `Mapa`, `Motd`, `FTP_User`, `FTP_Password`) VALUES (:Id, :IdUtilizador, :TipoServidor, :NomeServidor, :Ip, :Porta, :PortaQuery, :Status, :DataHoraCriado, :Instalado, :MaxSlots, :OnlineMode, :Mapa, :Motd, :FTP_User, :FTP_Password)");
	define("ADDTIPOSERVIDOR",								"INSERT INTO `tiposservidores` (`Id`, `Nome`, `Url`, `ComandoInstalar`, `ComandoIniciar`, `UrlImagem`) VALUES (:Id, :Nome, :Url, :ComandoInstalar, :ComandoIniciar, :UrlImagem)");

	#	UPDATES
	define("UPDATEUTILIZADORBYID", 							"UPDATE `utilizadores` SET `Nome` = :Nome, `Apelido` = :Apelido, `Email` = :Email, `Password` = :Password, `TipoUtilizador` = :TipoUtilizador, `NumeroMaxServidores` = :NumeroMaxServidores, `IdTema` = :IdTema, `Linguagem` = :Linguagem, `Cron` = :Cron  WHERE `Id` = :Id");
	define("UPDATESERVIDORBYID",							"UPDATE `servidores` SET `IdUtilizador` = :IdUtilizador, `TipoServidor` = :TipoServidor, `NomeServidor` = :NomeServidor, `Ip` = :Ip, `Porta` = :Porta, `PortaQuery` = :PortaQuery, `Status` = :Status, `Instalado` = :Instalado, `MaxSlots` = :MaxSlots, `OnlineMode` = :OnlineMode, `Mapa` = :Mapa, `Motd` = :Motd, `FTP_User` = :FTP_User, `FTP_Password` = :FTP_Password  WHERE `Id` = :Id");
	define("UPDATESERVIDORSTATUSBYID",						"UPDATE `servidores` SET `Status` = :Status WHERE `Id` = :Id");
	
	#	DELETES
	define("DELETEUTILIZADORBYID", 							"DELETE FROM `utilizadores` WHERE `Id` = :Id");
	define("DELETEUTILIZADORBYEMAIL", 						"DELETE FROM `utilizadores` WHERE `Email` = :Email");
	define("DELETESERVIDORBYID", 							"DELETE FROM `servidores` WHERE `Id` = :Id");

	###############################################################################################################
	
?>