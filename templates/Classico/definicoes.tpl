{include file="{$PastaTema}/includes/header.tpl"}
{include file="{$PastaTema}/includes/topMenu.tpl"}
{include file="{$PastaTema}/includes/sideMenu.tpl"}
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="panel panel-default">
	  	<div class="panel-heading">{$Lang['titulo_definicoes']}</div>
	  		<div class="panel-body">
				<form class="ng-valid ng-dirty ng-valid-parse" role="form" method="POST">
					<div class="form-group">
						<label>{$Lang['label_tema']}</label>
						<select onchange="setTema(this); return false;" class="form-control ng-pristine ng-valid ng-touched" id="tema" name="IdTema">
							<option value="{$Utilizador['IdTema']}">{$Utilizador['NomeTema']}</option>
                    			
                    			{foreach $Temas as $Tema}
									{if $Tema['Id'] == $Utilizador['IdTema']}
									{else}
										<option value="{$Tema['Id']}">{$Tema['Nome']}</option>
									{/if}
								{/foreach}
						</select>
					</div>
					<div class="form-group">
						<label>{$Lang['label_linguagem']}</label>
						<select onchange="setLang(this); return false;" class="form-control ng-pristine ng-valid ng-touched" id="tema" name="IdTema">
							<option value="{$Lang}">{$LangKey}</option>
			                        			{foreach $Langs as $Key}
								{if $LangKey == $Key}
								{else}
									<option value="{$Key}">{$Key}</option>
								{/if}
							{/foreach}
						</select>
					</div>
					<input class="btn btn-primary" type="submit" id="guardar" name="Guardar" value="{$Lang['botao_guardar']}" />
				</form>
			</div>
		</div>
	</div>
</div>
{include file="{$PastaTema}/includes/footer.tpl"}