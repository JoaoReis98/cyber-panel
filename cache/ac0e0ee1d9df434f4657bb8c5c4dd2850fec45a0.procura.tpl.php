<?php
/*%%SmartyHeaderCode:18173477105681c370afd7b8_17790838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac0e0ee1d9df434f4657bb8c5c4dd2850fec45a0' => 
    array (
      0 => '/home/admin/web/pap.cyber-panel.org/public_html/templates/Classico/procura.tpl',
      1 => 1450965954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18173477105681c370afd7b8_17790838',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_5683fb3c647995_03039397',
  'has_nocache_code' => true,
  'cache_lifetime' => 10,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5683fb3c647995_03039397')) {
function content_5683fb3c647995_03039397 ($_smarty_tpl) {

echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/topMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="table-responsive">
							<center><h3>No search results... [ j ]</h3></center>
	            
				
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>