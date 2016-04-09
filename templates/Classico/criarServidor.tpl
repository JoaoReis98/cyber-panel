{include file="{$PastaTema}/includes/header.tpl"}
{include file="{$PastaTema}/includes/topMenu.tpl"}
{include file="{$PastaTema}/includes/sideMenu.tpl"}
<style type="text/css">
	.FullWidth {
	    width: calc(100% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(100% - 12px); /*For safari 6.0*/
	}
	#Ip {
	    width: calc(60% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(60% - 12px); /*For safari 6.0*/
	}
	#Porta {
	    width: calc(20% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(20% - 12px); /*For safari 6.0*/
	}

	#PortaQuery {
	    width: calc(20% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(20% - 12px); /*For safari 6.0*/
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
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">{$Lang['titulo_criarServidor']}</h1>
		
		
	<div class="panel panel-default">
	  	<div class="panel-heading">
			<h3 class="panel-title">{$Lang['subtitulo_opcoesInstalcao']}</h3>
	  	</div>
	  	<div class="panel-body">
  			 	{if $Utilizador['MaxServidores'] <= $Utilizador['NumServidores']}
	  				<h3><font color="red">{$Lang['alerta_esgotasteServidores']}</font>
	  			{else}
		  			{if $NumTiposServidores > 0}
						<form action="includes/api.php" method="GET">

							<input type="hidden" name="Action" value="CriarServidor">
							<input type="text" class="FullWidth" name="NomeServidor" placeholder="{$Lang['input_nomeDoServidor']}" required/><br /><br />
							<input type="text" id="Ip" name="Ip" value="{$IpServidor}" placeholder="{$Lang['input_ipDoServidor']}" required /> <label>:</label>
							<input type="text" id="Porta" name="Porta" onchange="verificaPorta(this, 1);" placeholder="{$Lang['input_portaDoServidor']}" required/> <label>:</label>
							<input type="text" id="PortaQuery" name="PortaQuery" onchange="verificaPorta(this, 2);" placeholder="{$Lang['input_portaQueryDoServidor']}" required/><br /><br />
							
							<input type="text" class="FullWidth" name="Motd" placeholder="{$Lang['input_motd']}" required/><br /><br />
							<input type="text" class="FullWidth" name="Mapa" placeholder="{$Lang['input_mapa']}" required/><br /><br />
							
							<label>{$Lang['label_modoLan']}</label><br />
							<select name="OnlineMode" required>
								<option value="0">{$Lang['nao']}</option>
								<option value="1">{$Lang['sim']}</option>
							</select>
							<input type="number" name="MaxSlots" class="pull-right" value="1" min="1" max="32" required>
							<label class="pull-right">{$Lang['label_slots_1']} 1{$Lang['label_slots_2']} 32{$Lang['label_slots_3']}&nbsp;&nbsp;&nbsp;</label>
							<br /><br />

							<label>{$Lang['label_tipoServidor']}</label><br />
							<select name="TipoServidor" required>
							<option value="">{$Lang['select_default']}</option>
							{foreach $TiposServidores as $TipoServidor}
									<option value="{$TipoServidor['Id']}">{$TipoServidor['Nome']}</option>
							{/foreach}
							</select>
							<br />
							<br />
							<input type="submit" class="btn btn-success" id="submitCriar" value="{$Lang['botao_criarServidor']}">
						</form>
					{else}
						<h2>N&atilde;o existem servidores pre-configurados!</h2>
					{/if}
			{/if}
	  	</div>
	</div>
</div>

{include file="{$PastaTema}/includes/footer.tpl"}