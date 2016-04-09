<!doctype html>
<html lang="pt">
    <head>

        <meta charset="utf-8" />
        <title>{$Titulo} - {$Zona}</title>
        
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="templates/{$NomeTema}/css/style.css" />

        <!-- Scripts are at the bottom of the page -->

    </head>
    <body>

        <!-- BACKGROUND -->
        <img src="templates/{$NomeTema}/img/background-2.jpg" class="background" alt="" style="width: 100%; height: 100%"/>
        <!-- /BACKGROUND -->


        <!-- MAIN CONTENT SECTION -->
        <section id="content">

            <!-- SECTION -->
            <section class="clearfix section" id="start">
			
                <!-- SECTION TITLE -->
                <h3 class="block-title">{$Lang['ola']}, {$Utilizador['Nome']} {$Utilizador['Apelido']}</h3>
                <!-- /SECTION TITLE -->
                
                <!-- SECTION TILES -->

                <div class="tile white icon-featureccw w2 h1 title-fadeout">
                    <a href="index.php">
                        <i class="icon-windows icon-4x"></i>
                        <p class="title">{$Lang['titulo_painelPrincipal']}</p>
                    </a>
                </div>

                <div class="tile orange icon-featureccw w2 h1 title-fadeout">
                    <a href="definicoes.php">
                        <i class="icon-gear icon-4x"></i>
                        <p class="title">{$Lang['menu_definicoes']}</p>
                    </a>
                </div>

                <div class="tile blue title-verticalcenter icon-flip w2 h1">
                    <a href="profile.php">
                        <i class="icon-user icon-4x"></i>
                        <p class="title">{$Lang['menu_perfil']}</p>
                    </a>
                </div>
                {if $Utilizador['IsAdmin']}
                <div class="tile purple title-scaleup icon-scaledownrotate360cw w1 h1">
                    <a href="admin.php">
                        <i class="icon-envelope icon-4x"></i>
                        <p class="title">{$Lang['zona_administracao']}</p>
                    </a>
                </div>
                {/if}
                <div class="tile yellow icon-flip title-fadeout w1 h1">
                    <a href="ajuda.php">
                        <i class="icon-question-sign icon-4x"></i>
                        <p class="title">{$Lang['zona_ajuda']}</p>
                    </a>
                </div>
				
				<div class="tile red icon-featureccw w1 h1 title-fadeout">
                    <a href="criarServidor.php">
                        <i class="icon-plus-sign icon-4x"></i>
                        <p class="title">{$Lang['zona_criarServidor']}</p>
                    </a>
                </div>
				
				<div class="tile black icon-featureccw w1 h1 title-fadeout">
                    <a href="logout.php">
                        <i class="icon-off icon-4x"></i>
                        <p class="title">{$Lang['menu_terminarSessao']}</p>
                    </a>
                </div>
				
				{if $Utilizador['OldUser'] == true}
				<div class="tile black w1 h1 title-horizontalcenter icon-scaleuprotate360cw">
                    <a href="index.php?Option=Login">
                        <i class="icon-user icon-4x"></i>
                        <p class="title">{$Lang['botao_voltarContaAnterior']}</p>
                    </a>
                </div>
				{/if}
				
            </section>
            <!-- /SECTION -->
	
			<section class="clearfix section" id="services">
				<div class="tile title-fade icon-featureccw w2 h1">
					<a class="link" href="#">
						<div class="text">
							<p class="text-medium">
								{$Lang['detalhe_servidoresOffline']}
							</p>
						</div>
						<p class="sub" id="ServidoresOffline">{$Infos['NumServidoresOffline']}</p>
						<p class="title"><i class="icon-arrow-right icon-2x"></i></p>
					</a>
				</div>
				
				<div class="tile title-fade icon-featureccw w2 h1">
					<a class="link" href="#">
						<div class="text">
							<p class="text-medium">
								{$Lang['detalhe_servidoresOnline']}
							</p>
						</div>
						<p class="sub" id="ServidoresOnline">{$Infos['NumServidoresOnline']}</p>
						<p class="title"><i class="icon-arrow-right icon-2x"></i></p>
					</a>
				</div>
				<div class="tile title-fade icon-featureccw w2 h1">
					<a class="link" href="#">
						<div class="text">
							<p class="text-medium">
								{$Lang['detalhe_slotsUsados']}
							</p>
						</div>
						<p class="sub" id="SlotsUsadosTotal">{$Infos['NumSlotsOcupados']}</p>
						<p class="title"><i class="icon-arrow-right icon-2x"></i></p>
					</a>
				</div>
			</section>
	
            <!-- SECTION -->
			<!--
            <section class="clearfix section" id="services">

                

            </section>
			-->
            <!-- /SECTION -->

            <!-- SECTION -->
            <section class="clearfix section" id="gallery">
				 <!-- SECTION TITLE -->
                <h3 class="block-title">{$Servidor['NomeServidor']}</h3>
                <!-- /SECTION TITLE -->

                <!-- SECTION TILES -->
                <div class="tile black htmltile w4 h4">
					{if $Servidor['Status'] == 1}
						<div id="Logs" class="tilecontent">
							{$Lang['a_carregarLogs']}
						</div>
					{/if}
					{if $Servidor['Status'] == 2}
						<div id="ultimas2LinhasLogs" class="tilecontent" style="color: blue;">
							<p>{$Lang['a_carregarLogs']}</p>
						</div>
					{/if}
                </div>
                <!-- /SECTION TILES -->
            </section> 
            <!-- /SECTION -->
			
			

						  
					
            <!-- SECTION -->
            <section class="clearfix section" id="contact">

                <!-- SECTION TITLE -->
                <h3 class="block-title">{$Lang['titulo_acoes']}</h3>
                <!-- /SECTION TITLE -->
				{if $Servidor['Status'] != 0}
					{if $Servidor['Status'] == 1}
						<!-- SECTION TILES -->
						<!-- Formulario parar servidor -->
						<form action="includes/api.php" method="GET" id="Parar">
							<input type="hidden" name="Id" value="{$Servidor['Id']}">
							<input type="hidden" name="Action" value="Stop">
							<input type="hidden" name="Return" value="True">
						</form>
						<!-- /Formulario parar servidor -->
						<div class="tile red w1 h1 title-fadeout icon-scaleuprotate360cw">
							<!-- Botão Parar -->
							<a class="link" href="#" onclick="$('#Parar').submit(); return false;">
								<i class="icon-4x icon-stop"></i>
								<p class="title">{$Lang['botao_pararServidor']}</p>
							</a>
							<!-- /Botão Parar -->
						</div>
						
						<!-- /SECTION TILES -->
						
						<!-- SECTION TILES -->
						<div class="tile blue w1 h1 title-fadeout icon-scaleuprotate360cw">
							<a type="button" class="link" data-toggle="modal" data-target="#executarComando">
								<i class="icon-4x icon-terminal"></i>
								<p class="title">{$Lang['botao_executar']}</p>
								
							</a>
						</div>
						<!-- /SECTION TILES -->
						<!--<button type="button" data-toggle="modal" data-target="#executarComando"><i class="icon-4x icon-console"></i></button>-->
					
										<!-- Modal Executar Comando -->
										<div class="modal fade" id="executarComando" tabindex="-1" role="dialog" aria-labelledby="executarComandoLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="executarComandoLabel">{$Lang['botao_executar']}</h4>
											  </div>
												<center><input style="width: 95%;" type="text" id="comando" name="comando" placeholder="" /><br />
												<button style="width: 95%;" type="button" class="btn btn-primary" onclick="executa(); $('#comando').attr('value', '');">{$Lang['botao_executar']}</button>
												<div style="width: 100%;" id="StatusComando">
													
												</div></center>
											</div>
										  </div>
										</div>	
										<!-- /Modal Executar Comando -->
					{/if}
					<!-- SECTION TILES -->
					{if $Servidor['Status'] == 2}
						<div class="tile blue w1 h1 title-fadeout icon-scaleuprotate360cw">
							<a type="button" class="link" href="#" onclick="location.reload();">
								<i class="icon-4x icon-retweet"></i>
								<p class="title">{$Lang['a_instalarServidor']}</p>
							</a>
						</div>
					
					{/if}
				{else}
					<div class="tile green w1 h1 title-fadeout icon-scaleuprotate360cw">
						<form class="pull-left" action="includes/api.php" method="GET" id="Iniciar">
							<input type="hidden" name="Id" value="{$Servidor['Id']}">
							<input type="hidden" name="Action" value="Start">
							<input type="hidden" name="Return" value="True">
						</form>
						<a class="link" href="#" onclick="$('#Iniciar').submit(); return false;">
							<!-- Botão Iniciar -->
								<i class="icon-4x icon-play" ></i>
								<p class="title">{$Lang['botao_iniciarServidor']}</p>
							<!-- /Botão Iniciar -->
						</a>
					</div>
					
					<!-- Botão Reinstalar Servidor -->
					<div class="tile yellow w1 h1 title-fadeout icon-scaleuprotate360cw">
						<form action="includes/api.php" method="GET" id="Reinstalar">
							<input type="hidden" name="Id" value="{$Servidor['Id']}">
							<input type="hidden" name="Action" value="InstalarServidor">
							<input type="hidden" name="Return" value="True">
						</form>
						
							<a class="link" href="#" onclick="$('#Reinstalar').submit(); return false;">
								<!-- Botão Iniciar -->
									<i class="icon-4x icon-refresh" ></i>
									<p class="title">{$Lang['botao_reinstalarServidor']}</p>
								<!-- /Botão Iniciar -->
							</a>
					</div>
					<!-- /Botão Reinstalar Servidor -->
					
					<!-- Botão Eliminar Servidor -->
					<div class="tile red w1 h1 title-fadeout icon-scaleuprotate360cw">
						<form action="includes/api.php" method="GET" id="Eliminar">
							<input type="hidden" name="Id" value="{$Servidor['Id']}">
							<input type="hidden" name="Action" value="EliminarServidor">
							<input type="hidden" name="Return" value="True">
						</form>
						
							<a class="link" href="#" onclick="$('#Eliminar').submit(); return false;">
								<!-- Botão Iniciar -->
									<i class="icon-4x icon-remove" ></i>
									<p class="title">{$Lang['botao_eliminarServidor']}</p>
								<!-- /Botão Iniciar -->
							</a>
					</div>
					<!-- /Botão Eliminar Servidor -->
				{/if}
				<!-- /SECTION TILES -->
            </section>
            <!-- /SECTION -->
 				<section class="clearfix section" id="FTP">
 					<div class="tile black htmltile w4 h4">
 							{$Lang['ip']}: <span id="ftp_ip">{$Servidor['Ip']}</span><br>
 							{$Lang['label_nome']} <span id="ftp_utilizador">{$Servidor['FTP_User']}</span><br>
 							{$Lang['label_password']} <span id="ftp_utilizador">{$Servidor['FTP_Password']}</span>
						<!-- FTP -->
			  				<iframe width="100%" height="600px" src="includes/ftp/index.php?ftpserver={$Servidor['Ip']}&ftpserverport=21&username=cyberpanelftp&password_encrypted=6B8D67180F2071B7&language=pt&skin=shinra&ftpmode=binary&passivemode=no&protocol=FTP&viewmode=list&sort=&sortorder=&state=browse&state2=main&directory=%2F{$Servidor['Id']}&entry="></iframe>
			  			<!-- / FTP -->
			  			</div>
			  	</section>
        </section> 
        <!-- /MAIN CONTENT SECTION -->

        <!-- LOCKSCREEN -->
        <section class="mlightbox" id="lockscreen">
            <div id="lockscreen-content">
                <img src="templates/{$NomeTema}/img/logo.png" height="109" width="140" id="locklogo"  alt="Metromega"/>
                <br/><br/>
                <img src="templates/{$NomeTema}/img/preloader.gif" id="lockloader"  alt="Loading.."/>
            </div>
        </section>
        <!-- /LOCKSCREEN -->

        {include file="{$PastaTema}/includes/sideMenu.tpl"}

        <!-- PRELOADER -->
        <section class="mlightbox" id="loader">
            <a href="#">
                <img src="templates/{$NomeTema}/img/preloader.gif" alt="Loading.."/>
            </a>
        </section>
        <!-- /PRELOADER -->


        <script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> <!-- jQuery Library -->
        <script src="templates/{$NomeTema}/js/respond.min.js" type="text/javascript"></script> <!-- Responsive Library -->
        <script src="templates/{$NomeTema}/js/jquery.isotope.min.js" type="text/javascript"></script> <!-- Isotope Layout Plugin -->
        <script src="templates/{$NomeTema}/js/jquery.mousewheel.js" type="text/javascript"></script> <!-- jQuery Mousewheel -->
        <script src="templates/{$NomeTema}/js/jquery.mCustomScrollbar.js" type="text/javascript"></script> <!-- malihu Scrollbar -->
        <script src="templates/{$NomeTema}/js/tileshow.js" type="text/javascript"></script> <!-- Metromega Custom Tileshow Plugin -->
        <script src="templates/{$NomeTema}/js/mlightbox.js" type="text/javascript"></script> <!-- Metromega Custom Lightbox Plugin -->
        <script src="templates/{$NomeTema}/js/jquery.fitVids.js" type="text/javascript"></script> <!-- jQuery fitVids Plugin -->
        <script src="templates/{$NomeTema}/js/lockscreen.js" type="text/javascript"></script> <!-- Metromega Lockscreen -->
        <script src="templates/{$NomeTema}/js/bootstrap.min.js" type="text/javascript"></script> <!-- Bootstrap Library -->

        <script src="templates/{$NomeTema}/js/script.js" type="text/javascript"></script> <!-- Metromega Script -->

        <script src="templates/{$NomeTema}/js/videoscript.js" type="text/javascript"></script> <!-- Video Script -->


    </body>
</html>