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