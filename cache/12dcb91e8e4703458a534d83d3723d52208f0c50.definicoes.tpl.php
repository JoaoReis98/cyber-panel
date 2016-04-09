<?php
/*%%SmartyHeaderCode:492796245630ee7a0da0b4_85928797%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12dcb91e8e4703458a534d83d3723d52208f0c50' => 
    array (
      0 => '/home/admin/web/pap.cyber-panel.org/public_html/templates/Classico/definicoes.tpl',
      1 => 1445882213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '492796245630ee7a0da0b4_85928797',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_563120b3e84944_55265555',
  'has_nocache_code' => true,
  'cache_lifetime' => 10,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563120b3e84944_55265555')) {
function content_563120b3e84944_55265555 ($_smarty_tpl) {

echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/topMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="panel panel-default">
	  	<div class="panel-heading">Settings</div>
	  		<div class="panel-body">
				<form class="ng-valid ng-dirty ng-valid-parse" role="form" method="POST">
					<div class="form-group">
						<label>Theme:</label>
						<select onchange="setTema(this); return false;" class="form-control ng-pristine ng-valid ng-touched" id="tema" name="IdTema">
							<option value="1">Classico</option>
                    			
                    																																																<option value="2">Estilo Metro</option>
																							</select>
					</div>
					<div class="form-group">
						<label>Language:</label>
						<select onchange="setLang(this); return false;" class="form-control ng-pristine ng-valid ng-touched" id="tema" name="IdTema">
							<option value="<br />
<b>Notice</b>:  Array to string conversion in <b>/home/admin/web/pap.cyber-panel.org/public_html/templates_c/12dcb91e8e4703458a534d83d3723d52208f0c50_0.file.definicoes.tpl.cache.php</b> on line <b>90</b><br />
Array">English</option>
                        																								<option value="Portugues">Portugues</option>
																																																						</select>
					</div>
					<input class="btn btn-primary" type="submit" id="guardar" name="Guardar" value="Save" />
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>