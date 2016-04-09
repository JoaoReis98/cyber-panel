<?php
/*%%SmartyHeaderCode:6789880745677d01a864e84_57664515%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ccc4f9196756390b9a251889fa82e83be876191' => 
    array (
      0 => '/home/admin/web/pap.cyber-panel.org/public_html/templates/Metromega/procura.tpl',
      1 => 1450692530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6789880745677d01a864e84_57664515',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_5677d02338af61_40408400',
  'has_nocache_code' => true,
  'cache_lifetime' => 10,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5677d02338af61_40408400')) {
function content_5677d02338af61_40408400 ($_smarty_tpl) {

echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!-- BACKGROUND -->
        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['PastaTema']->value;?>
/img/background-2.jpg" class="background" alt="" style="width: 100%; height: 100%"/>
        <!-- /BACKGROUND -->

        <!-- MAIN CONTENT SECTION -->
        <section id="content">

            <!-- SECTION -->
            <section class="clearfix section" id="start">
			
                <!-- SECTION TITLE -->
                <h3 class="block-title">Ol&aacute;, Hugo Rocha</h3>
                <!-- /SECTION TITLE -->
                
                <!-- SECTION TILES -->

                <div class="tile white icon-featureccw w2 h1 title-fadeout">
                    <a href="index.php">
                        <i class="icon-windows icon-4x"></i>
                        <p class="title">Painel Principal</p>
                    </a>
                </div>

                <div class="tile orange icon-featureccw w2 h1 title-fadeout">
                    <a href="definicoes.php">
                        <i class="icon-gear icon-4x"></i>
                        <p class="title">Defini&ccedil;&otilde;es</p>
                    </a>
                </div>

                <div class="tile blue title-verticalcenter icon-flip w2 h1">
                    <a href="profile.php">
                        <i class="icon-user icon-4x"></i>
                        <p class="title">Perfil</p>
                    </a>
                </div>
                                <div class="tile purple title-scaleup icon-scaledownrotate360cw w1 h1">
                    <a href="admin.php">
                        <i class="icon-envelope icon-4x"></i>
                        <p class="title">Administra&ccedil;&atilde;o</p>
                    </a>
                </div>
                                <div class="tile yellow icon-flip title-fadeout w1 h1">
                    <a href="ajuda.php">
                        <i class="icon-question-sign icon-4x"></i>
                        <p class="title">Ajuda</p>
                    </a>
                </div>
				
				<div class="tile red icon-featureccw w1 h1 title-fadeout">
                    <a href="criarServidor.php">
                        <i class="icon-plus-sign icon-4x"></i>
                        <p class="title">Criar servidor</p>
                    </a>
                </div>
				
				<div class="tile black icon-featureccw w1 h1 title-fadeout">
                    <a href="logout.php">
                        <i class="icon-off icon-4x"></i>
                        <p class="title">Terminar Sess&atilde;o</p>
                    </a>
                </div>
				
								
            </section>
            <!-- /SECTION -->
	
			<section class="clearfix section" id="services">
				<div class="tile title-fade icon-featureccw w2 h1">
					<a class="link" href="#">
						<div class="text">
							<p class="text-medium">
								Servidores Offline
							</p>
						</div>
						<p class="sub" id="ServidoresOffline">2</p>
						<p class="title"><i class="icon-arrow-right icon-2x"></i></p>
					</a>
				</div>
				
				<div class="tile title-fade icon-featureccw w2 h1">
					<a class="link" href="#">
						<div class="text">
							<p class="text-medium">
								Servidores Online
							</p>
						</div>
						<p class="sub" id="ServidoresOnline">0</p>
						<p class="title"><i class="icon-arrow-right icon-2x"></i></p>
					</a>
				</div>
				<div class="tile title-fade icon-featureccw w2 h1">
					<a class="link" href="#">
						<div class="text">
							<p class="text-medium">
								Slots Usados
							</p>
						</div>
						<p class="sub" id="SlotsUsadosTotal">0</p>
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
                <h3 class="block-title">Servidores</h3>
                <!-- /SECTION TITLE -->

                <!-- SECTION TILES -->
                <div class="tile turquoise icon-featurefade w1 h1">
                    <a class="link" href="#" data-option-value="*">
                        <i class="icon-list icon-4x"></i>
                        <p class="title">*</p>
                    </a>
                </div>
				
								<div class="tile transparent title-scaledown imagetile icon-featurefade w1 h1">
                    <a class="link" href="#" data-option-value=".1">
                        <!--<i class="icon-laptop icon-4x"></i>-->
						<img style="width: 100%; height=100%; " src="templates/<?php echo $_smarty_tpl->tpl_vars['PastaTema']->value;?>
/img/jogos/1.png" alt=""/>
                        <p class="title" style="color: black;">Minecraft 1.7.2</p>
                    </a>
                </div>
								<div class="tile transparent title-scaledown imagetile icon-featurefade w1 h1">
                    <a class="link" href="#" data-option-value=".2">
                        <!--<i class="icon-laptop icon-4x"></i>-->
						<img style="width: 100%; height=100%; " src="templates/<?php echo $_smarty_tpl->tpl_vars['PastaTema']->value;?>
/img/jogos/2.png" alt=""/>
                        <p class="title" style="color: black;">Counter Strike 1.6</p>
                    </a>
                </div>
				
				
                <!-- /SECTION TILES -->

            </section>
            <!-- /SECTION -->

            <!-- SECTION -->
            <section class="clearfix section" id="gallery">

                <!-- SECTION TILES -->
                		<h3 class="block-title">Sem resultados de pesquisa... [ asd ]</h3>
    
		                <!-- /SECTION TILES -->

            </section> 
            <!-- /SECTION -->

        </section> 
        <!-- /MAIN CONTENT SECTION -->

        <!-- LOCKSCREEN -->
        <section class="mlightbox" id="lockscreen">
            <div id="lockscreen-content">
                <img src="templates/<?php echo $_smarty_tpl->tpl_vars['PastaTema']->value;?>
/img/logo.png" height="109" width="140" id="locklogo"  alt="Metromega"/>
                <br/><br/>
                <img src="templates/<?php echo $_smarty_tpl->tpl_vars['PastaTema']->value;?>
/img/preloader.gif" id="lockloader"  alt="A Carregar..."/>
            </div>
        </section>
        <!-- /LOCKSCREEN -->

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <!-- PRELOADER -->
        <section class="mlightbox" id="loader">
            <a href="#">
                <img src="templates/<?php echo $_smarty_tpl->tpl_vars['PastaTema']->value;?>
/img/preloader.gif" alt="A Carregar..."/>
            </a>
        </section>
        <!-- /PRELOADER -->

        <!-- GALLERY LIGHTBOX -->
        <section class="mlightbox" id="galleryimage">
            <section class="mlightbox-content">
                <img src="#"  alt=""/>
            </section>
            <section class="mlightbox-details">
                <div class="mlightbox-description">
                    <h2 class='mlightbox-title'>Cyber-Panel</h2>
                </div>
                <ul class="mlist">
                    <li><a class="close-mlightbox" href="#"><i class="icon-arrow-left"></i> Cancel</a></li>
                    <li></li>
                    <li><a target="_blank" href="https://facebook.com/grozavcom"><i class="icon-facebook-sign"></i> Faz like no nosso Facebook</a></li>
                    <li><a target="_blank" href="https://twitter.com/intent/user?screen_name=grozavcom"><i class="icon-twitter-sign"></i> Segue-nos no Twitter</a></li>
                </ul>
            </section>
        </section>
        <!-- /GALLERY LIGHTBOX -->

		<!-- GALLERY LIGHTBOX -->
					<section class="mlightbox" id="servidor15">
				<section class="mlightbox-content">
					<img src="#"  alt=""/>
				</section>
				<section class="mlightbox-details">
					<div class="mlightbox-description">
						<h2 class='mlightbox-title'>Cyber-Panel - Minecrafitas</h2>
					</div>
					<ul class="mlist">
						<li><a class="close-mlightbox" href="#"><i class="icon-arrow-left"></i> Cancel</a></li>
						<li></li>
						<li><a href="servidor.php?Id=15"><i class="icon-gear"></i> Gest&atilde;o</a></li>
													<li><a href="#"><i class="icon-info"></i> Motd: poop</a></li>
							<li><a href="#"><i class="icon-info"></i> Mapa: poop</a></li>
							<li><a href="#"><i class="icon-info"></i> Slots: <span id="Slots15">0</span> / </span id="MaxSlots15">5</span></a></li>
							<li><a href="#"><i class="icon-info"></i> Jogadores: poop</a></li>
											</ul>
				</section>
			</section>
					<section class="mlightbox" id="servidor25">
				<section class="mlightbox-content">
					<img src="#"  alt=""/>
				</section>
				<section class="mlightbox-details">
					<div class="mlightbox-description">
						<h2 class='mlightbox-title'>Cyber-Panel - cs_server</h2>
					</div>
					<ul class="mlist">
						<li><a class="close-mlightbox" href="#"><i class="icon-arrow-left"></i> Cancel</a></li>
						<li></li>
						<li><a href="servidor.php?Id=25"><i class="icon-gear"></i> Gest&atilde;o</a></li>
													<li><a href="#"><i class="icon-info"></i> Motd: Servidor CS</a></li>
							<li><a href="#"><i class="icon-info"></i> Mapa: dust2</a></li>
							<li><a href="#"><i class="icon-info"></i> Slots: <span id="Slots25">0</span> / </span id="MaxSlots25">10</span></a></li>
							<li><a href="#"><i class="icon-info"></i> Jogadores: Servidor CS</a></li>
											</ul>
				</section>
			</section>
		        <!-- /GALLERY LIGHTBOX -->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>