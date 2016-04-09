{include file="{$PastaTema}/includes/header.tpl"}
{include file="{$PastaTema}/includes/topMenu.tpl"}
{include file="{$PastaTema}/includes/sideMenu.tpl"}
<style type="text/css">
  .glyphicon.glyphicon-cog {
    font-size: 15px;
  }
</style>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                {if $Utilizador['OldUser'] == true}
                <div class="pull-right">
                    <p>{$Lang['alerta_logadoComoUtilizador']} <b>[{$Utilizador['OldNome']} {$Utilizador['OldApelido']}]</b></p>
                    <a href="index.php?Option=Login">{$Lang['botao_voltarContaAnterior']}</a>
                </div>
                {/if}
        <h1 class="page-header">{$Lang['titulo_painelPrincipal']}</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="">
              <h4>{$Lang['detalhe_servidoresOnline']} </h4>
              <span class="text-muted" id="ServidoresOnline">{$Infos['NumServidoresOnline']}</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="">
              <h4>{$Lang['detalhe_servidoresOffline']}</h4>
              <span class="text-muted" id="ServidoresOffline">{$Infos['NumServidoresOffline']}</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="">
              <h4>{$Lang['detalhe_slotsUsados']}</h4>
              <span class="text-muted" id="SlotsUsadosTotal">{$Infos['NumSlotsOcupados']}</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="">
              <h4></h4>
              <span class="text-muted"></span>
            </div>
          </div>
          <!-- Tabela com todos servidores -->
          <h2 class="sub-header">{$Lang['servidores']}</h2>
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
				{foreach $Servidores as $Servidor}
						<tr>
						  <td>{$Servidor['Id']}</td>
						  <td id="NomeServidor{$Servidor['Id']}">{$Servidor['NomeServidor']} <img class="pull-right" style="width: 41px; height: 34px;" src="templates/{$NomeTema}/img/jogos/{$Servidor['TipoServidor']}.png" /></td>
						  <td id="TipoServidor{$Servidor['Id']}">{$Servidor['NomeTipoServidor']}</td>
                          <td id="IpPorta{$Servidor['Id']}">{$Servidor['Ip']}:{$Servidor['Porta']}</td>
						  <td><span id="Slots{$Servidor['Id']}">0</span> / <span id="MaxSlots{$Servidor['Id']}">{$Servidor['MaxSlots']}</td>
						  <td id="Status{$Servidor['Id']}">
                          {if $Servidor['Status'] == 1}
                            <font color='green'>{$Lang['online']}</font>
                          {else}
                            <font color='red'>{$Lang['offline']}</font>
                          {/if}
                          </td>
						  <td><a class="pull-right btn btn-default" href="servidor.php?Id={$Servidor['Id']}"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
						</tr>
                    {/foreach}
              </tbody>
            </table>
        </div>
{include file="{$PastaTema}/includes/footer.tpl"}