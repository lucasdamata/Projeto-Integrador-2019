<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Renata Vaz Arquitetura</title>
      <!-- CSS  -->
    <link href="../static/css/fonts.css" rel="stylesheet">
    <link href="../static/css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="../static/css/style.css" rel="stylesheet">
    <link href="../static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.5/venobox.css" />
    <link rel="stylesheet" href="../static/venobox/venobox.css" type="text/css" media="screen" />
  </head>

  <body class="body">
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
          <a id="logo-container" href="index.php" class="brand-logo center"><img src="logo_v/assinaturasemFundo.png" alt="logo" width="140" height="60"/></a>
          <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul id="navbar-items" class="left hide-on-med-and-down">
            <li><a id='index' href="index.php">Início</a></li>
            <li>
              <a class="dropdown-trigger" data-target="dropdown-menu" id= 'portifolio' href="#">
                Projetos <i class="material-icons right">arrow_drop_down</i>
              </a>
            </li>
            
            <li><a href="contato.php">Contato</a></li>
            <li><a href="curso.php">Curso</a></li>
          </ul>

          <ul id="dropdown-menu" class="dropdown-content">
            <li><a href="residencial.php">Residencial</a></li>
            <li><a href="comercial.php">Corporativo</a></li>
            <li><a href="urbano.php">Urbano</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Menu Mobile -->
    
      <ul id="mobile-navbar" class="sidenav">
        <li><a href="index.php">Início</a></li>
        <li class="divider"></li>
        <li>
          <a class="dropdown-trigger" data-target="dropdown-menu2" id= 'portifolio' href="#">
              Projetos <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li class="divider"></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>

      <ul id="dropdown-menu2" class="dropdown-content">
        <li><a href="residencial.php">Residencial</a></li>
        <li><a href="comercial.php">Corporativo</a></li>
        <li><a href="urbano.php">Urbano</a></li>
      </ul>
    
    <div class="container-fluid">
        <div class="row">
          <br>  
          <hr>
          <h2 id="h2-destaques">Corporativo</h2>
          <hr>
          <br>

          <div class="col s12">

            <!-- INÍCIO // Buscando projeto inserido no banco de dados -->
            <div class="col s12 m6 l4">
            <?php 
                ob_get_contents();
                include ("conexao1.php");
                $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '1'";
                $con = $mysqli->query($consulta) or die($mysqli->error);
              ?>
              <?php while($dados = $con->fetch_array()) { ?>
                  <figure class="meus-projetos">
                    <a href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery1">
                      <span class="mascara name">
                        <i class="material-icons">add</i>
                        <em> <?php echo $dados["nomeProjetoComercial"] ?> </em>
                      </span>
                      <img src="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                    </a>
                  </figure>
                <?php } ?>
                <!-- Conectando imagens de outras IDs do banco baseado com o nome do projeto -->
                <?php 
                  ob_get_contents();
                  include ("conexao1.php");
                  $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '2'";
                  $con = $mysqli->query($consulta) or die($mysqli->error);
                ?>
                <?php while($dados = $con->fetch_array()) { ?>
                <a class="venobox" data-gall="myGallery1" href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>"></a>
                <?php } ?>
            </div>
            <!-- FIM // Fim da busca de um projeto -->

            <!-- INÍCIO // Buscando projeto inserido no banco de dados -->
            <div class="col s12 m6 l4">
            <?php 
                ob_get_contents();
                include ("conexao1.php");
                $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '1'";
                $con = $mysqli->query($consulta) or die($mysqli->error);
              ?>
              <?php while($dados = $con->fetch_array()) { ?>
                  <figure class="meus-projetos">
                    <a href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery1">
                      <span class="mascara name">
                        <i class="material-icons">add</i>
                        <em> <?php echo $dados["nomeProjetoComercial"] ?> </em>
                      </span>
                      <img src="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                    </a>
                  </figure>
                <?php } ?>
                <!-- Conectando imagens de outras IDs do banco baseado com o nome do projeto -->
                <?php 
                  ob_get_contents();
                  include ("conexao1.php");
                  $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '2'";
                  $con = $mysqli->query($consulta) or die($mysqli->error);
                ?>
                <?php while($dados = $con->fetch_array()) { ?>
                <a class="venobox" data-gall="myGallery1" href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>"></a>
                <?php } ?>
            </div>
            <!-- FIM // Fim da busca de um projeto -->

            <!-- INÍCIO // Buscando projeto inserido no banco de dados -->
            <div class="col s12 m6 l4">
            <?php 
                ob_get_contents();
                include ("conexao1.php");
                $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '1'";
                $con = $mysqli->query($consulta) or die($mysqli->error);
              ?>
              <?php while($dados = $con->fetch_array()) { ?>
                  <figure class="meus-projetos">
                    <a href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery1">
                      <span class="mascara name">
                        <i class="material-icons">add</i>
                        <em> <?php echo $dados["nomeProjetoComercial"] ?> </em>
                      </span>
                      <img src="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                    </a>
                  </figure>
                <?php } ?>
                <!-- Conectando imagens de outras IDs do banco baseado com o nome do projeto -->
                <?php 
                  ob_get_contents();
                  include ("conexao1.php");
                  $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '2'";
                  $con = $mysqli->query($consulta) or die($mysqli->error);
                ?>
                <?php while($dados = $con->fetch_array()) { ?>
                <a class="venobox" data-gall="myGallery1" href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>"></a>
                <?php } ?>
            </div>
            <!-- FIM // Fim da busca de um projeto -->

            <!-- INÍCIO // Buscando projeto inserido no banco de dados -->
            <div class="col s12 m6 l4">
            <?php 
                ob_get_contents();
                include ("conexao1.php");
                $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '1'";
                $con = $mysqli->query($consulta) or die($mysqli->error);
              ?>
              <?php while($dados = $con->fetch_array()) { ?>
                  <figure class="meus-projetos">
                    <a href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery1">
                      <span class="mascara name">
                        <i class="material-icons">add</i>
                        <em> <?php echo $dados["nomeProjetoComercial"] ?> </em>
                      </span>
                      <img src="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                    </a>
                  </figure>
                <?php } ?>
                <!-- Conectando imagens de outras IDs do banco baseado com o nome do projeto -->
                <?php 
                  ob_get_contents();
                  include ("conexao1.php");
                  $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '2'";
                  $con = $mysqli->query($consulta) or die($mysqli->error);
                ?>
                <?php while($dados = $con->fetch_array()) { ?>
                <a class="venobox" data-gall="myGallery1" href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>"></a>
                <?php } ?>
            </div>
            <!-- FIM // Fim da busca de um projeto -->

            <!-- INÍCIO // Buscando projeto inserido no banco de dados -->
            <div class="col s12 m6 l4">
            <?php 
                ob_get_contents();
                include ("conexao1.php");
                $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '1'";
                $con = $mysqli->query($consulta) or die($mysqli->error);
              ?>
              <?php while($dados = $con->fetch_array()) { ?>
                  <figure class="meus-projetos">
                    <a href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery1">
                      <span class="mascara name">
                        <i class="material-icons">add</i>
                        <em> <?php echo $dados["nomeProjetoComercial"] ?> </em>
                      </span>
                      <img src="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                    </a>
                  </figure>
                <?php } ?>
                <!-- Conectando imagens de outras IDs do banco baseado com o nome do projeto -->
                <?php 
                  ob_get_contents();
                  include ("conexao1.php");
                  $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '2'";
                  $con = $mysqli->query($consulta) or die($mysqli->error);
                ?>
                <?php while($dados = $con->fetch_array()) { ?>
                <a class="venobox" data-gall="myGallery1" href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>"></a>
                <?php } ?>
            </div>
            <!-- FIM // Fim da busca de um projeto -->

            <!-- INÍCIO // Buscando projeto inserido no banco de dados -->
            <div class="col s12 m6 l4">
            <?php 
                ob_get_contents();
                include ("conexao1.php");
                $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '1'";
                $con = $mysqli->query($consulta) or die($mysqli->error);
              ?>
              <?php while($dados = $con->fetch_array()) { ?>
                  <figure class="meus-projetos">
                    <a href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery1">
                      <span class="mascara name">
                        <i class="material-icons">add</i>
                        <em> <?php echo $dados["nomeProjetoComercial"] ?> </em>
                      </span>
                      <img src="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                    </a>
                  </figure>
                <?php } ?>
                <!-- Conectando imagens de outras IDs do banco baseado com o nome do projeto -->
                <?php 
                  ob_get_contents();
                  include ("conexao1.php");
                  $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '2'";
                  $con = $mysqli->query($consulta) or die($mysqli->error);
                ?>
                <?php while($dados = $con->fetch_array()) { ?>
                <a class="venobox" data-gall="myGallery1" href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>"></a>
                <?php } ?>
            </div>
            <!-- FIM // Fim da busca de um projeto -->
          </div>
      </div>
  </div>

      <br>

      <footer class="page-footer"> <style>.page-footer { background: #BFAFBA  }</style>
        <div class="container">
          <div class="row">
            <div class="col s12 m8 l8">
              <h5 class="black-text">Informações Adicionais</h5>
              <ul>
                    <li> <img src="images/067-phone.png"/> <a class="grey-text text-lighten-3">(034) 98410-6642</a> </li>
                    <li> <img src="images/073-location2.png"/> <a class="grey-text text-lighten-3" href="https://www.google.com/maps/dir/R.+Ver.+Chico+Filgueira,+21+-+Cai%C3%A7aras,+Patos+de+Minas+-+MG,+38702-178//@-18.5741074,-46.5164245,17z/data=!4m8!4m7!1m5!1m1!1s0x94ae8b2c8e6bed7f:0xb4d59166dfd9b808!2m2!1d-46.5141185!2d-18.5730251!1m0" target="blank_">
                    R. Ver. Chico Filgueira, 21 - Caiçaras, Patos de Minas - MG<br></a></li>
                    <li> <img src="images/403-instagram.png"/> <a class="grey-text text-lighten-3" href="https://www.instagram.com/renata.arquiteta/" target="blank_">
                    @renata.arquiteta/</a> </li>
                    <li> <img src="images/389-mail2.png"/> <a class="grey-text text-lighten-3">
                    atendimento@renatavaz.com</a> </li>
              </ul>
            </div>
            <div class="col s12 m4 l4">
              <h5 class="white-text">Mapa do site</h5>
                  <ul>
                    <li style="list-style-type:circle; color: black;"><a href="index.php" class="grey-text text-lighten-3">Início</a></li>
                    <li style="list-style-type:circle; color: black;"><a href="portifolio.php" class="grey-text text-lighten-3">Projetos</a></li>
                    <li style="list-style-type:circle; color: black;"><a href="#" class="grey-text text-lighten-3">Sobre</a></li>
                    <li style="list-style-type:circle; color: black;"><a href="contato.php" class="grey-text text-lighten-3">Contato</a></li>
                  </ul>  
            </div>
          </div>
        </div>
                  
        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div align="center">
                <p align="middle">© 2019 Copyrights</p>
              </div>
            </div>     
          </div>
        </div>
      </footer>


      <!--jquery-->
      <script src="../static/js/jquery-3.4.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.5/venobox.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
      <script type="text/javascript" src="../static/venobox/venobox.min.js"></script>

      <script type="text/javascript">
        jQuery(document).ready(function(){

        jQuery("#subirTopo").hide();

        jQuery('a#subirTopo').click(function () {
                jQuery('body,html').animate({
                  scrollTop: 0
                }, 800);
                return false;
          });

        jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 1000) {
                    jQuery('#subirTopo').fadeIn();
                } else {
                    jQuery('#subirTopo').fadeOut();
                }
            });
        });
      </script>

      <script>
        $(document).ready(function($) {
          $('.venobox').venobox({ titleattr: 'data-title',  }); 
        });
      </script>

      <script>
        $('.venobox_custom').venobox({
        spinner: 'wave'
      });
      </script>

      <script>
        $(document).ready(function(){
        $('.venobox').venobox(); 
        });

        var test = $('.venobox').venobox();

        // close current item clicking on .closeme
        $(document).on('click', '.closeme', function(e){
            test.VBclose();
        });

        // go to next item in gallery clicking on .next
        $(document).on('click', '.next', function(e){
            test.VBnext();
        });

        // go to previous item in gallery clicking on .previous
        $(document).on('click', '.previous', function(e){
            test.VBprev();
        });
      </script>

      <script src="../static/js/materialize.js"></script>
      <script src="../static/js/bootstrap-table.min.js"></script>
      <script src="../static/js/bootstrap-table-materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      
      <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
      <script src="../static/js/init.js"></script>
      <script src="../static/js/categoria.js"></script>
      <script src="../static/js/index.js"></script>
  </body>
</html>