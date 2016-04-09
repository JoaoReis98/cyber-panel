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

                <section class="clearfix section" id="definicoes">
                    <div class="tile black htmltile w2 h2">
                        <div class="content">
                            <h3><label>{$Lang['label_tema']}</label></h3>
                            <select style="width: 100%;" onchange="setTema(this); return false;" class="form-control ng-pristine ng-valid ng-touched" id="tema" name="IdTema">
                                <option value="{$Utilizador['IdTema']}">{$Utilizador['NomeTema']}</option>
                                    
                                    {foreach $Temas as $Tema}
                                        {if $Tema['Id'] == $Utilizador['IdTema']}
                                        {else}
                                            <option value="{$Tema['Id']}">{$Tema['Nome']}</option>
                                        {/if}
                                    {/foreach}
                            </select>
                        <h3><label>{$Lang['label_linguagem']}</label></h3>
                        <select style="width: 100%;" onchange="setLang(this); return false;" class="form-control ng-pristine ng-valid ng-touched" id="tema" name="IdTema">
                            <option value="{$LangKey}">{$LangKey}</option>
                            {foreach $Langs as $Key}
                                {if $LangKey == $Key}
                                {else}
                                    <option value="{$Key}">{$Key}</option>
                                {/if}
                            {/foreach}
                        </select> 
                        </div>
                    </div>
                </section>
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
    } -->
</script> 
{include file="{$PastaTema}/includes/footer.tpl"}