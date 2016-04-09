<?php
/*%%SmartyHeaderCode:18382471185630ff1e9c3b11_07563084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '510d7fe730265eb6fbf82c0659537e93a494966d' => 
    array (
      0 => '/home/admin/web/pap.cyber-panel.org/public_html/templates/Classico/servidor.tpl',
      1 => 1446051611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18382471185630ff1e9c3b11_07563084',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_5630ff3716ad11_72890681',
  'has_nocache_code' => true,
  'cache_lifetime' => 10,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5630ff3716ad11_72890681')) {
function content_5630ff3716ad11_72890681 ($_smarty_tpl) {

echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/topMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<style type="text/css">
	<style>
	.glyphicon.glyphicon-play {
		font-size: 30px;
	}
	.glyphicon.glyphicon-stop {
		font-size: 30px;
	}
	.glyphicon.glyphicon-refresh {
		font-size: 30px;
	}
	.glyphicon.glyphicon-trash {
		font-size: 30px;
	}

	#comando {
	    width: calc(100% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(100% - 12px); /*For safari 6.0*/
	}

	#FullWidth {
	    width: calc(100% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(100% - 12px); /*For safari 6.0*/
	}
	</style>

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1 class="page-header">Panel || Minecraft 1.7.2 <img class="pull-right" src="templates/<?php echo $_smarty_tpl->tpl_vars['NomeTema']->value;?>
/img/jogos/1.png" /></h1> 
					<h3>
			Eoncraft |=PT&amp;EN&amp;BR=|
			<!-- Botão editar Nome Servidor -->
			<button type="button" class="pull-right btn btn-warning btn-xl" data-toggle="modal" data-target="#editarNomeServidor">Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
			</h3>

			<!-- Modal editar Nome do Servidor -->
			<div class="modal fade" id="editarNomeServidor" tabindex="-1" role="dialog" aria-labelledby="editarNomeServidorLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="editarNomeServidorLabel">Edit Server name: Eoncraft |=PT&amp;EN&amp;BR=|</h4>
			      </div>
			      <form action="includes/api.php" method="GET">
			      <div class="modal-body">
			      		
			      			<input type="hidden" name="Id" value="1">
			      			<input type="hidden" name="Return" value="true">
			      			<input type="hidden" name="Action" value="MudaNomeServidor">
			      			<label>Server Name::</label>
			      			<input type="text" id="FullWidth" name="NomeServidor" value="Eoncraft |=PT&amp;EN&amp;BR=|">
			      		
			      </div>
			      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				        <button type="submit" class="btn btn-primary">Save</button>
			        </form>
			      </div>
			    </div>
			  </div>
			  </div>
			  <!-- /Modal Editar Nome do Servidor -->
  				<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">Commands and Manager</h3>
		  </div>
		  <div class="panel-body">
			<!-- Tabs -->
			<div id="content">
			    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
			        <li class="active"><a href="#gestao" data-toggle="tab"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Info/Management</a></li>
			        <li><a href="#logs" data-toggle="tab"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Logs</a></li>
			        <li><a href="#consola" data-toggle="tab"><span class="glyphicon glyphicon-console" aria-hidden="true"></span> Console</a></li>
			        <li><a href="#ftp" data-toggle="tab"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> FTP</a></li>
			    </ul>
		    	<div id="my-tab-content" class="tab-content">
		        	<div class="tab-pane active" id="gestao">
	        			<h2>Information and Management</h2>
		        		<div class="col-xs-2 col-sm-12 placeholder">
			        		<div class="panel panel-default">
			        			<div class="panel-heading">Informations</div>
			        			<div class="panel-body">
								  	 
								  	
								  														<p>
									        		IP / Port: <b>178.62.83.82:25565</b>
													<!-- Botão editar Porta -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarPorta">Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
									        		<label class="pull-right">&nbsp;:&nbsp;</label>
									        		<!-- Botão editar Porta Ip -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarIp">Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								        		</p>

								        		<!-- Modal editar Ip -->
												<div class="modal fade" id="editarIp" tabindex="-1" role="dialog" aria-labelledby="editarIpLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarIpLabel">Edit Server Ip: Eoncraft |=PT&amp;EN&amp;BR=|</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="1">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaIp">
												      		<label>IP:</label>
												      		<input type="text" id="FullWidth" name="Ip" value="178.62.83.82">
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													        <button type="submit" class="btn btn-primary">Save</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
												  <!-- /Modal Editar Ip -->

												  <!-- Modal editar Porta -->
												<div class="modal fade" id="editarPorta" tabindex="-1" role="dialog" aria-labelledby="editarPortaLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarPortaLabel">Edit Server Port: Eoncraft |=PT&amp;EN&amp;BR=|</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="1">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaPorta">
												      		<label>Port:</label>
												      		<input type="text" id="FullWidth" name="Porta" value="25565">
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													        <button type="submit" class="btn btn-primary">Save</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
												  <!-- /Modal Editar Porta -->
								        		<p>
									        		Query Port: <b>25565</b>
													<!-- Botão editar Porta Query -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarPortaQuery">Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								        		</p>

								        		<!-- Modal editar PortaQuery -->
												<div class="modal fade" id="editarPortaQuery" tabindex="-1" role="dialog" aria-labelledby="editarPortaQueryLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarPortaQueryLabel">Edit Server Port Query: Eoncraft |=PT&amp;EN&amp;BR=|</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="1">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaPortaQuery">
												      		<label>Query Port:</label>
												      		<input type="text" id="FullWidth" name="PortaQuery" value="25565">
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													        <button type="submit" class="btn btn-primary">Save</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
												  <!-- /Modal Editar PortaQuery -->

												<p>
													Motd: <b>Ola</b>
													<!-- Botão editar Motd -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarMotd">Edit <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
												</p>

												<!-- Modal editar Motd -->
												<div class="modal fade" id="editarMotd" tabindex="-1" role="dialog" aria-labelledby="editarMotdLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarMotdLabel">Edit Server Motd: Eoncraft |=PT&amp;EN&amp;BR=|</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="1">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaMotd">
												      		<label>Motd:</label>
												      		<input type="text" id="FullWidth" name="Motd" value="Ola">
												      		
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													        <button type="submit" class="btn btn-primary">Save</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
									  											  					        		</div>
			        		</div>
			        	</div>
			        		<div class="col-xs-2 col-sm-12 placeholder">
			        		<div class="panel panel-default">
			        			<div class="panel-heading">Manager</div>
			        			<div class="panel-body">
			        					
								  										  			 
							  				

									  			<div class="col-md-9 col-md-10">
									  				<!-- Botão Iniciar -->
									  				<form class="pull-left" action="includes/api.php" method="GET" id="Iniciar">
											  			<input type="hidden" name="Id" value="1">
											  			<input type="hidden" name="Action" value="Start">
											  			<input type="hidden" name="Return" value="True">
											  			<button type="submit" class="btn btn-success" value="Iniciar">
											  				<span style="font-size: 30px;" class="glyphicon glyphicon-play" aria-hidden="true"></span>
											  			</button>
											  			<span class="glyphicon-class">Start Server</span>
										  			</form>
								  					<!-- /Botão Iniciar -->
								  					<p>&nbsp;</p>
								  					<p>&nbsp;</p>
								  					<!-- Botão Reinstalar Servidor -->
									  				<form class="pull-left" action="includes/api.php" method="GET" id="Reinstalar">
											  			<input type="hidden" name="Id" value="1">
											  			<input type="hidden" name="Action" value="InstalarServidor">
											  			<input type="hidden" name="Return" value="True">
											  			<button type="button" class="btn btn-warning" value="Reinstalar" data-toggle="modal" data-target="#ReinstalarModal">
											  				<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
											  			</button>
											  			<span class="glyphicon-class">Reinstall Server</span>
										  			</form>
										  			<!-- /Botão Reinstalar Servidor -->
										  			<p>&nbsp;</p>
										  			<p>&nbsp;</p>
										  			<!-- Botão Eliminar Servidor -->
									  				<form class="pull-left" action="includes/api.php" method="GET" id="Eliminar">
											  			<input type="hidden" name="Id" value="1">
											  			<input type="hidden" name="Action" value="EliminarServidor">
											  			<input type="hidden" name="Return" value="True">
											  			<button type="button" class="btn btn-danger" value="EliminarServidor" data-toggle="modal" data-target="#EliminarModal">
											  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
											  			</button>
											  			<span class="glyphicon-class">Delete Server</span>
										  			</form>
										  			<!-- /Botão Eliminar Servidor -->
									  			</div>
							  					
								  																				  	</div>
							</div>
				  		</div>
				  	</div>
			        <div class="tab-pane" id="logs">
			            <h2>Logs</h2>
			            
			            			        		The server isnt online!
				        			        </div>
			        <div class="tab-pane" id="consola">
			            <h2>Consola</h2>
				  		
					  					        		<p>Servidor est&aacute; <font color="red"><b>Offline</b></font>. Atualize a p&aacute;gina quando o servidor estiver <font color="green"><b>Online</b></font>.</p>
				        			        </div>
			        <div class="tab-pane" id="ftp">
			            <h2>FTP - File Transfer Protocol</h2>
				  		
					  				  			<!-- FTP -->
			  			<iframe width="100%" src="includes/ftp/index.php?ftpserver=178.62.83.82&ftpserverport=21&username=1&language=en&skin=shinra&ftpmode=binary&passivemode=no&protocol=FTP&viewmode=list&sort=&sortorder=&state=login_small&state2=bookmark&go_to_state=browse&go_to_state2=main&directory=%2F18&entry="></iframe>
			  			<!-- / FTP -->
			  						        </div>
			    </div>
			</div> <!-- Content -->
		</div><!-- /Panel Body -->
	</div> <!-- /Panel -->


	<!-- Modal Confimar Reinstalar Servidor -->
	<div class="modal fade" id="ReinstalarModal" tabindex="-1" role="dialog" aria-labelledby="ReinstalarModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            Confirma&ccedil;&atilde;o de Reinstala&ccedil;&atilde;o!
	        </div>
	        <div class="modal-body">
	        	<h3>Are you sure that you want to reinstall this server?, Eoncraft |=PT&amp;EN&amp;BR=|?</h3>
	        </div>

	  <div class="modal-footer">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	            <a href="#" id="ConfirmarReinstalar" class="btn btn-danger danger"><br />
<b>Notice</b>:  Undefined index: botao_reinstalar in <b>/home/admin/web/pap.cyber-panel.org/public_html/templates_c/510d7fe730265eb6fbf82c0659537e93a494966d_0.file.servidor.tpl.cache.php</b> on line <b>563</b><br />
</a>
	        </div>
	    </div>
	</div>
	</div>
	<!-- /Modal Confirmar Reinstalar Servidor -->

	<!-- Modal Confimar Eliminar Servidor -->
	<div class="modal fade" id="EliminarModal" tabindex="-1" role="dialog" aria-labelledby="EliminarModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            Confirma&ccedil;&atilde;o de Reinstala&ccedil;&atilde;o!
	        </div>
	        <div class="modal-body">
	        	<h3>T&ecirc;m a certeza que permite eliminar o servidor e todo seu conteudo, Eoncraft |=PT&amp;EN&amp;BR=|?</h3>
	        </div>

	  <div class="modal-footer">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	            <a href="#" id="ConfirmarEliminar" class="btn btn-danger danger">Eliminar</a>
	        </div>
	    </div>
	</div>
	</div>
	<!-- /Modal Confirmar Eliminar Servidor -->
	<script type="text/javascript">
	$('#ConfirmarReinstalar').click(function(){
	    $('#Reinstalar').submit();
	});
	$('#ConfirmarEliminar').click(function(){
	    $('#Eliminar').submit();
	});
	</script>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>