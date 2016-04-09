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
            <li><a href="index.php">Painel</a></li>
            <li><a href="definicoes.php">Definições</a></li>
            <li><a href="profile.php">Perfil</a></li>
            <?php
              if(isset($User))
              {
                if($User->getTipoUtilizador() == 1)
                {
                ?>
                  <li><a href="admin.php">Administração</a></li>
                <?php
                }
              }
            ?>
            <li><a href="#">Ajuda</a></li>
          </ul>
          <form class="navbar-form navbar-right" action="procura.php" method="GET">
            <input type="text" class="form-control" name="query" size="50" placeholder="Procurar Servidor..." <?php if(isset($BarraProcura)) { echo "value='$BarraProcura'"; } ?>required>
          </form>
        </div>
      </div>
    </nav>