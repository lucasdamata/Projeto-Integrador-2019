<?php 
  ob_get_contents();
  include ("conexao1.php");
  $consulta = "SELECT * FROM projetos LIMIT 4";
  $con = $mysqli->query($consulta) or die($mysqli->error);
?>


      <div class="container-fluid">
        <div class="row">
          <br>  
          <hr>
          <h2 id="h2-destaques">Projetos</h2>

          <div class="col s12">

              <div class="col s4">
                  <figure class="meus-projetos">
                    <a href="foto/16.png"  class="venobox" data-title=" ">
                      <span class="mascara name">
                        <i class="material-icons">home</i>
                        <em> Residencial </em>
                      </span>
                      <img src="projetos/residencia1/WhatsApp Image 2019-08-19 at 16.29.15.jpeg" class="responsive-img img-fluid">							
                    </a>
                  </figure>
            </div>
            <div class="col s4">
                  <figure class="meus-projetos">
                    <a href="foto/16.png"  class="venobox" data-title=" ">
                      <span class="mascara name">
                        <i class="material-icons">location_city</i>
                        <em> Comercial </em>
                      </span>
                      <img src="projetos/residencia1/WhatsApp Image 2019-08-19 at 16.29.15.jpeg" class="responsive-img img-fluid">							
                    </a>
                  </figure>	
            </div>
            <div class="col s4">
                  <figure class="meus-projetos">
                    <a href="foto/16.png"  class="venobox" data-title=" ">
                      <span class="mascara name">
                        <i class="material-icons">account_balance</i>
                        <em> Urbano </em>
                      </span>
                      <img src="projetos/residencia1/WhatsApp Image 2019-08-19 at 16.29.15.jpeg" class="responsive-img img-fluid">							
                    </a>
                  </figure>	
						</div>
          </div>
        

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
        </div>
      </div>

<?php 
    
    $conteudo = ob_get_contents();
    ob_end_clean();
    
    
 ?>