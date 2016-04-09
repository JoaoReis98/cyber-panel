{include file="{$PastaTema}/includes/header.tpl"}
<style type="text/css">
    #FullWidth {
        width: calc(100% - 12px); /* IE 9,10 , Chrome, Firefox */
        width: -webkit-calc(100% - 12px); /*For safari 6.0*/
    }
</style>
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
<!-- SECTION -->
    {if $passo1 == true}
        {if $passo2 == true}
            {if $passo3 == true}
                {if $passo4 == true}
                    {if $Opcao == "Ver"}
                    <section class="clearfix section isotope" id="gallery">
                               <div class="tile black htmltile w4 h3 isotope-item mCustomScrollbar _mCS_2">{$Lang['titulo_perfil']}, <b>{$UserVer['Nome']}&nbsp;{$UserVer['Apelido']}</b>
                                    <h3>{$Lang['informacoes']}:</h3>
                                    <p>{$Lang['email']}: {$UserVer['Email']}</p>
                                    {if $UserVerIgual != true}
                                        <p><a href="admin.php?Action=Utilizador&Option=Login&Id={$UserVer['Id']}" type="button" class="pull-right btn btn-default btn-xl">{$Lang['botao_loginComoUtilizador']} <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></p>
                                        <br />
                                        <br />
                                        <p><button type="button" class="pull-right btn btn-warning btn-xl" data-toggle="modal" data-target="#reiniciarPassword">{$Lang['botao_reiniciarPassword']} <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></button></p>
                                    {/if}
                                    <br />
                                    <br />
                                    <p>
                                        <span>
                                        {*
                                            Verifica é utilizador ou administrador se for adminstrador aparece botão para downgrade, se for utilizador aparece botão de upgrade. 
                                        *}
                                        {if $UserVer['IsAdmin'] == true}
                                            <form action="" method="POST">
                                                <input type="hidden" name="Action" value="Downgrade" />
                                                <input type="hidden" name="Id" value="{$UserVer['Id']}" />
                                                <button type="submit" class="btn btn-danger">{$Lang['botao_downgrade']}</button><br /><br />
                                            </form>
                                        {else}
                                            <form action="" method="POST">
                                                <input type="hidden" name="Action" value="Upgrade" />
                                                <input type="hidden" name="Id" value="{$UserVer['Id']}" />
                                                <button class="btn btn-success">{$Lang['botao_upgrade']}</button>
                                            </form>
                                        {/if}
                                        </span>
                                        <br />
                                        <br />
                                            <span><button class="btn btn-primary" onclick="diminuirMaxServidores({$UserVer['Id']}); return false"><span class="icon icon-minus-sign" aria-hidden="true"></span></button></span>
                                            <span><button class="btn btn-primary" onclick="adicionarMaxServidores({$UserVer['Id']}); return false"><span class="icon icon-plus-sign" aria-hidden="true"></span></button></span>
                                            <br />
                                        
                                        <span class="pull-right"><span id="Servidores">{$UserVer['NumServidores']}</span>/<span id="MaxServidores">{$UserVer['MaxServidores']}</span>&nbsp;{$Lang['label_numServidores']}</span>
                                        <br />
                                            {*
                                                Escolher Classe da Barra de Progresso.
                                            *}
                                            {$classeBarra  = "success"}
                                            {if $UserVer['PercentUsado'] > 49}
                                            
                                                {$classeBarra  = "warning"}
                                            {/if}
                                            {if $UserVer['PercentUsado'] > 79}
                                            
                                                {$classeBarra = "danger"}
                                            {/if}
                                            <div id="barraProgressoClasse" class="progress progress-{$classeBarra} progress-striped FullWidth ">
                                              <div id="barraProgresso" class="bar" style="width: {$UserVer['PercentUsado']}%;">{$UserVer['PercentUsado']}%</div>
                                            </div>
                                    </p>
                                    <p><button type="button" class="pull-right btn btn-danger btn-xl" data-toggle="modal" data-target="#removerUtilizador">{$Lang['botao_removerUtilizador']} <span class="glyphicon glyphicon-user" aria-hidden="true"></span></button></p>
                                </div>
                            </div>
                            </div>
                        </section>
                            <!-- Modal Reniciar Password -->
                            <div style="color:black;" class="modal fade" id="reiniciarPassword" tabindex="-1" role="dialog" aria-labelledby="reiniciarPasswordLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="reiniciarPasswordLabel">{$Lang['reiniciarPasswordDe']} {$UserVer['Nome']}&nbsp;{$UserVer['Apelido']}</h4>
                                  </div>
                                  <form action="" method="POST">
                                  <div class="modal-body">                  
                                        <input type="hidden" name="Id" value="{$UserVer['Id']}">
                                        <input type="hidden" name="Action" value="MudarPassword">
                                        <label>{$Lang['label_novaPassword']}</label>
                                        <input type="text" id="FullWidth" name="Password" placeholder="{$Lang['input_novaPassword']}">
                                  </div>
                                  <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
                                        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /Modal Reiniciar Password -->

                            <!-- Modal Remover Utilizador -->
                            <div style="color:black;" class="modal fade" id="removerUtilizador" tabindex="-1" role="dialog" aria-labelledby="removerUtilizadorLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="removerUtilizadorLabel">{$Lang['removerUtilizador']} {$UserVer['Nome']}&nbsp;{$UserVer['Apelido']}</h4>
                                  </div>
                                  <p>{$Lang['alerta_confirmaEliminacaoUser']}</p>
                                  <form action="" method="POST">
                                    <input type="hidden" name="Id" value="{$UserVer['Id']}">
                                    <input type="hidden" name="Action" value="RemoverUtilizador">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
                                        <button type="submit" id="removerUtilizador" class="btn btn-primary">{$Lang['botao_remover']}</button>
                                    </div>
                                   </form>
                                </div>
                              </div>
                            </div>
                    {/if}
                {/if}
            {/if}
        {/if}
    {else}
        
            <section class="clearfix section" id="portfolio" data-option-key="filter">

                <!-- SECTION TITLE -->
                <h3 class="block-title">{$Lang['label_tipoServidor']}</h3>
                <!-- /SECTION TITLE -->

                <!-- SECTION TILES -->
                <div class="tile transparent icon-featurefade w1 h1">
                    <a class="link" href="#" data-option-value="*">
                        <img style="width: 100%; height=100%; " src="templates/{$PastaTema}/img/roles/utilizadores.png" alt=""/>
                        <p class="title"></p>
                    </a>
                </div>

				<div class="tile transparent title-scaledown imagetile icon-featurefade w1 h1">
                    <a class="link" href="#" data-option-value=".1">
                        <!--<i class="icon-laptop icon-4x"></i>-->
						<img style="width: 100%; height=100%; " src="templates/{$PastaTema}/img/roles/1.png" alt=""/>
                        <p class="title" style="color: orange;">{$Lang['role_administrador']}</p>
                    </a>
                </div>

                <div class="tile transparent title-scaledown imagetile icon-featurefade w1 h1">
                    <a class="link" href="#" data-option-value=".0">
                        <!--<i class="icon-laptop icon-4x"></i>-->
						<img style="width: 100%; height: 100%; " src="templates/{$PastaTema}/img/roles/0.png" alt=""/>
                        <p class="title" style="color: orange;">{$Lang['role_utilizador']}</p>
                    </a>
                </div>

				
                <!-- /SECTION TILES -->

            </section>
            <!-- /SECTION -->

            <!-- SECTION -->
            <section class="clearfix section" id="gallery">

                <!-- SECTION TILES -->
	{foreach $Utilizadores as $Utilizador}
					<div class="tile {$Utilizador['TipoUtilizador']} transparent title-scaledown imagetile icon-fadeoutscaleup w2 h1 isotope-item">
	                    <a href="admin.php?Action=Utilizador&Option=Ver&Id={$Utilizador['Id']}" data-lightbox="mlightboximage" class="link" 
	                       data-src="templates/{$PastaTema}/img/vazio.png" data-title="Servidor" data-description="{$Utilizador['Nome']}">
	                        <i class="icon-picture icon-3x"></i>
	                        <img style="width: 100%; height: 100%;" src="templates/{$PastaTema}/img/roles/{$Utilizador['TipoUtilizador']}.png" alt=""/>
	                    </a> 
			<div class="text">
				<p class="text-medium" style="color: orange;">{$Utilizador['Nome']} {$Utilizador['Apelido']}</p>
			</div>
				<p class="title" style="color: orange;">{$Utilizador['Email']}</p>
						<p class="sub" style="color: orange;">{$Utilizador['Id']}</p>
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
                <img src="templates/{$PastaTema}/img/preloader.gif" id="lockloader" alt="{$Lang['a_carregar']}"/>
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
		{foreach $Utilizadores as $UserVer}
			<section class="mlightbox" id="Utilizador{$UserVer['Id']}">
				<section class="mlightbox-content">
					<img src="#"  alt=""/>
				</section>
				<section class="mlightbox-details">
					<div class="mlightbox-description">
						<h2 class='mlightbox-title'>Cyber-Panel - {$UserVer['Nome']} {$UserVer['Apelido']}</h2>
					</div>
					<ul class="mlist">
						<li><a class="close-mlightbox" href="#"><i class="icon-arrow-left"></i> {$Lang['botao_cancelar']}</a></li>
						<li></li>
						<li><a href="servidor.php?Id={$Servidor['Id']}"><i class="icon-gear"></i> {$Lang['gestao']}</a></li>
						{if $UserVer['TipoUtilizador'] == 1}
							<li><a href="#"><i class="icon-info"></i>E Administrador</a></li>
						{else}
							<li><a href="#"><i class="icon-info"></i>Nao Administrador</a></li>
						{/if}
					</ul>
				</section>
			</section>
		{/foreach}
{/if}
        <!-- /GALLERY LIGHTBOX -->
{include file="{$PastaTema}/includes/footer.tpl"}