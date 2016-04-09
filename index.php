<?php

	@session_start();
	require_once('includes/smarty/libs/Smarty.class.php'); // Sistema de templates
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
                $Sucessos[] = "Login Realizado.";
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
	                $Erros[] = "Erro ao realizar login";
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
	
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 10;
	$smarty->assign("NomeTema", $User->getNomeTema(), true);
	$smarty->assign("PastaTema", $User->getPastaTema(), true);
	$smarty->assign("Titulo", "Cyber-Panel", true);
	$smarty->assign("Zona", $linguagens[$User->getLinguagem()]['zona_indice'], true);
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
	$smarty->assign("Utilizador", $Uti);
	$smarty->assign("Infos", array(
							"NumServidores" 		=> count(getServidoresByIdUtilizador($User->getId())),
							"NumServidoresOnline" 	=> count(getServidoresByIdUtilizadorAndStatus($User->getId(), 1)),
							"NumServidoresOffline" 	=> count(getServidoresByIdUtilizadorAndStatus($User->getId(), 0)),
							"NumSlotsOcupados"		=> $slotsOcupados,
							));
	$smarty->assign("TiposServidores", getAllTiposServidores());
	$smarty->assign("Servidores", getServidoresByIdUtilizador($User->getId()));
	$smarty->assign("Lang", $linguagens[$User->getLinguagem()]);
	$smarty->display($User->getPastaTema().'/index.tpl');
?>

	<?php if($User->isAdmin()) { ?>
		
	  	<?php } ?>


  	<script type="text/javascript">
      	setInterval(function(){ 
			<?php
				foreach($Servidores as $Servidor)
				{
				$server = new Servidor($Servidor['Id'], $conn);
			?>

					// Pedido Ajax para atualizar status do servidor como os Slots usados, Slots maximos, e mapa atual.
					$.get("includes/api.php", {Id:"<?php echo $server->getId(); ?>", AJAX: "Info"},
						function(Result){
						if(Result.Status)
						{
							$("#Slots<?php echo $server->getId(); ?>").text(Result.Slots);
							
							// console.log("Updated "+Result.Id+"!");
							if(Result.Online == 0)
							{
								$("#Status"+Result.Id).html("<font color='red'><?php echo $linguagens[$User->getLinguagem()]['offline']; ?></font>");
							}
							else 
							{
								$("#Status"+Result.Id).html("<font color='green'><?php echo $linguagens[$User->getLinguagem()]['online']; ?></font>");
								$("#MaxSlots<?php echo $server->getId(); ?>").text(Result.MaxSlots);
							}
							if(Result.Jogadores.length > 0)
							{
							}
							else
							{
							}
						}
						},'json'
					);
		   
			<?php
				}
			?>
			// Pedido Ajax para atualizar estatisticas dos servidor como os Servidores online/offline e slots usados.
	   		$.get("includes/api.php", {AJAX: "InfoEstatisticas"},
	        	function(Result){
	          		if(Result.Status)
	      			{
	              		$("#SlotsUsadosTotal").text(Result.SlotsUsadosTotal);
	              		$("#ServidoresOnline").text(Result.ServidoresOnline);
	              		$("#ServidoresOffline").text(Result.ServidoresOffline);
	              		console.log("Updated estatisticas");
	          		}
	        	},'json'
	 		);
		}, 5000);
  	</script>

<script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 3000);
</script>

