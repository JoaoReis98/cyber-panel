{include file="{$PastaTema}/includes/header.tpl"}
        <!-- BACKGROUND -->
        <img src="templates/{$PastaTema}/img/background-2.jpg" class="background" alt="" style="width: 100%; height: 100%"/>
        <!-- /BACKGROUND -->
<style type="text/css">
    .FullWidth {
        width: calc(100%); /* IE 9,10 , Chrome, Firefox */
        width: -webkit-calc(100%); /*For safari 6.0*/
    }
    .Erro
    {
        background-color: red;
    }

    .Sucesso
    {
        background-color: green;
    }
</style>
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


            <section class="clearfix section isotope" id="gallery">
                <div class="tile black htmltile w4 h3 isotope-item mCustomScrollbar _mCS_2">
                    <br />
                    <h3>{$Lang['informacoes']}</h3>
                    <p>{$Lang['email']}: {$Utilizador['Email']}</p>
                    <hr></hr>
					<form action="profile.php" method="POST">
						<input type="hidden" name="Action" value="toggleCron" />
						<label>{$Lang['label_cron']}</label><p><button type="submit" class="btn btn-primary">{if $Utilizador['Cron'] == 1}{$Lang['botao_desativar']}{/if}{if $Utilizador['Cron'] == 0}{$Lang['botao_ativar']}{/if}</button></p>
					</form>
                    <span class="pull-left">{$Lang['servidoresAtuais']}: {$Utilizador['NumServidores']}</span><span class="pull-right">{$Lang['maxServidoresPermitidos']}: {$Utilizador['MaxServidores']}</span>
                <br />
                    {*
                        Escolher Classe da Barra de Progresso.
                    *}
                    {$classeBarra  = "success"}
                    {if $Utilizador['PercentUsado'] > 49}
                    
                        {$classeBarra  = "warning"}
                    {/if}
                    {if $Utilizador['PercentUsado'] > 79}
                    
                        {$classeBarra = "danger"}
                    {/if}

                <div class="progress progress-{$classeBarra} FullWidth progress-stripedactive">
                  <div class="bar" style="width: {$Utilizador['PercentUsado']}%;">{$Utilizador['PercentUsado']}%</div>
                </div>
                </div>
            </section> 

            <section class="clearfix section" id="acoes">
                <div class="tile yellow w1 h1 title-fadeout icon-scaleuprotate360cw">
                            <a type="button" class="link" data-toggle="modal" data-target="#reiniciarPassword">
                                <i class="icon-4x icon-terminal"></i>
                                <p class="title">{$Lang['botao_reiniciarPassword']}</p>
                                
                            </a>
                        </div>
                        <!-- /SECTION TILES -->
                        <!--<button type="button" data-toggle="modal" data-target="#executarComando"><i class="icon-4x icon-console"></i></button>-->
                    
                       <!-- Modal Reniciar Password -->
                    <div class="modal fade" id="reiniciarPassword" tabindex="-1" role="dialog" aria-labelledby="reiniciarPasswordLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="color: black;" id="reiniciarPasswordLabel">{$Lang['reiniciarPasswordDe']} {$Utilizador['Nome']} {$Utilizador['Apelido']}</h4>
                          </div>
                              <form action="" method="POST">
                              <div class="modal-body">
                                    <input type="hidden" name="Action" value="MudarPassword">
                                    <label style="color: black;">{$Lang['label_passwordAtual']}</label><br />
                                    <input type="password" class="FullWidth" id="PasswordAtual" name="PasswordAtual" placeholder="{$Lang['input_passwordAtual']}"><br />
                                    <label style="color: black;">{$Lang['label_novaPassword']}</label><br />
                                    <input type="password" class="FullWidth" id="NovaPassword" name="NovaPassword" onkeyup="setPw(this); verificaPasswords(); return false;" placeholder="{$Lang['input_novaPassword']}"><br />
                                    <label style="color: black;">{$Lang['label_repitaANovaPassword']}</label><br />
                                    <input type="password" class="FullWidth" id="RepNovaPassword" name="RepNovaPassword" onkeyup="setRepPw(this); verificaPasswords(); return false;" placeholder="{$Lang['input_repitaANovaPassword']}"><br />
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
                                    <button type="submit" id="AlterarPassword" class="btn btn-primary">{$Lang['botao_guardar']}</button>
                                
                              </div>
                              </form>
                        </div>
                      </div>
                    </div>
                    <!-- /Modal Reiniciar Password -->
                </section>

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
<script type="text/javascript">
    var pw;
    var repPw;
    $("#AlterarPassword").addClass("disabled");
    function setRepPw(a)
    {
        console.log("RepPw = "+a.value);
        repPw = a.value;
    }

    function setPw(a)
    {
        pw = a.value;
    }

    function verificaPasswords()
    {
        if(pw == repPw)
        {
            console.log("Okay");
            $("#RepNovaPassword").removeClass('Erro').addClass('Sucesso');
            $("#NovaPassword").removeClass('Erro').addClass('Sucesso');
            $("#AlterarPassword").removeClass("disabled");
        }
        else
        {
            console.log("erro");
            $("#RepNovaPassword").removeClass('Sucesso').addClass('Erro');
            $("#NovaPassword").removeClass('Sucesso').addClass('Erro');
            $("#AlterarPassword").removeClass("disabled").addClass("disabled");
        }
    }
</script>
{include file="{$PastaTema}/includes/footer.tpl"}