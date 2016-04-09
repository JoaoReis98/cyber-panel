{include file="{$PastaTema}/includes/header.tpl"}
        <!-- BACKGROUND -->
        <img src="templates/{$PastaTema}/img/background-2.jpg" class="background" alt="" style="width: 100%; height: 100%"/>
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
            <section class="clearfix section" id="portfolio" data-option-key="filter">

                <!-- SECTION TITLE -->
                <h3 class="block-title">{$Lang['servidores']}</h3>
                <!-- /SECTION TITLE -->

                <!-- SECTION TILES -->
                <div class="tile turquoise icon-featurefade w1 h1">
                    <a class="link" href="#" data-option-value="*">
                        <i class="icon-list icon-4x"></i>
                        <p class="title">*</p>
                    </a>
                </div>
				
				{foreach $TiposServidores as $TipoServidor}
				<div class="tile transparent title-scaledown imagetile icon-featurefade w1 h1">
                    <a class="link" href="#" data-option-value=".{$TipoServidor['Id']}">
                        <!--<i class="icon-laptop icon-4x"></i>-->
						<img style="width: 100%; height=100%; " src="templates/{$PastaTema}/img/jogos/{$TipoServidor['Id']}.png" alt=""/>
                        <p class="title" style="color: black;">{$TipoServidor['Nome']}</p>
                    </a>
                </div>
				{/foreach}

				
                <!-- /SECTION TILES -->

            </section>
            <!-- /SECTION -->

            <!-- SECTION -->
            <section class="clearfix section" id="gallery">

                <!-- SECTION TILES -->
				{foreach $Servidores as $Servidor}
				<div class="tile {$Servidor['TipoServidor']} transparent title-scaledown imagetile icon-fadeoutscaleup w2 h1 isotope-item">
                    <a href="#servidor{$Servidor['Id']}" data-lightbox="mlightboximage" class="link" 
                       data-src="templates/{$PastaTema}/img/jogos/{$Servidor['TipoServidor']}-full.png" data-title="Servidor" data-description="{$Servidor['NomeServidor']}">
                        <i class="icon-picture icon-3x"></i>
                        <img src="templates/{$PastaTema}/img/jogos/{$Servidor['TipoServidor']}.png" alt=""/>
                    </a> 
					<div class="text">
						<p class="text-medium" style="color: black;">{$Servidor['NomeServidor']}</p>
						
					</div>
					<p class="title" style="color: black;"><span id="Slots{$Servidor['Id']}">0</span> / </span id="MaxSlots{$Servidor['Id']}">{$Servidor['MaxSlots']}</span></p>
					<p class="sub" style="color: black;"><span id="Status{$Servidor['Id']}">{$Lang['a_carregar']}</span></p>
                </div>
				
				{/foreach}
                <!-- /SECTION TILES -->

            </section> 
            <!-- /SECTION -->

        </section> 
        <!-- /MAIN CONTENT SECTION -->

        <!-- LOCKSCREEN -->
        <section class="mlightbox" id="lockscreen">
            <div id="lockscreen-content">
                <img src="templates/{$PastaTema}/img/logo.png" height="109" width="140" id="locklogo"  alt="Metromega"/>
                <br/><br/>
                <img src="templates/{$PastaTema}/img/preloader.gif" id="lockloader"  alt="{$Lang['a_carregar']}"/>
            </div>
        </section>
        <!-- /LOCKSCREEN -->

        {include file="{$PastaTema}/includes/sideMenu.tpl"}

        <!-- PRELOADER -->
        <section class="mlightbox" id="loader">
            <a href="#">
                <img src="templates/{$PastaTema}/img/preloader.gif" alt="{$Lang['a_carregar']}"/>
            </a>
        </section>
        <!-- /PRELOADER -->

     

		<!-- GALLERY LIGHTBOX -->
		{foreach $Servidores as $Servidor}
			<section class="mlightbox" id="servidor{$Servidor['Id']}">
				<section class="mlightbox-content">
					<img src="#"  alt=""/>
				</section>
				<section class="mlightbox-details">
					<div class="mlightbox-description">
						<h2 class='mlightbox-title'>Cyber-Panel - {$Servidor['NomeServidor']}</h2>
					</div>
					<ul class="mlist">
						<li><a class="close-mlightbox" href="#"><i class="icon-arrow-left"></i> {$Lang['botao_cancelar']}</a></li>
						<li></li>
						<li><a href="servidor.php?Id={$Servidor['Id']}"><i class="icon-gear"></i> {$Lang['gestao']}</a></li>
						{if $Servidor['Instalado'] == 1}
							<li><a href="#"><i class="icon-info"></i> {$Lang['motd']}: {$Servidor['Motd']}</a></li>
							<li><a href="#"><i class="icon-info"></i> {$Lang['mapa']}: {$Servidor['Mapa']}</a></li>
							<li><a href="#"><i class="icon-info"></i> {$Lang['slots']}: <span id="Slots{$Servidor['Id']}">0</span> / </span id="MaxSlots{$Servidor['Id']}">{$Servidor['MaxSlots']}</span></a></li>
							<li><a href="#"><i class="icon-info"></i> {$Lang['jogadores']}: {$Servidor['Motd']}</a></li>
						{else}
							<li><p>{$Lang['alerta_naoEstaLigado']}</p></li>
						{/if}
					</ul>
				</section>
			</section>
		{/foreach}
        <!-- /GALLERY LIGHTBOX -->
{include file="{$PastaTema}/includes/footer.tpl"}