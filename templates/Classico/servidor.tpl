{include file="{$PastaTema}/includes/header.tpl"}
{include file="{$PastaTema}/includes/topMenu.tpl"}
{include file="{$PastaTema}/includes/sideMenu.tpl"}

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
		<h1 class="page-header">{$Lang['painel']} || {$Servidor['NomeTipoServidor']} <img class="pull-right" src="templates/{$NomeTema}/img/jogos/{$Servidor['TipoServidor']}.png" /></h1> 
		{if $Servidor['Status']}
		<h3>{$Servidor['NomeServidor']}</h3>
		{else}
			<h3>
			{$Servidor['NomeServidor']}
			<!-- Botão editar Nome Servidor -->
			<button type="button" class="pull-right btn btn-warning btn-xl" data-toggle="modal" data-target="#editarNomeServidor">{$Lang['botao_editar']} <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
			</h3>

			<!-- Modal editar Nome do Servidor -->
			<div class="modal fade" id="editarNomeServidor" tabindex="-1" role="dialog" aria-labelledby="editarNomeServidorLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="editarNomeServidorLabel">{$Lang['label_editarNomeServidor']}: {$Servidor['NomeServidor']}</h4>
			      </div>
			      <form action="includes/api.php" method="GET">
			      <div class="modal-body">
			      		
			      			<input type="hidden" name="Id" value="{$Servidor['Id']}">
			      			<input type="hidden" name="Return" value="true">
			      			<input type="hidden" name="Action" value="MudaNomeServidor">
			      			<label>{$Lang['label_nomeDoServidor']}:</label>
			      			<input type="text" id="FullWidth" name="NomeServidor" value="{$Servidor['NomeServidor']}">
			      		
			      </div>
			      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
				        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
			        </form>
			      </div>
			    </div>
			  </div>
			  </div>
			  <!-- /Modal Editar Nome do Servidor -->
  		{/if}
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h3 class="panel-title">{$Lang['titulo_comandosGestao']}</h3>
		  </div>
		  <div class="panel-body">
			<!-- Tabs -->
			<div id="content">
			    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
			        <li class="active"><a href="#gestao" data-toggle="tab"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> {$Lang['info/Gestao']}</a></li>
			        <li><a href="#logs" data-toggle="tab"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> {$Lang['logs']}</a></li>
			        <li><a href="#consola" data-toggle="tab"><span class="glyphicon glyphicon-console" aria-hidden="true"></span> {$Lang['consola']}</a></li>
			        <li><a href="#ftp" data-toggle="tab"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> {$Lang['ftp']}</a></li>
			    </ul>
		    	<div id="my-tab-content" class="tab-content">
		        	<div class="tab-pane active" id="gestao">
	        			<h2>{$Lang['informacaoEGestao']}</h2>
		        		<div class="col-xs-2 col-sm-12 placeholder">
			        		<div class="panel panel-default">
			        			<div class="panel-heading">{$Lang['informacoes']}</div>
			        			<div class="panel-body">
								  	{if $Servidor['Instalado']} 
								  	{* Se servidor estiver Online mostrar informaçao adicional senao amostrar botao de iniciar o servidor. *}
								  		{if $Servidor['Status']} 
								  		{* Fazer update aos Status *}

						        		<!-- Informação -->
						        		<p>{$Lang['ip']} / {$Lang['porta']}: <b>{$Servidor['Ip']}:{$Servidor['Porta']}</b></p>
						        		<p>{$Lang['portaQuery']}: <b>{$Servidor['PortaQuery']}</b></p>
									  	<p>{$Lang['mapa']}: <b><span id="Mapa">{$Servidor['Mapa']}</span></b></p>
									  	<p>{$Lang['motd']}: <b>{$Servidor['Motd']}</b></p>
									  	<p>{$Lang['slots']}: <b><span id="Slots">{$Servidor['Slots']}</span> / <span id="MaxSlots">{$Servidor['MaxSlots']}</span></b></p>
									  	<p>{$Lang['jogadores']}: </p>
									  	<b>
									  		<div id="Jogadores">
										  		
									  		</div>
									  	</b>
										{else}
												<p>
									        		{$Lang['ip']} / {$Lang['porta']}: <b>{$Servidor['Ip']}:{$Servidor['Porta']}</b>
													<!-- Botão editar Porta -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarPorta">{$Lang['botao_editar']} <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
									        		<label class="pull-right">&nbsp;:&nbsp;</label>
									        		<!-- Botão editar Porta Ip -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarIp">{$Lang['botao_editar']} <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								        		</p>

								        		<!-- Modal editar Ip -->
												<div class="modal fade" id="editarIp" tabindex="-1" role="dialog" aria-labelledby="editarIpLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarIpLabel">{$Lang['label_editarIpServidor']}: {$Servidor['NomeServidor']}</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="{$Servidor['Id']}">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaIp">
												      		<label>{$Lang['ip']}:</label>
												      		<input type="text" id="FullWidth" name="Ip" value="{$Servidor['Ip']}">
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
													        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
												  <!-- /Modal Editar Ip -->
												  
								        		<!-- Modal editar Mapa atual -->
												<div class="modal fade" id="editarMapaInicial" tabindex="-1" role="dialog" aria-labelledby="editarMapaInicialLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarMapaInicialLabel">Editar Mapa Inicial</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="{$Servidor['Id']}">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaMapaInicial">
												      		<label>Mapa Inicial:</label>
												      		<input type="text" id="FullWidth" name="MapaInicial" value="{$Servidor['MapaDb']}">
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
													        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
												  <!-- /Modal editar Mapa atual -->
												<p>
									        		Mapa Inicial: <b>{$Servidor['MapaDb']}</b>
													<!-- Botão editar Mapa atual -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarMapaInicial">{$Lang['botao_editar']} <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								        		</p>
												
												<!-- Modal editar MaxSlots -->
												<div class="modal fade" id="editarMaxSlots" tabindex="-1" role="dialog" aria-labelledby="editarMaxSlotsLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarMaxSlotsLabel">Editar Max Slots</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="{$Servidor['Id']}">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaMaxSlots">
												      		<label>MaxSlots:</label>
												      		<input type="number" id="FullWidth" name="MaxSlots" value="{$Servidor['MaxSlotsDb']}">
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
													        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
												  <!-- /Modal editar Max Slots -->
												<p>
									        		Max Slots: <b>{$Servidor['MaxSlotsDb']}</b>
													<!-- Botão editar MaxSlots -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarMaxSlots">{$Lang['botao_editar']} <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								        		</p>
												
												  <!-- Modal editar Porta -->
												<div class="modal fade" id="editarPorta" tabindex="-1" role="dialog" aria-labelledby="editarPortaLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarPortaLabel">{$Lang['label_editarPortaServidor']}: {$Servidor['NomeServidor']}</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="{$Servidor['Id']}">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaPorta">
												      		<label>{$Lang['porta']}:</label>
												      		<input type="text" id="FullWidth" name="Porta" value="{$Servidor['Porta']}">
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
													        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
												  <!-- /Modal Editar Porta -->
								        		<p>
									        		{$Lang['portaQuery']}: <b>{$Servidor['PortaQuery']}</b>
													<!-- Botão editar Porta Query -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarPortaQuery">{$Lang['botao_editar']} <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
								        		</p>

								        		<!-- Modal editar PortaQuery -->
												<div class="modal fade" id="editarPortaQuery" tabindex="-1" role="dialog" aria-labelledby="editarPortaQueryLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarPortaQueryLabel">{$Lang['label_editarPortaQueryServidor']}: {$Servidor['NomeServidor']}</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="{$Servidor['Id']}">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaPortaQuery">
												      		<label>{$Lang['portaQuery']}:</label>
												      		<input type="text" id="FullWidth" name="PortaQuery" value="{$Servidor['PortaQuery']}">
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
													        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
												  <!-- /Modal Editar PortaQuery -->

												<p>
													Motd: <b>{$Servidor['Motd']}</b>
													<!-- Botão editar Motd -->
													<button type="button" class="pull-right btn btn-warning btn-xs" data-toggle="modal" data-target="#editarMotd">{$Lang['botao_editar']} <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
												</p>

												<!-- Modal editar Motd -->
												<div class="modal fade" id="editarMotd" tabindex="-1" role="dialog" aria-labelledby="editarMotdLabel">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												        <h4 class="modal-title" id="editarMotdLabel">{$Lang['label_editarMotdServidor']}: {$Servidor['NomeServidor']}</h4>
												      </div>
												      <form action="includes/api.php" method="GET">
												      <div class="modal-body">
												      		
												      		<input type="hidden" name="Id" value="{$Servidor['Id']}">
												      		<input type="hidden" name="Return" value="true">
												      		<input type="hidden" name="Action" value="MudaMotd">
												      		<label>{$Lang['motd']}:</label>
												      		<input type="text" id="FullWidth" name="Motd" value="{$Servidor['Motd']}">
												      		
												      </div>
												      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
													        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
												        </form>
												      </div>
												    </div>
												  </div>
												  </div>
									  		{/if}
									  	{/if}
				        		</div>
			        		</div>
			        	</div>
			        		<div class="col-xs-2 col-sm-12 placeholder">
			        		<div class="panel panel-default">
			        			<div class="panel-heading">{$Lang['gestao']}</div>
			        			<div class="panel-body">
			        					{*
			        						Se servidor estiver Online mostrar informaçao adicional senao amostrar botao de iniciar o servidor.
			        					*}
								  		{if $Servidor['Instalado']}
								  			{if $Servidor['Status'] == 1}
											  	<br>

								  				<!-- Botão Parar -->
								  				<form class="pull-left" action="includes/api.php" method="GET" id="Parar">
										  			<input type="hidden" name="Id" value="{$Servidor['Id']}">
										  			<input type="hidden" name="Action" value="Stop">
										  			<input type="hidden" name="Return" value="True">
										  			<button type="submit" class="btn btn-danger" value="Parar">
										  				<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
										  			</button>
										  			<span class="glyphicon-class">{$Lang['botao_pararServidor']}</span>
									  			</form>
							  					<!-- /Botão Parar -->
							  					<p>&nbsp;</p>
							  					<p>&nbsp;</p>
							  					<!-- Botão Reinstalar Servidor -->
								  				<form class="pull-left" action="includes/api.php" method="GET" id="Reinstalar">
										  			<input type="hidden" name="Id" value="{$Servidor['Id']}">
										  			<input type="hidden" name="Action" value="InstalarServidor">
										  			<input type="hidden" name="Return" value="True">
										  			<button type="button" class="btn btn-warning" value="Reinstalar" data-toggle="modal" data-target="#ReinstalarModal">
										  				<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
										  			</button>
										  			<span class="glyphicon-class">{$Lang['botao_reinstalarServidor']}</span>
									  			</form>
									  			<!-- /Botão Reinstalar Servidor -->
									  			<p>&nbsp;</p>
									  			<p>&nbsp;</p>
									  			<!-- Botão Eliminar Servidor -->
								  				<form class="pull-left" action="includes/api.php" method="GET" id="Eliminar">
										  			<input type="hidden" name="Id" value="{$Servidor['Id']}">
										  			<input type="hidden" name="Action" value="EliminarServidor">
										  			<input type="hidden" name="Return" value="True">
										  			<button type="button" class="btn btn-danger" value="EliminarServidor" data-toggle="modal" data-target="#EliminarModal">
										  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
										  			</button>
										  			<span class="glyphicon-class">{$Lang['botao_eliminarServidor']}</span>
									  			</form>
									  			<!-- /Botão Eliminar Servidor -->

							  					<p>&nbsp;</p>
							  					<p>&nbsp;</p>
							  				{elseif $Servidor['Status'] == 0} 
							  				{* Se nao estiver Ligado aparecer botao de ligar *}

									  			<div class="col-md-9 col-md-10">
									  				<!-- Botão Iniciar -->
									  				<form class="pull-left" action="includes/api.php" method="GET" id="Iniciar">
											  			<input type="hidden" name="Id" value="{$Servidor['Id']}">
											  			<input type="hidden" name="Action" value="Start">
											  			<input type="hidden" name="Return" value="True">
											  			<button type="submit" class="btn btn-success" value="Iniciar">
											  				<span style="font-size: 30px;" class="glyphicon glyphicon-play" aria-hidden="true"></span>
											  			</button>
											  			<span class="glyphicon-class">{$Lang['botao_iniciarServidor']}</span>
										  			</form>
								  					<!-- /Botão Iniciar -->
								  					<p>&nbsp;</p>
								  					<p>&nbsp;</p>
								  					<!-- Botão Reinstalar Servidor -->
									  				<form class="pull-left" action="includes/api.php" method="GET" id="Reinstalar">
											  			<input type="hidden" name="Id" value="{$Servidor['Id']}">
											  			<input type="hidden" name="Action" value="InstalarServidor">
											  			<input type="hidden" name="Return" value="True">
											  			<button type="button" class="btn btn-warning" value="Reinstalar" data-toggle="modal" data-target="#ReinstalarModal">
											  				<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
											  			</button>
											  			<span class="glyphicon-class">{$Lang['botao_reinstalarServidor']}</span>
										  			</form>
										  			<!-- /Botão Reinstalar Servidor -->
										  			<p>&nbsp;</p>
										  			<p>&nbsp;</p>
										  			<!-- Botão Eliminar Servidor -->
									  				<form class="pull-left" action="includes/api.php" method="GET" id="Eliminar">
											  			<input type="hidden" name="Id" value="{$Servidor['Id']}">
											  			<input type="hidden" name="Action" value="EliminarServidor">
											  			<input type="hidden" name="Return" value="True">
											  			<button type="button" class="btn btn-danger" value="EliminarServidor" data-toggle="modal" data-target="#EliminarModal">
											  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
											  			</button>
											  			<span class="glyphicon-class">{$Lang['botao_eliminarServidor']}</span>
										  			</form>
										  			<!-- /Botão Eliminar Servidor -->
									  			</div>
							  					
								  			{elseif $Servidor['Status'] == 2} 
									  			<center>{$Lang['a_instalar']}</center>
									  			<div class="progress">
												  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
												    <span class="sr-only">{$Lang['a_instalarServidor']}</span>
												  </div>
												</div>
												<pre>
												<div id="ultimas2LinhasLogs" style="background-color: black; color: white;">
													<p>{$Lang['a_carregarStatus']}</p>
												</div>
												</pre>
											{/if}
										{else} {* Se não estiver Instalado aparecer botao de instalação *}
									  		<h3>{$Lang['servidor']} "{$Servidor['NomeServidor']}" {$Lang['alerta_nao_esta_instalado']}.</h3>
									  		<form action="includes/api.php" method="GET">
									  			<input type="hidden" name="Id" value="{$Servidor['Id']}">
									  			<input type="hidden" name="Action" value="InstalarServidor">
									  			<input type="hidden" name="Return" value="True">
									  			<input type="submit" class="btn btn-warning" value="Instalar">
									  		</form>
										{/if}
							  	</div>
							</div>
				  		</div>
				  	</div>
			        <div class="tab-pane" id="logs">
			            <h2>Logs</h2>
			            {*
							Se servidor estiver Online mostrar informaçao adicional senao amostrar botao de iniciar o servidor.
			            *}
			            {if $Servidor['Status']}
			  			<!-- Logs -->
			  			<samp>
			            <div id="Logs" style="background-color: black; color: white;">
			            	<p>{$Lang['a_carregarLogs']}</p>
			            </div>
			            </samp>
			            <!-- /Logs -->
			            {else}
			        		{$Lang['alerta_naoEstaLigado']}
				        {/if}
			        </div>
			        <div class="tab-pane" id="consola">
			            <h2>Consola</h2>
				  		{*
				  			Se servidor estiver Online mostrar informaçao adicional senao amostrar botao de iniciar o servidor.
				  		*}
					  	{if $Servidor['Status']}
			  			<!-- Consola -->
		           		<input type="text" witdh="100%" id="comando" name="comando" placeholder="{$Lang['input_insiraComando']}" /><br />
		           		<button type="button" class="btn btn-primary" onclick="executa();">{$Lang['botao_executar']}</button>
		           		<div id="StatusComando">
		           			
		           		</div>
		           		<!-- /Consola -->
		           		{else}
				        		{$Lang['alerta_naoEstaLigado']}
				        {/if}
			        </div>
			        <div class="tab-pane" id="ftp">
			            <h2>FTP - File Transfer Protocol</h2>
				  		{*
				  			Se servidor estiver Online mostrar informaçao adicional senao amostrar botao de iniciar o servidor.
				  		*}
					  	{if $Servidor['Instalado']}
						<b>{$Lang['ip']}:</b> <span id="ftp_ip">{$Servidor['Ip']}</span><br />
						<b>{$Lang['label_nome']}</b> <span id="ftp_utilizador">{$Servidor['FTP_User']}</span><br />
						<b>{$Lang['label_password']}</b> <span id="ftp_utilizador">{$Servidor['FTP_Password']}</span><br />
			  			<!-- FTP -->
			  			<!-- <iframe width="100%" height="600px" src="includes/ftp/index.php?ftpserver={$Servidor['Ip']}&ftpserverport=21&username=cyberpanelftp&password_encrypted=6B8D67180F2071B7&language=pt&skin=shinra&ftpmode=binary&passivemode=no&protocol=FTP&viewmode=list&sort=&sortorder=&state=browse&state2=main&directory=%2F{$Servidor['Id']}&entry="></iframe> -->
			  				<!-- <h2>Net2FTP</h2>
							<div>
								<form id="LoginForm1" action="/includes/ftp/index.php" method="post" onsubmit="return CheckInput(this);">
									<fieldset>
										<div>
												<input type="hidden" name="ftpserver" value="{$Servidor['Ip']}" class="form-poshytip" title="" />
										</div>
										<div>
											<label>{$Lang['label_nome']}</label>
											<input type="text" name="username" value="{$Servidor['FTP_User']}" class="form-poshytip" title="Enter your username" />
										</div>
										<div>
											<label>{$Lang['label_password']}</label>
											<input type="password" name="password" value="{$Servidor['FTP_Password']}" class="form-poshytip" title="Enter your password" />
										</div>
										<input type="submit" id="LoginButton1" name="Login" value="Login" alt="Login" />
									</fieldset>
									<input type="hidden" name="state"     value="browse" />
									<input type="hidden" name="state2"    value="main" />
								</form>
							</div> -->
						<iframe width="100%" height="600px" src="contaFTP.php?ip={$Servidor['Ip']}&user={$Servidor['FTP_User']}&pw={$Servidor['FTP_Password']}"></iframe> 
			  			<!-- / FTP -->
			  			{else}
				        		{$Lang['alerta_naoEstaInstalado']}
				        {/if}
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
	            {$Lang['alerta_confirmaReinstalacao']}
	        </div>
	        <div class="modal-body">
	        	<h3>{$Lang['alerta_confirmaReinstalacao']}, {$Servidor['NomeServidor']}?</h3>
	        </div>

	  <div class="modal-footer">
	            <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
	            <a href="#" id="ConfirmarReinstalar" class="btn btn-danger danger">{$Lang['botao_reinstalar']}</a>
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
	            {$Lang['alerta_confirmaEliminacao']}
	        </div>
	        <div class="modal-body">
	        	<h3>{$Lang['alerta_confirmaEliminacao']}, {$Servidor['NomeServidor']}?</h3>
	        </div>

	  <div class="modal-footer">
	            <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
	            <a href="#" id="ConfirmarEliminar" class="btn btn-danger danger">{$Lang['botao_eliminar']}</a>
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
{include file="{$PastaTema}/includes/footer.tpl"}