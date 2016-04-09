<?php
/*%%SmartyHeaderCode:21353165005630f3580d1569_70552582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e1ac24f7305f120ea82ef172bb66756f550ff6a' => 
    array (
      0 => '/home/admin/web/pap.cyber-panel.org/public_html/templates/Classico/profile.tpl',
      1 => 1445891958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21353165005630f3580d1569_70552582',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_56311bf07f9b20_68829961',
  'has_nocache_code' => true,
  'cache_lifetime' => 10,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56311bf07f9b20_68829961')) {
function content_56311bf07f9b20_68829961 ($_smarty_tpl) {

echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/topMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<style type="text/css">
	.FullWidth {
	    width: calc(100% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(100% - 12px); /*For safari 6.0*/
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
	<div class="panel panel-default">
	  	<div class="panel-heading">Hello, <b>demo demo</b></div>
	  		<div class="panel-body">
	    	<h3>Informations</h3>
	    	<p>Email: demo@demo.com</p>
	    	<p><button type="button" class="pull-right btn btn-warning btn-xl" data-toggle="modal" data-target="#reiniciarPassword">Reset Password <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></button></p>
	      	<br />
			<br />
	    	<p>
	    		<span class="pull-left">Servers Owned: 0</span><span class="pull-right">Max. Permitted Servers: 1</span>
	    		<br />
	    			
	    				    				    					    	<div class="progress">
				  	<div class="progress-bar active progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="$Utilizador['PercentUsado']}" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
			    		0%
				  	</div>
				</div>
			</p>
			<!-- Modal Reniciar Password -->
			<div class="modal fade" id="reiniciarPassword" tabindex="-1" role="dialog" aria-labelledby="reiniciarPasswordLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="reiniciarPasswordLabel">Reseting password of: demo demo</h4>
			      </div>
				      <form action="" method="POST">
				      <div class="modal-body">
			      			<input type="hidden" name="Action" value="MudarPassword">
			      			<label>Actual Password:</label><br />
			      			<input type="password" class="FullWidth" id="PasswordAtual" name="PasswordAtual" placeholder="Password Atual:"><br />
			      			<label>New Password:</label><br />
			      			<input type="password" class="FullWidth" id="NovaPassword" name="NovaPassword" onkeyup="setPw(this); verificaPasswords(); return false;" placeholder="Nova Password:"><br />
			      			<label>Repeat the new Password:</label><br />
			      			<input type="password" class="FullWidth" id="RepNovaPassword" name="RepNovaPassword" onkeyup="setRepPw(this); verificaPasswords(); return false;" placeholder="Repita a Nova Password:"><br />
				      </div>
				      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        <button type="submit" id="AlterarPassword" class="btn btn-primary">Save</button>
				        </form>
				      </div>
			    </div>
			  </div>
		  	</div>
		  	<!-- /Modal Reiniciar Password -->
	  	</div>
	</div>
</div>


</div> <!-- / Offset do corpo -->
<script type="text/javascript">
	window.setTimeout(function() {
	    $(".alert").fadeTo(500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 3000);
</script>

<script type="text/javascript">
	var pw;
	var repPw;
	$("#AlterarPassword").addClass("disabled");
	function setRepPw(a)
	{
		console.log("RepPw = "+a.value);
		repPw = a.value;
	}

	function setPw(a)
	{
		pw = a.value;
	}

	function verificaPasswords()
	{
		if(pw == repPw)
		{
			console.log("Okay");
			$("#RepNovaPassword").removeClass('Erro').addClass('Sucesso');
			$("#NovaPassword").removeClass('Erro').addClass('Sucesso');
			$("#AlterarPassword").removeClass("disabled");
		}
		else
		{
			console.log("erro");
			$("#RepNovaPassword").removeClass('Sucesso').addClass('Erro');
			$("#NovaPassword").removeClass('Sucesso').addClass('Erro');
			$("#AlterarPassword").removeClass("disabled").addClass("disabled");
		}
	}
</script>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PastaTema']->value)."/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>