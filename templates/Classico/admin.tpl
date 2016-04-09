{include file="{$PastaTema}/includes/header.tpl"}
{include file="{$PastaTema}/includes/topMenu.tpl"}
{include file="{$PastaTema}/includes/sideMenu.tpl"}
<style type="text/css">
	#FullWidth {
	    width: calc(100% - 12px); /* IE 9,10 , Chrome, Firefox */
	    width: -webkit-calc(100% - 12px); /*For safari 6.0*/
	}
</style>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	{if $passo1 == true}
		{if $passo2 == true}
			{if $passo3 == true}
				{if $passo4 == true}
					{if $Opcao == "Ver"}

							<div class="panel panel-default">
							  	<div class="panel-heading">{$Lang['titulo_perfil']}, <b>{$UserVer['Nome']}&nbsp;{$UserVer['Apelido']}</b></div>
							  		<div class="panel-body">
							    	<h3>{$Lang['informacoes']}:</h3>
							    	<p>{$Lang['email']}: {$UserVer['Email']}</p>
							    	{if $UserVerIgual != true}
								    	<p><a href="admin.php?Action=Utilizador&Option=Login&Id={$UserVer['Id']}" type="button" class="pull-right btn btn-default btn-xl">{$Lang['botao_loginComoUtilizador']} <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></p>
								    	<br />
								    	<br />
								    	<p><button type="button" class="pull-right btn btn-warning btn-xl" data-toggle="modal" data-target="#reiniciarPassword">{$Lang['botao_reiniciarPassword']} <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></button></p>
							    	{/if}
							    	<br />
							    	<br />
							    	<p>
							    		<span>
						    			{*
						    				Verifica é utilizador ou administrador se for adminstrador aparece botão para downgrade, se for utilizador aparece botão de upgrade. 
						    			*}
							    		{if $UserVer['IsAdmin'] == true}
							    			<form action="" method="POST">
							    				<input type="hidden" name="Action" value="Downgrade" />
							    				<input type="hidden" name="Id" value="{$UserVer['Id']}" />
							    				<button type="submit" class="btn btn-danger">{$Lang['botao_downgrade']}</button><br /><br />
							    			</form>
							    		{else}
							    			<form action="" method="POST">
							    				<input type="hidden" name="Action" value="Upgrade" />
							    				<input type="hidden" name="Id" value="{$UserVer['Id']}" />
							    				<button class="btn btn-success">{$Lang['botao_upgrade']}</button>
							    			</form>
							    		{/if}
						    			</span>
						    			<br />
						    			<br />
							    			<span><button class="btn btn-primary" onclick="diminuirMaxServidores({$UserVer['Id']}); return false"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></span>
							    			<span><button class="btn btn-primary" onclick="adicionarMaxServidores({$UserVer['Id']}); return false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></span>
							    			<br />
							    		
							    		<span class="pull-right"><span id="Servidores">{$UserVer['NumServidores']}</span>/<span id="MaxServidores">{$UserVer['MaxServidores']}</span>&nbsp;{$Lang['label_numServidores']}</span>
							    		<br />
							    			{*
							    				Escolher Classe da Barra de Progresso.
							    			*}
							    			{$classeBarra  = "success"}
							    			{if $UserVer['PercentUsado'] > 49}
							    			
							    				{$classeBarra  = "warning"}
							    			{/if}
							    			{if $UserVer['PercentUsado'] > 79}
							    			
							    				{$classeBarra = "danger"}
							    			{/if}
								    	<div class="progress">
										  	<div id="barraProgresso" class="progress-bar active progress-bar-{$classeBarra} progress-bar-striped" role="progressbar" aria-valuenow="$UserVer['PercentUsado']}" aria-valuemin="0" aria-valuemax="100" style="width: {$UserVer['PercentUsado']}%;">
									    		{$UserVer['PercentUsado']}%
										  	</div>
										</div>
									</p>
									<p><button type="button" class="pull-right btn btn-danger btn-xl" data-toggle="modal" data-target="#removerUtilizador">{$Lang['botao_removerUtilizador']} <span class="glyphicon glyphicon-user" aria-hidden="true"></span></button></p>
							  	</div>
							</div>
							
							<!-- Modal Reniciar Password -->
							<div class="modal fade" id="reiniciarPassword" tabindex="-1" role="dialog" aria-labelledby="reiniciarPasswordLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="reiniciarPasswordLabel">{$Lang['reiniciarPasswordDe']} {$UserVer['Nome']}&nbsp;{$UserVer['Apelido']}</h4>
							      </div>
							      <form action="" method="POST">
							      <div class="modal-body">		      		
						      			<input type="hidden" name="Id" value="{$UserVer['Id']}">
						      			<input type="hidden" name="Action" value="MudarPassword">
						      			<label>{$Lang['label_novaPassword']}</label>
						      			<input type="text" id="FullWidth" name="Password" placeholder="{$Lang['input_novaPassword']}">
							      </div>
							      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
								        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
							        </form>
							      </div>
							    </div>
							  </div>
						  	</div>
						  	<!-- /Modal Reiniciar Password -->

						  	<!-- Modal Remover Utilizador -->
							<div class="modal fade" id="removerUtilizador" tabindex="-1" role="dialog" aria-labelledby="removerUtilizadorLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="removerUtilizadorLabel">{$Lang['removerUtilizador']} {$UserVer['Nome']}&nbsp;{$UserVer['Apelido']}</h4>
							      </div>
							      <p>{$Lang['alerta_confirmaEliminacaoUser']}</p>
							      <form action="" method="POST">
							      	<input type="hidden" name="Id" value="{$UserVer['Id']}">
							      	<input type="hidden" name="Action" value="RemoverUtilizador">
							      	<div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
								        <button type="submit" id="removerUtilizador" class="btn btn-primary">{$Lang['botao_remover']}</button>
							      	</div>
						  		   </form>
							    </div>
							  </div>
						  	</div>
						  	<!-- /Modal Remover Utilizador -->
						  	<script type="text/javascript">

						  	</script>
					{/if}
				{/if}
			{/if}
		{/if}
	{else}

		<div class="panel panel-default">
		  	<div class="panel-heading">{$Lang['titulo_painelAdministracao']}</div>
		  		<div class="panel-body">
		    	<h3>{$Lang['utilizadores']}</h3>
		    	<div class="table-responsive">
			        <table class="table table-striped">
			          <thead>
			            <tr>
			              <th>#</th>
			              <th>{$Lang['funcao']}</th>
			              <th>{$Lang['nome']}</th>
			              <th>{$Lang['apelido']}</th>
			              <th>{$Lang['email']}</th>
			              <th>{$Lang['servidoresUsados']}</th>
			              <th>{$Lang['maxServidores']}</th>
			              <th>{$Lang['servidoresOnline']}</th>
			              <th>{$Lang['slotsUsados']}</th>
						  <th class="pull-right">{$Lang['painel']}</th>
			            </tr>
			          </thead>
			          <tbody>
						{if $NumUtilizadores > 0}
							{foreach $Utilizadores as $Utilizador}
									<tr>
									  	<td>{$Utilizador['Id']}</td>
									  	<td>
									  		{if $Utilizador['TipoUtilizador'] == 1}
									  			<font color='green'><b>{$Lang['role_administrador']}</b></font>
									  		{else}
									  			<b>{$Lang['role_utilizador']}</b>
									  		{/if}
									  	</td>
									  	<td>{$Utilizador['Nome']}</td>
									  	<td>{$Utilizador['Apelido']}</td>
			         			 		<td>{$Utilizador['Email']}</td>
									  	<td>{$Utilizador['NumServidores']}</td>
									  	<td>{$Utilizador['MaxServidores']}</td>
									  	<td>{$Utilizador['ServidoresOnline']}</td>
									  	<td>{$Utilizador['SlotsUsados']}</td>
									  	<td><a class="pull-right btn btn-default" href="admin.php?Action=Utilizador&Option=Ver&Id={$Utilizador['Id']}"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>
									</tr>
							{/foreach}
								</tbody>
			    			</table>
			        	{else}
								</tbody>
			       	 	</table>

							<center><h3>{$Lang['alerta_semUtilizadores']}</h3></center>
						{/if}

						<p><button type="button" class="pull-right btn btn-success btn-xl" data-toggle="modal" data-target="#adicionarUtilizador">{$Lang['botao_adicionarUtilizador']} <span class="glyphicon glyphicon-user" aria-hidden="true"></span></button></p>
			    </div>
		  	</div>
		</div>
		<!-- Modal Adicionar Utilizador -->
			<div class="modal fade" id="adicionarUtilizador" tabindex="-1" role="dialog" aria-labelledby="adicionarUtilizadorLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="adicionarUtilizadorLabel">{$Lang['titulo_adicionarUtilizador']}</h4>
			      </div>
			      <form action="" method="POST">
			      <div class="modal-body">		      		
		      			<input type="hidden" name="Action" value="AdicionarUtilizador" required>
		      			<label>{$Lang['label_email']}</label>
		      			<input type="email" id="FullWidth" name="Email" placeholder="{$Lang['input_email']}" required>
		      			<label>{$Lang['label_nome']}</label>
		      			<input type="text" id="FullWidth" name="Nome" placeholder="{$Lang['input_nome']}" required>
		      			<label>{$Lang['label_apelido']}</label>
		      			<input type="text" id="FullWidth" name="Apelido" placeholder="{$Lang['input_apelido']}" required>
		      			<label>{$Lang['label_password']}</label>
		      			<input type="password" id="FullWidth" name="Password" placeholder="{$Lang['input_password']}" required>
		      			<label>{$Lang['label_repitaPassword']}</label>
		      			<input type="password" id="FullWidth" name="repPassword" placeholder="{$Lang['input_repitaPassword']}" required>
		      			<label>{$Lang['label_maxServidores']}</label>
		      			<input type="number" id="FullWidth" name="MaxServidores" value="0" min="0" max="100" required>
		      			<label>{$Lang['label_tipoUtilizador']}</label>
		      			<select name="TipoUtilizador" required>
		      				<option value="">{$Lang['select_default']}</option>
		      				<option value="0">{$Lang['role_utilizador']}</option>
		      				<option value="1">{$Lang['role_administrador']}</option>
		      			</select>
			      </div>
			      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
				        <button type="submit" class="btn btn-primary">{$Lang['botao_guardar']}</button>
			        </form>
			      </div>
			    </div>
			  </div>
		  	</div>
	  	<!-- /Modal Adicionar Utilizador -->
	{/if}

	{if $hasErros}
	{
		{foreach $Erros as $Erro}
			<div class="alert alert-danger" role="alert">{$Erro}</div>
		{/foreach}
	{/if}

	{if $hasSucessos}
		{foreach $Sucessos as $Sucesso}
			<div class="alert alert-success" role="alert">{$Sucesso}</div>
		{/foreach}
	{/if}

</div> <!-- / Offset do corpo -->
<script type="text/javascript">
	window.setTimeout(function() {
	    $(".alert").fadeTo(500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 3000);
</script>
{include file="{$PastaTema}/includes/footer.tpl"}