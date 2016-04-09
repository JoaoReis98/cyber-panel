-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Mar-2016 às 21:51
-- Versão do servidor: 5.5.47-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `pap_cyberpanel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `servidores`
--

CREATE TABLE IF NOT EXISTS `servidores` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdUtilizador` int(11) NOT NULL,
  `TipoServidor` int(2) NOT NULL,
  `NomeServidor` varchar(50) NOT NULL,
  `Ip` varchar(21) NOT NULL,
  `Porta` varchar(9) NOT NULL,
  `PortaQuery` varchar(9) NOT NULL,
  `Status` int(3) NOT NULL,
  `DataHoraCriado` datetime NOT NULL,
  `Instalado` int(11) NOT NULL,
  `MaxSlots` int(11) NOT NULL,
  `OnlineMode` tinyint(1) NOT NULL,
  `Mapa` varchar(30) NOT NULL,
  `Motd` varchar(100) NOT NULL,
  `FTP_User` varchar(50) NOT NULL,
  `FTP_Password` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Extraindo dados da tabela `servidores`
--

INSERT INTO `servidores` (`Id`, `IdUtilizador`, `TipoServidor`, `NomeServidor`, `Ip`, `Porta`, `PortaQuery`, `Status`, `DataHoraCriado`, `Instalado`, `MaxSlots`, `OnlineMode`, `Mapa`, `Motd`, `FTP_User`, `FTP_Password`) VALUES
(15, 2, 1, 'Minecrafitas', '188.209.52.63', '25569', '25569', 0, '2015-09-22 14:40:20', 1, 5, 0, 'poop', 'Server_Exemplo', '15', 'RhsH0lRC'),
(17, 1, 2, 'Servidor de counter strike 1.6', '188.209.52.63', '27015', '27015', 0, '2015-09-26 14:21:17', 1, 15, 0, 'de_dust2', 'Mudar Motd do Servidor', '17', 'sjQFx0rJ'),
(18, 1, 2, 'Servidor para testes cs 1.6', '188.209.52.63', '27016', '27016', 0, '2015-09-26 18:14:24', 1, 3, 0, 'de_dust2', 'Este &eacute; o Motd do Servidor de CS', '18', 'Gj7B6cls'),
(25, 2, 2, 'CS 1.6 Servidor LAN PARTY', '188.209.52.63', '5466', '5467', 0, '2015-11-24 08:57:47', 1, 10, 0, 'dust2', 'Servidor CS', '25', 'gpC9xbbF'),
(27, 1, 1, 'Servidor de Minecraft', '188.209.52.63', '25565', '25565', 0, '2015-12-05 09:29:10', 1, 3, 0, 'mundinho', 'Teste_Servidor.', '27', '1MGheJrL'),
(32, 13, 1, ' as9dhasds', '188.209.52.63', '8898', '8898', 0, '2016-01-07 19:37:11', 1, 6, 0, 'DreamWorld', 'Bem vindo ao fodÃ¡stico servidor de mine', '32', 'BDRhSOCR'),
(35, 2, 1, 'Server Apresentacao', '188.209.52.63', '26656', '26656', 0, '2016-01-20 12:08:48', 1, 6, 0, 'mundo', 'Apresentacao', '35', 'gFqi1xms'),
(37, 1, 1, 'Teste Local mine', '188.209.52.63', '26658', '26658', 0, '2016-01-20 13:00:12', 1, 5, 0, 'mundo', 'OlaTurma', '37', 'Euo4IJLb'),
(40, 1, 3, 'Cs Go', '188.209.52.63', '27017', '27017', 0, '2016-02-26 11:26:10', 1, 10, 0, 'de_nuke', 'Sem MOTD', '40', '4hm3XOuH'),
(41, 1, 3, 'Counter Strike GO teste', '188.209.52.63', '27018', '27018', 0, '2016-02-26 12:40:59', 1, 12, 0, 'de_dust2', 'Sem MOTD', '41', 'LmE3TCFC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Pasta` varchar(50) NOT NULL,
  `Ativado` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `temas`
--

INSERT INTO `temas` (`Id`, `Nome`, `Pasta`, `Ativado`) VALUES
(1, 'Classico', 'Classico', 1),
(2, 'Estilo Metro', 'Metromega', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposservidores`
--

CREATE TABLE IF NOT EXISTS `tiposservidores` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `ComandoInstalar` varchar(5000) NOT NULL,
  `ComandoIniciar` varchar(5000) NOT NULL,
  `UrlImagem` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tiposservidores`
--

INSERT INTO `tiposservidores` (`Id`, `Nome`, `Url`, `ComandoInstalar`, `ComandoIniciar`, `UrlImagem`) VALUES
(1, 'Minecraft 1.7.2', 'http://pap.cyber-panel.org/downloads/1/craftbukkit1.7.2.zip', 'sudo apt-get install default-jre; unzip craftbukkit1.7.2.zip; rm craftbukkit1.7.2.zip', 'sed -i ''''/^server-port=/c\\\\server-port=%Porta%'''' server.properties; sed -i ''''/^enable-query=/c\\\\enable-query=true'''' server.properties; sed -i ''''/^server-ip=/c\\\\server-ip=%Ip%'''' server.properties; sed -i ''''/^online-mode=/c\\\\online-mode=%OnlineMode%'''' server.properties; sed -i ''''/^query.port=/c\\\\query.port=%PortaQuery%'''' server.properties; sed -i ''''/^motd=/c\\\\motd=%Motd%'''' server.properties; sed -i ''''/^online-mode=/c\\\\online-mode=%OnlineMode%'''' server.properties; sed -i ''''/^level-name=/c\\\\level-name=%Mapa%'''' server.properties; sed -i ''''/^max-players=/c\\\\max-players=%MaxSlots%'''' server.properties; java -jar craftbukkit.jar', 'imagens/jogos/minecraft.png'),
(2, 'Counter Strike 1.6', 'http://pap.cyber-panel.org/downloads/2/cs1.6.zip', 'sudo apt-get install lib32gcc1; unzip cs1.6.zip; rm cs1.6.zip; chmod 550 hlds_run; chmod 550 hlds_linux; chmod 550 hltv; exit; exit\n', 'cd cs; ulimit -n 2048; ./hlds_run -game cstrike -autoupdate +maxplayers %MaxSlots% +map %Mapa% +ip %Ip% +port %Porta%', 'imagens/jogos/cs1.6.png'),
(3, 'Counter-Strike: Global Offensive', 'null', 'sudo apt-get install lib32gcc1; su - cyberpanel ./steamcmd.sh +login anonymous +force_install_dir /home/cyberpanel/%FTP_User%/csgo +app_update 740 validate +quit; sleep 10; exit; exit', 'su - cyberpanel -c "cd /home/cyberpanel/%FTP_User%/csgo; whoami; sleep 3; ulimit -n 2048; ./srcds_run -console +maxplayers %MaxSlots% +map %Mapa% +ip %Ip% +port %Porta% +clientport %Porta%"', 'imagens/jogos/csgo.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE IF NOT EXISTS `utilizadores` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(25) NOT NULL,
  `Apelido` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `DataHoraRegisto` datetime NOT NULL,
  `TipoUtilizador` int(11) NOT NULL,
  `NumeroMaxServidores` int(20) NOT NULL,
  `IdTema` int(11) NOT NULL DEFAULT '1',
  `Linguagem` varchar(50) NOT NULL,
  `Cron` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`Id`, `Nome`, `Apelido`, `Email`, `Password`, `DataHoraRegisto`, `TipoUtilizador`, `NumeroMaxServidores`, `IdTema`, `Linguagem`, `Cron`) VALUES
(1, 'Jo&atilde;o', 'Reis', 'joaoreis@outlook.pt', 'abf7c9b735be7331ae133a32d8bdd894', '2015-09-15 14:00:00', 1, 14, 1, 'Portugues', 0),
(2, 'Hugo', 'Rocha', 'hugo182011@gmail.com', '4e951936957c783062a399c629ce9a95', '2015-09-15 00:00:00', 1, 10, 1, 'Portugues', 0),
(3, 'Sérgio', 'Reis', 'sergio_alvadia44@protonmail.ch', 'e4c51bee8f721e77aa203fe2d893cfa9 ', '2015-09-22 00:00:00', 0, 1, 1, 'Portugues', 0),
(10, 'Administrador', 'Demo', 'admin@admin.com', 'abf7c9b735be7331ae133a32d8bdd894', '2015-10-29 18:58:23', 1, 3, 1, 'Portugues', 0),
(13, 'demo', 'lels', 'demo@demo.com', 'fe01ce2a7fbac8fafaed7c982a04e229', '2016-01-07 19:27:50', 0, 2, 1, 'Portugues', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
