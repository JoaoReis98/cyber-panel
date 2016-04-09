	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img class="pull-left" style="margin: -8px; " width="40px" src="imagens/iconsite.png">&nbsp;&nbsp;Cyber-Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">{$Lang['titulo_painelPrincipal']}</a></li>
            <li><a href="definicoes.php">{$Lang['titulo_definicoes']}</a></li>
            <li><a href="profile.php">{$Lang['titulo_perfil']}</a></li>
            {if $Utilizador['IsAdmin']}
                  <li><a href="admin.php">{$Lang['titulo_administracao']}</a></li>
            {/if}
            <li><a href="ajuda.php">{$Lang['titulo_ajuda']}</a></li>
          </ul>
          <form class="navbar-form navbar-right" action="procura.php" method="GET">
            <input type="text" class="form-control" name="query" size="30" placeholder="{$Lang['input_procuraServidor']}" required>
          </form>
        </div>
      </div>
    </nav>