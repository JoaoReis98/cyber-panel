{include file="{$PastaTema}/includes/header.tpl"}
{include file="{$PastaTema}/includes/topMenu.tpl"}
{include file="{$PastaTema}/includes/sideMenu.tpl"}
<style type="text/css">
  .glyphicon.glyphicon-cog {
    font-size: 15px;
  }
</style>

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1 class="page-header">{$Lang['servidores']} || {$TipoServidor}</h1>
          <div class="table-responsive">
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
				{if $NumServidoresTipo > 0}
					{foreach $ServidoresTipo as $ServidorTipo}
						<tr>
						  <td>{$ServidorTipo['Id']}</td>
						  <td id="NomeServidor{$ServidorTipo['Id']}">{$ServidorTipo['NomeServidor']} <img class="pull-right" style="width: 41px; height: 34px;" src="templates/{$NomeTema}/img/jogos/{$ServidorTipo['TipoServidor']}.png" /></td>
						  <td id="TipoServidor{$ServidorTipo['Id']}">{$ServidorTipo['NomeTipoServidor']}</td>
					
              <td id="IpPorta{$ServidorTipo['Id']}">{$ServidorTipo['Ip']}:{$ServidorTipo['Porta']}</td>
						  <td><span id="Slots{$ServidorTipo['Id']}">0</span> / <span id="MaxSlots{$ServidorTipo['Id']}">{$ServidorTipo['MaxSlots']}</td>
						  <td id="Status{$ServidorTipo['Id']}">
						  	{if $ServidorTipo['Status'] == 1}
						  		<font color='green'>{$Lang['online']}</font>
					  		{else}
						  		<font color='red'>{$Lang['offline']}</font>
					  		{/if}
						  <td><a class="pull-right btn btn-default" href="servidor.php?Id={$ServidorTipo['Id']}"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
						</tr>
						{/foreach}
						</tbody>
        			</table>
            	{else}
  					</tbody>
           	 	</table>

					<center><h3>{$Lang['sem_resultadoPesquisa']} [ {$TipoServidor} ]</h3></center>
	            
				{/if}

        </div>
	</div>
{include file="{$PastaTema}/includes/footer.tpl"}