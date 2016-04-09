{include file="{$PastaTema}/includes/header.tpl"}
{include file="{$PastaTema}/includes/topMenu.tpl"}
{include file="{$PastaTema}/includes/sideMenu.tpl"}
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="table-responsive">
		{if $NumServidoresProcura > 0}
			<center><h3>{$Lang['resultadoPesquisa']} [ {$Query} ]</h3></center>
	        <table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>#</th>
	                  <th>{$Lang['nome_servidor']}</th>
	                  <th>{$Lang['tipo_servidor']}</th>
	                  <th>{$Lang['ip']} : {$Lang['porta']}</th>
	                  <th>{$Lang['slots']}</th>
	                  <th>{$Lang['status']}</th>
		              <th class="pull-right">{$Lang['painel']}</th>
	                </tr>
	              </thead>
	              <tbody>
					{foreach $ServidoresProcura as $ServidorProc}
						<tr>
						  <td>{$ServidorProc['Id']}</td>
						  <td id="NomeServidor{$ServidorProc['Id']}">{$ServidorProc['NomeServidor']} <img class="pull-right" style="width: 41px; height: 34px;" src="templates/{$NomeTema}/img/jogos/{$ServidorProc['TipoServidor']}.png" /></td>
						  <td id="TipoServidor{$ServidorProc['Id']}">{$ServidorProc['NomeTipoServidor']}</td>
					
              <td id="IpPorta{$ServidorProc['Id']}">{$ServidorProc['Ip']}:{$ServidorProc['Porta']}</td>
						  <td><span id="Slots{$ServidorProc['Id']}">0</span> / <span id="MaxSlots{$ServidorProc['Id']}">{$ServidorProc['MaxSlots']}</td>
						  <td id="Status{$ServidorProc['Id']}">
						  	{if $ServidorProc['Status'] == 1}
						  		<font color='green'>Online</font>
					  		{else}
						  		<font color='red'>Offline</font>
					  		{/if}
						  <td><a class="pull-right btn btn-default" href="servidor.php?Id={$ServidorProc['Id']}"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
						</tr>
						{/foreach}
						</tbody>
        			</table>
            	
  					</tbody>
           	 	</table>
           	 	{else}
					<center><h3>{$Lang['sem_resultadoPesquisa']} [ {$Query} ]</h3></center>
	            
				{/if}

    </div>
</div>
{include file="{$PastaTema}/includes/footer.tpl"}