<?php
/*%%SmartyHeaderCode:15077401105630ee63f40908_19069393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afdff08b492555d9b0b9f173fc3f039c209c4009' => 
    array (
      0 => '/home/admin/web/pap.cyber-panel.org/public_html/templates/Classico/index.tpl',
      1 => 1445973420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15077401105630ee63f40908_19069393',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_563123359df923_14807947',
  'has_nocache_code' => true,
  'cache_lifetime' => 10,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563123359df923_14807947')) {
function content_563123359df923_14807947 ($_smarty_tpl) {

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
                        <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="">
              <h4>Online Servers </h4>
              <span class="text-muted" id="ServidoresOnline">0</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="">
              <h4>Offline Servers</h4>
              <span class="text-muted" id="ServidoresOffline">1</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="">
              <h4>Used Slots</h4>
              <span class="text-muted" id="SlotsUsadosTotal">0</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="">
              <h4></h4>
              <span class="text-muted"></span>
            </div>
          </div>
          <!-- Tabela com todos servidores -->
          <h2 class="sub-header">Servers</h2>
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
						  <td>15</td>
						  <td id="NomeServidor15">Minecrafitas <img class="pull-right" src="templates/<?php echo $_smarty_tpl->tpl_vars['NomeTema']->value;?>
/img/jogos/1.png" /></td>
						  <td id="TipoServidor15">Minecraft 1.7.2</td>
                          <td id="IpPorta15">178.62.83.82:25569</td>
						  <td><span id="Slots15">0</span> / <span id="MaxSlots15">5</td>
						  <td id="Status15">
                                                      <font color='red'>Offline</font>
                                                    </td>
						  <td><a class="pull-right btn btn-default" href="servidor.php?Id=15"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
						</tr>
                                  </tbody>
            </table>
        </div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>