	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>&nbsp;{$Lang['menu_painel']}</a></li>
            <li><a href="criarServidor.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;{$Lang['menu_criarServidor']}</a></li>
          </ul>
          <ul class="nav nav-sidebar">

						  {foreach $TiposServidores as $TipoServidor}
							   <li><a href="tipoServidor.php?Tipo={$TipoServidor['Id']}"><img width="18px" height="18px" class="pull-left" class="rollover" src="templates/{$NomeTema}/img/jogos/{$TipoServidor['Id']}.png" />&nbsp;{$TipoServidor['Nome']}</a></li>
						  {/foreach}
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;{$Utilizador['Nome']} {$Utilizador['Apelido']}</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;{$Lang['menu_terminarSessao']}</a></li>
          </ul>
          
          {if $Utilizador['IsAdmin']}
          <ul class="nav nav-sidebar">
          <li><a id="DetalhesDisco" class="detalhes"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;<span id="Disco">
            {$Lang['a_carregar']}</span>% {$Lang['menu_disco']}</a></li>
          	<li><a id="DetalhesRam" class="detalhes"><span class="glyphicon glyphicon-hdd"></span>&nbsp;<span id="Ram">
          	{$Lang['a_carregar']}</span>% {$Lang['menu_ram']}</a></li>
            <li><a id="DetalhesCpu" class="detalhes"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;<span id="Cpu">
            {$Lang['a_carregar']}</span>% {$Lang['menu_cpu']}</a></li>
          </ul>
          {/if}
        </div>

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
        <script src="infoMaquina.js"></script>
        
		
