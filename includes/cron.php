<?php 
	#require_once('../includes/smarty/libs/Smarty.class.php'); // Sistema de templates
	require_once(__DIR__."/../base_dados/config.php");		// Conexão com base de dados
	require_once(__DIR__."/../base_dados/functions.php");
	require_once(__DIR__."/../__classes/Utilizador.class.php");	// Classe Utilizador
	require_once(__DIR__."/../__classes/Servidor.class.php");	// Classe Utilizador
    require_once(__DIR__."/../includes/querys/SourceQuery.class.php");
	require_once(__DIR__."/../lang.php");
	require_once(__DIR__."/../includes/phpmailer/PHPMailerAutoload.php");
	
	#require_once(__DIR__."/../base_dados/config.php");
	$stmt = $conn->prepare(GETALLUTILIZADORES);
	$stmt->execute();
	$utilizadoresV = $stmt->fetchAll();
	foreach($utilizadoresV as $utilizador)
	{
		
		$user = new Utilizador($utilizador['Id'], $conn);
		if(!$user->hasCron()) continue;
		$mail = new PHPMailer();
	
		$mail->isSMTP();
		
		$mail->Host = $email_host;
		$mail->SMTPAuth = true;
		$mail->Username = $email_user;
		$mail->Password = $email_pass;
		$mail->SMTPSecure = $email_sec;
		$mail->Port = $email_port;
		$mail->setFrom('noreply@cyber-panel.org', 'CyberPanel - Servers Info');
		$mail->isHTML(true);
		
		$stmt = $conn->prepare(GETSERVIDORBYIDUTILIZADOR);
		$stmt->execute(array(":IdUtilizador" => $user->getId()));
		$servidoresV = $stmt->fetchAll();
		$mail->addAddress($user->getEmail(), $user->getNome()." ".$user->getApelido());
		$mail->Subject = 'Cyber-Panel Servers Info';
		foreach($servidoresV as $servidor)
		{
			$sv = new Servidor($servidor['Id'], $conn);
			$mail->Body .= "<h2>".$sv->getNomeServidor()."</h2>";
			$mail->Body .= "<p><b>".$sv->getIp().":".$sv->getPorta()."</b></p>";
			$Res = $sv->getFullStatus();
			if($Res)
			{		
				$Mapa = $Res['Map'];
				$Slots = $Res['Players'];
				$MaxSlots = $Res['MaxPlayers'];
				$JLista = $Res['Playerlist'];
				$Plugins = $Res['Plugins'];
				$mail->Body .= "<h5><font color='green'>Online</font></h5>";
				$mail->Body .= "<h6>Mapa: <b>".$Mapa."</b></h6>";
				$mail->Body .= "<h6>Slots: <b>".$Slots."/".$MaxSlots."</b></h6>";
				$mail->Body .= "<h6>Jogadores:</h3>";
				$mail->Body .= "<ul>";
				if(count($JLista))
				{
					foreach($JLista as $lista)
					{
						$mail->Body .= "<li>".$lista."</li>";
					}
				}
				else 
				{
					$mail->Body .= "<li>Sem jogadores</li>";
				}
				$mail->Body .= "</ul>";
			}
			else 
			{
				$mail->Body .= "<h5><font color='red'>Offline</font></h5>";
			}
			$mail->Body .= "<hr />";
		}
		if(!$mail->send()) 
		{
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 
		else 
		{
			#echo 'Message has been sent';
		}
	}
	