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
	$User = new Utilizador($_SESSION['Id'], $conn);
	
	if($_GET)
	{
		if(!isset($_GET['Id']))
		{
			header("Location: index.php");
			die();
		}
		$Id = addslashes($_GET['Id']);

		/**
		*	Verificar se o utilizador e dono do servidor.
		*/
		if(!isServerOwnedById($Id, $User->getId()))
		{
			// Redirect de pagina caso não seja dono do servidor.
			header("Location: index.php");
			die();
		}

		$Servidor = new Servidor($Id, $conn);
		$Servidor->getInfo();
		$Servidor->getFullStatus();
		updateRunningServers($User->getId());
	}
	else
	{
		header("Location: index.php");
		die();
	}

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

	$total = 0;
	$Servidores = getServidoresByIdUtilizador($User->getId());
	if(count($Servidores))
	{
		foreach($Servidores as $Servidors)
		{
		
			$server = new Servidor($Servidors['Id'], $conn);
			$server->getFullStatus(); // Fazer update aos Status
			$total += $server->getSlots();
		}
		$slotsOcupados = $total;	
	}
	else 
	{
		$slotsOcupados = 0;
	}

	
	$smarty = new Smarty;
	if($OldUser)
	{
		$Uti = array(
				"Nome" 			=> utf8_encode($User->getNome()),
				"Apelido" 		=> utf8_encode($User->getApelido()),
				"Email" 		=> utf8_encode($User->getEmail()),
				"Id" 			=> $User->getId(),
				"IdTema" 		=> $User->getIdTema(),
				"NomeTema" 		=> $User->getNomeTema(),
				"IsAdmin"		=> $User->isAdmin(),
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
				"IsAdmin"		=> $User->isAdmin(),
				"OldUser"		=> $OldUser,
			);
	}

	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 10;

	$smarty->assign("NomeTema", utf8_encode($User->getPastaTema()), true);
	$smarty->assign("PastaTema", utf8_encode($User->getPastaTema()), true);
	$smarty->assign("Titulo", "Cyber-Panel", true);
	$smarty->assign("Zona", utf8_encode($linguagens[$User->getLinguagem()]['zona_servidor']." :: ".$Servidor->getNomeServidor()), true);
	$smarty->assign("Utilizador", $Uti);
	$smarty->assign("Infos", array(
							"NumServidores" 		=> count(getServidoresByIdUtilizador($User->getId())),
							"NumServidoresOnline" 	=> count(getServidoresByIdUtilizadorAndStatus($User->getId(), 1)),
							"NumServidoresOffline" 	=> count(getServidoresByIdUtilizadorAndStatus($User->getId(), 0)),
							"NumSlotsOcupados"		=> $slotsOcupados,
							));
	$smarty->assign("TiposServidores", getAllTiposServidores());
	$smarty->assign("Servidores", getServidoresByIdUtilizador($User->getId()));
	$smarty->assign("Servidor", array(
								"Id"				=> $Servidor->getId(),
								"IdUtilizador"		=> $Servidor->getIdUtilizador(),
								"TipoServidor"		=> $Servidor->getTipoServidor(),
								"NomeTipoServidor"	=> $Servidor->getNomeTipoServidor(),
								"NomeServidor" 		=> $Servidor->getNomeServidor(),
								"Ip"				=> $Servidor->getIp(),
								"Porta"				=> $Servidor->getPorta(),
								"PortaQuery" 		=> $Servidor->getPortaQuery(),
								"Mapa"				=> $Servidor->getMapaAtual(),
								"MapaDb"			=> $Servidor->getMapaInicial(),
								"Motd"				=> $Servidor->getMotd(),
								"MaxSlots"			=> $Servidor->getMaxSlots(),
								"MaxSlotsDb"		=> $Servidor->getMaxSlotsDb(),
								"Slots"				=> $Servidor->getSlots(),
								"Jogadores"			=> $Servidor->getJogadores(),
								"Instalado"			=> $Servidor->isInstalado(),
								"OnlineMode"		=> $Servidor->getOnlineMode(),
								"FTP_User"			=> $Servidor->getFTPUser(),
								"FTP_Password"		=> $Servidor->getFTPPassword(),
								"Status"			=> $Servidor->getStatus(),
								));
	$smarty->assign("Lang", $linguagens[$User->getLinguagem()]);
	$smarty->display($User->getPastaTema().'/servidor.tpl');
	#$smarty->display('Metromega/index.tpl');
?>
	<script type="text/javascript">
	function Redirect (url) {
	    var ua        = navigator.userAgent.toLowerCase(),
	        isIE      = ua.indexOf('msie') !== -1,
	        version   = parseInt(ua.substr(4, 2), 10);

	    // Internet Explorer 8 and lower
	    if (isIE && version < 9) {
	        var link = document.createElement('a');
	        link.href = url;
	        document.body.appendChild(link);
	        link.click();
	    }

	    // All other browsers
	    else { window.location.href = url; }
	}

		// Pedido Ajax para atualizar status do servidor como os Slots usados, Slots maximos, e mapa atual.
		setInterval(function(){ 
		   $.get("includes/api.php", {Id:"<?php echo $Id; ?>", AJAX: "Info"},
			    function(Result){
			    	if(Result.Status)
			    	{
			    		$("#Slots").text(Result.Slots);
			         	$("#MaxSlots").text(Result.MaxSlots);
			         	$("#Mapa").text(Result.Mapa);
			         	if(Result.Jogadores.length > 0)
			         	{
			         		console.log("Resultado Jogadores=>"+Result);
							$("#Jogadores").html("");
				         	for (var i = 0; i < Result.Jogadores.length; i++) 
				         	{
				         		console.log("Jogadores:"+Result.Jogadores[i]);
				         		$("#Jogadores").html($("#Jogadores").html()+"<p>"+Result.Jogadores[i]+"</p>");
				         	}
			         	}
			         	else
			         	{
			         		console.log("Ninguem no servidor...");
			         		$("#Jogadores").html("<?php echo utf8_encode($linguagens[$User->getLinguagem()]['sem_jogadores']); ?>");
			         	}
			    	}
		         	
		         	//$("#Jogadores").text(Result.MaxSlots);
			    },'json'
			 );

		   	var statusSv = 0;
		   	var recarregar = false;
		   	var lastStatus = -1;

   		   	$.get("includes/api.php", {Id:"<?php echo $Id; ?>", AJAX: "GETLOGS"},
			    function(Result){
			    	if(Result.Status)
			    	{
			         	if(Result.Linhas.length > 0)
			         	{
							$("#Logs").html("");
							// Devolver todas as linhas do log (25 linhas aprox.)
				         	for (var i = 0; i < Result.Linhas.length; i++) {
				         		//console.log("Log:"+Result.Linhas[i]);
				         		$("#Logs").html($("#Logs").html()+"<p>"+Result.Linhas[i]+"</p>");
				         	}
				         	// Fim Devolver Todas as Linhas
				         	// Devolver apenas as 4 ultimas linhas do log
				         	$("#ultimas2LinhasLogs").html("");
				         	$("#ultimas2LinhasLogs").html("<p>"+Result.Linhas[Result.Linhas.length-4]+"</p>");
				         	$("#ultimas2LinhasLogs").html($("#ultimas2LinhasLogs").html()+"<p>"+Result.Linhas[Result.Linhas.length-3]+"</p>");
			         		$("#ultimas2LinhasLogs").html($("#ultimas2LinhasLogs").html()+"<p>"+Result.Linhas[Result.Linhas.length-2]+"</p>");
			         		$("#ultimas2LinhasLogs").html($("#ultimas2LinhasLogs").html()+"<p>"+Result.Linhas[Result.Linhas.length-1]+"</p>");
				         	// Fim Devolver 4 linhas.
			         	}
			         	else
			         	{
			         		console.log("Sem Logs no Servidor");
			         		$("#Logs").html("<?php echo utf8_encode($linguagens[$User->getLinguagem()]['sem_logs']); ?>");
			         	}
			    	}

			    	if((lastStatus == 2) && (Result.StatusSv == 0))
			    	{
	         			// Recarregar pagina
			    		Redirect("servidor.php?Id=<?php echo $Id; ?>&Sucesso=6");
			    	}
			    	else
			    	{
			    		lastStatus = Result.StatusSv;
			    	}

			    },'json'
			 );

		}, 5000);
	

		function executa(comando)
		{
			//console.log("A executar: "+$("#comando").val());
			var comando = $("#comando").val();
			console.log(comando);

			$.get("includes/api.php", {Id:"<?php echo $Id; ?>", AJAX: "EXECUTACOMANDO", Comando: comando},
			    function(Result){
			    	if(Result.Status)
			    	{
			         	$("#StatusComando").html("<div class=\"alert alert-success\" role=\"alert\">[ "+comando+" ]</div>");
			    	}
			    	else
			    	{
		    			$("#StatusComando").html("<div class=\"alert alert-danger\" role=\"alert\">[ "+Result.Mensagem+" ]</div>");
			    	}
		         	
			    },'json'
		 	);
		}

		function limpa()
		{
			$("#StatusComando").html("");
			$("#Logs").html("<p>.....</p>");
    		$("#Slots").text(".....");
         	$("#MaxSlots").text(".....");
         	$("#Mapa").text(".....");
		}
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove(); 
			});
		}, 3000);
	</script>
<?php 
	exit();
?>