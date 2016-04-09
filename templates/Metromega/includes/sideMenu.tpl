<!-- SIDEBAR -->
<div id="opensidebar"><i class="icon-th-large icon-3x"></i></div>
<section id="sidebar" class="htmltile">
    <ul>
        	<li><a id="abrirProcura" data-toggle="modal" href="#procurar"><i class="icon-search icon-3x"></i></a></li>
        	<li><a  href="index.php" ><i class="icon-windows icon-3x"></i></a></li>
        	<li><a  href="definicoes.php" ><i class="icon-gear icon-3x"></i></a></li>
        	<li><a  href="profile.php" ><i class="icon-user icon-3x"></i></a></li>
        	<li><a  href="ajuda.php" ><i class="icon-question-sign icon-3x"></i></a></li>
      	<li>{if $Utilizador['IsAdmin']}<a  href="admin.php" ><i class="icon-envelope icon-3x"></i></a>{/if}</li>
        <li></li>
	<li><a  href="logout.php" ><i class="icon-off icon-3x"></i></a></li>
    </ul>
</section>

     <!-- Modal Procurar -->
        <div style="color:black;" class="modal fade" id="procurar" tabindex="-1" role="dialog" aria-labelledby="procurarLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <form class="navbar-form navbar-right" action="procura.php" method="GET">
              <div class="modal-body">                  
                             <input type="text" class="form-control" name="query" size="50" placeholder="{$Lang['input_procuraServidor']}" required>
              </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$Lang['botao_cancelar']}</button>
                    <button type="submit" class="btn btn-primary">{$Lang['botao_procurar']}</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /Modal Procurar -->
<!-- /SIDEBAR -->