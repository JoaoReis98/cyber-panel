{include file="{$PastaTema}/includes/header.tpl"}
{include file="{$PastaTema}/includes/topMenu.tpl"}
{include file="{$PastaTema}/includes/sideMenu.tpl"}
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
	  	<div class="panel-heading">{$Lang['ola']}, <b>{$Utilizador['Nome']} {$Utilizador['Apelido']}</b><button type="button" class="pull-right btn btn-warning btn-sm" data-toggle="modal" data-target="#editarPerfil">{$Lang['botao_editar']} <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></div>
	  		<div class="panel-body">
	    	<h3>{$Lang['informacoes']}</h3>
	    	<p>{$Lang['email']}: {$Utilizador['Email']}</p>
			<form action="profile.php" method="POST">
				<input type="hidden" name="Action" value="toggleCron" />
				<label>{$Lang['label_cron']}</label><p><button type="submit" class="btn btn-primary">{if $Utilizador['Cron'] == 1}{$Lang['botao_desativar']}{/if}{if $Utilizador['Cron'] == 0}{$Lang['botao_ativar']}{/if}</button></p>
			</form>
			<p><button type="button" class="pull-right btn btn-warning btn-xl" data-toggle="modal" data-target="#reiniciarPassword">{$Lang['botao_reiniciarPassword']} <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></button></p>
	      	<br />
			<br />
	    	<p>
	    		<span class="pull-left">{$Lang['servidoresAtuais']}: {$Utilizador['NumServidores']}</span><span class="pull-right">{$Lang['maxServidoresPermitidos']}: {$Utilizador['MaxServidores']}</span>
	    		<br />
	    			{*
	    				Escolher Classe da Barra de Progresso.
	    			*}
	    			{$classeBarra  = "success"}
	    			{if $Utilizador['PercentUsado'] > 49}
	    			
	    				{$classeBarra  = "warning"}
	    			{/if}
	    			{if $Utilizador['PercentUsado'] > 79}
	    			
	    				{$classeBarra = "danger"}
	    			{/if}
		    	<div class="progress">
				  	<div class="progress-bar active progress-bar-{$classeBarra} progress-bar-striped" role="progressbar" aria-valuenow="{$Utilizador['PercentUsado']}" aria-valuemin="0" aria-valuemax="100" style="width: {$Utilizador['PercentUsado']}%;">
			    		{$Utilizador['PercentUsado']}%
				  	</div>
				</div>
			</p>
			<!-- Modal Editar Perfil -->
			<div class="modal fade" id="editarPerfil" tabindex="-1" role="dialog" aria-labelledby="editarPerfilLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="editarPerfilLabel">{$Lang['botao_editar']} {$Utilizador['Nome']} {$Utilizador['Apelido']}</h4>
			      </div>
			      		<form action="" method="POST">
			      		<div class="modal-body">
			      			<input type="hidden" name="Action" value="EditarPerfil" />
			      			<label style="color: black;">{$Lang['nome']}:</label><br />
			      			<input type="text" name="Nome" value="{$Utilizador['Nome']}" /><br />
			      			<label style="color: black;">{$Lang['apelido']}:</label><br />
			      			<input type="text" name="Apelido" value="{$Utilizador['Apelido']}" /><br />
			      			<label style="color: black;">{$Lang['email']}:</label><br />
			      			<input type="email" name="Email" value="{$Utilizador['Email']}" /><br />
				      </div>
				      <div class="modal-footer">
				      		<label style="color: black;">{$Lang['input_password']}</label><br />
			      			<input type="password" name="Password" value="" /><br />
					        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
					        <button type="submit" id="AlterarPerfil" class="btn btn-primary">{$Lang['botao_guardar']}</button>
				        
				      </div>
				      </form>
			    </div>
			  </div>
		  	</div>
		  	<!-- /Modal Editar Perfil -->
			<!-- Modal Reniciar Password -->
			<div class="modal fade" id="reiniciarPassword" tabindex="-1" role="dialog" aria-labelledby="reiniciarPasswordLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="reiniciarPasswordLabel">{$Lang['reiniciarPasswordDe']} {$Utilizador['Nome']} {$Utilizador['Apelido']}</h4>
			      </div>
				      <form action="" method="POST">
				      <div class="modal-body">
			      			<input type="hidden" name="Action" value="MudarPassword">
                            <label style="color: black;">{$Lang['label_passwordAtual']}</label><br />
                            <input type="password" class="FullWidth" id="PasswordAtual" name="PasswordAtual" placeholder="{$Lang['input_passwordAtual']}"><br />
                            <label style="color: black;">{$Lang['label_novaPassword']}</label><br />
                            <input type="password" class="FullWidth" id="NovaPassword" name="NovaPassword" onkeyup="setPw(this); verificaPasswords(); return false;" placeholder="{$Lang['input_novaPassword']}"><br />
                            <label style="color: black;">{$Lang['label_repitaANovaPassword']}</label><br />
                            <input type="password" class="FullWidth" id="RepNovaPassword" name="RepNovaPassword" onkeyup="setRepPw(this); verificaPasswords(); return false;" placeholder="{$Lang['input_repitaANovaPassword']}"><br />
				      </div>
				      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
					        <button type="submit" id="AlterarPassword" class="btn btn-primary">{$Lang['botao_guardar']}</button>
				        </form>
				      </div>
			    </div>
			  </div>
		  	</div>
		  	<!-- /Modal Reiniciar Password -->
	  	</div>
	  	{foreach $Erros as $Erro}
	  		<div class="alert alert-danger">
	  			{$Erro}
	  		</div>
	  	{/foreach}
	  	{foreach $Sucessos as $Sucesso}
	  		<div class="alert alert-success">
	  			{$Sucesso}
	  		</div>
	  	{/foreach}
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
{include file="{$PastaTema}/includes/footer.tpl"}