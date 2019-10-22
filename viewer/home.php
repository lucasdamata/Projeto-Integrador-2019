<?php 
  ob_get_contents();
  include ("conexao1.php");
  $consulta = "SELECT * FROM projetos LIMIT 4";
  $con = $mysqli->query($consulta) or die($mysqli->error);
?>


      <div class="container">
        <div class="row">
          <br>  
          <hr>
          <h2 id="h2-destaques">Destaques</h2>

          <?php while($dados = $con->fetch_array()) { ?>
          <div class="col s6"> <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="projetos/residencia1/WhatsApp Image 2019-08-19 at 16.29.15.jpeg">
            </div>
            <div id="divCardDestaques" class="card-content">
              <span class="card-title activator grey-text text-darken-4"></span>
              <h2 id="h2card"><?php echo $dados["titulo"];?></h2>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><?php echo $dados["titulo"];?><i class="material-icons right">close</i></span>
              <p><?php echo $dados["descricao"]; ?></p>
            </div>
          </div> 
        </div>
          <?php } ?>


        <!--
          <div class="col s6"> <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="projetos/varandagourmet/Of 01.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Card Title</span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
            </div> </div>

            <div class="col s6">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="projetos/residencia1/WhatsApp Image 2019-08-19 at 16.29.15.jpeg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Card Title</span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>  
              <br>                 
            </div>
            <br>
            <div align="center">
              <a class="waves-effect deep-purple lighten-3 btn" align="middle" href="portifolio.php">Todos os Projetos</a>
            </div>
            <br>
          </div>
          -->
        </div>
      </div>

<?php 
    
    $conteudo = ob_get_contents();
    ob_end_clean();
    
    
 ?>