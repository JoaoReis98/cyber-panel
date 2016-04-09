<?php
/*%%SmartyHeaderCode:11859093815630f7a7dca520_58502113%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c41a48067b77682dca625df0a8a07798efba3ace' => 
    array (
      0 => '/home/admin/web/pap.cyber-panel.org/public_html/templates/Classico/tipoServidor.tpl',
      1 => 1445971639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11859093815630f7a7dca520_58502113',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_5630ff4fa57333_03936238',
  'has_nocache_code' => true,
  'cache_lifetime' => 10,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5630ff4fa57333_03936238')) {
function content_5630ff4fa57333_03936238 ($_smarty_tpl) {

echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/topMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<style type="text/css">
  .glyphicon.glyphicon-cog {
    font-size: 15px;
  }
</style>

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1 class="page-header">Servers || Minecraft 1.7.2</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Server name</th>
                  <th>Server Type</th>
                  <th>IP : Port</th>
                  <th>Slots</th>
                  <th>Status</th>
	              <th class="pull-right">Panel</th>
                </tr>
              </thead>
              <tbody>
															<tr>
						  <td>1</td>
						  <td id="NomeServidor1">Eoncraft |=PT&amp;EN&amp;BR=| <img class="pull-right" src="templates/<?php echo $_smarty_tpl->tpl_vars['NomeTema']->value;?>
/img/jogos/1.png" /></td>
						  <td id="TipoServidor1">Minecraft 1.7.2</td>
					
              <td id="IpPorta1">178.62.83.82:25565</td>
						  <td><span id="Slots1">0</span> / <span id="MaxSlots1">8</td>
						  <td id="Status1">
						  							  		<font color='red'>Offline</font>
					  								  <td><a class="pull-right btn btn-default" href="servidor.php?Id=1"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
						</tr>
												<tr>
						  <td>19</td>
						  <td id="NomeServidor19">Servidor de Minecraft TETE <img class="pull-right" src="templates/<?php echo $_smarty_tpl->tpl_vars['NomeTema']->value;?>
/img/jogos/1.png" /></td>
						  <td id="TipoServidor19">Minecraft 1.7.2</td>
					
              <td id="IpPorta19">178.62.83.82:25570</td>
						  <td><span id="Slots19">0</span> / <span id="MaxSlots19">5</td>
						  <td id="Status19">
						  							  		<font color='red'>Offline</font>
					  								  <td><a class="pull-right btn btn-default" href="servidor.php?Id=19"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
						</tr>
												</tbody>
        			</table>
            	
        </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>