	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>&nbsp;Painel</a></li>
            <li><a href="criarServidor.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Criar Servidor</a></li>
          </ul>
          <ul class="nav nav-sidebar">
			<?php
				$TiposServidores = array();
				$TiposServidores = getAllTiposServidores();
				if(count($TiposServidores) > 0)
				{
					foreach($TiposServidores as $TipoServidor)
					{
						echo '
							<li><a href="tipoServidor.php?Tipo='.$TipoServidor['Id'].'"><img width="18px" height="18px" class="pull-left" class="rollover" src="'.$TipoServidor["UrlImagem"].'" />'.$TipoServidor['Nome'].'</a></li>
						';
					}
				}
			?>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<?php echo $User->getNome(); ?> <?php echo $User->getApelido(); ?></a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;Terminar Sessão</a></li>
          </ul>
          <style type="text/css">
      		.detalhes
  			{
  				color: #333;

      		}

      		.mais0
      		{
      			color: green;
      		}
      		.mais25
      		{
      			color: blue;
      		}
      		.mais50
      		{
      			color: orange;
      		}
      		.mais90
      		{
      			color: red;
      		}
          </style>
          <?php if($User->isAdmin()) { ?>
          <ul class="nav nav-sidebar">
          <li><a id="DetalhesDisco" class="detalhes"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;<span id="Disco">
            A Carregar...</span>% Disco</a></li>
          	<li><a id="DetalhesRam" class="detalhes"><span class="glyphicon glyphicon-hdd"></span>&nbsp;<span id="Ram">
          	A Carregar...</span>% Ram</a></li>
            <li><a id="DetalhesCpu" class="detalhes"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;<span id="Cpu">
            A Carregar...</span>% Cpu</a></li>
          </ul>
          <?php } ?>
        </div>
        
		<?php if($User->isAdmin()) { ?>
      	<script type="text/javascript">
	      	setInterval(function(){ 
			// Pedido Ajax para atualizar info da maquina
	   		$.get("includes/api.php", {AJAX: "INFOMAQUINA"},
	        	function(Result){
	          		if(Result.Status)
	      			{
	              		$("#Disco").text(Result.Disco);
	              		$("#Ram").text(Result.Ram);
	              		$("#Cpu").text(Result.Cpu);
	              		/*
	              			Disco
	              		*/
	              		if(Result.Disco > -1)
              			{
              				$("#DetalhesDisco").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais0");
              			}

	              		if(Result.Disco > 24)
              			{
              				$("#DetalhesDisco").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais25");
              			}

              			if(Result.Disco > 49)
              			{
              				$("#DetalhesDisco").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais50");
              			}

              			if(Result.Disco > 89)
              			{
              				$("#DetalhesDisco").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais90");
              			}
	              		/*
	              			Ram
	              		*/
              			if(Result.Ram > -1)
              			{
              				$("#DetalhesRam").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais0");
              			}

	              		if(Result.Ram > 24)
              			{
              				$("#DetalhesRam").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais25");
              			}

              			if(Result.Ram > 49)
              			{
              				$("#DetalhesRam").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais50");
              			}

              			if(Result.Ram > 89)
              			{
              				$("#DetalhesRam").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais90");
              			}
	              		/*
	              			Cpu
	              		*/
              			if(Result.Cpu > -1)
              			{
              				$("#DetalhesCpu").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais0");
              			}

	              		if(Result.Cpu > 24)
              			{
              				$("#DetalhesCpu").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais25");
              			}

              			if(Result.Cpu > 49)
              			{
              				$("#DetalhesCpu").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais50");
              			}

              			if(Result.Cpu > 89)
              			{
              				$("#DetalhesCpu").removeClass("mais0").removeClass("mais25").removeClass("mais50").removeClass("mais90").addClass("mais90");
              			}
	          		}
	        	},'json'
	 		);
			}, 5000);
	  	</script>
	  	<?php } ?>
