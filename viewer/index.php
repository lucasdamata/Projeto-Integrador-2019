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
  </head>

  <body class="body">
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
          <a id="logo-container" href="index.php" class="brand-logo center"><img src="logo_v/assinaturasemFundo.png" alt="logo" width="140" height="60"/></a>
          <ul id="navbar-items" class="left hide-on-med-and-down">
            <li><a id='index' href="index.php">Início</a></li>
            <li>
              <a class="dropdown-trigger" data-target="dropdown-menu" id= 'portifolio' href="#">
                Projetos <i class="material-icons right">arrow_drop_down</i>
              </a>
            </li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
          </ul>

          <ul id="dropdown-menu" class="dropdown-content">
            <li><a href="portifolio.php">Todos</a></li>
            <li><a href="residencial.php">Residencial</a></li>
            <li><a href="comercial.php">Corporativo</a></li>
          </ul>

          <a href="#" data-target="nav-mobile" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
        </div>

        <!-- Menu Mobile -->
        <ul id="nav-mobile" class="sidenav">
              <li><a href="index.php">Início</a></li>
              <li><a href="portifolio.php">Projetos</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="ccontato.php">Contato</a></li>
          </ul>
        </div>
      </nav>
    </div>
         
        <div class="carousel carousel-slider">
            <a class="carousel-item"><img id="img-carrossel" class="img-responsive" src="images/19.png"></a>
            <a class="carousel-item"><img id="img-carrossel" class="img-responsive" src="images/Of 02.jpg"></a>
            <a class="carousel-item"><img id="img-carrossel" class="img-responsive" src="images/16.png"></a>
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2 preview"><</a>
            <a class="btn waves-effect white grey-text darken-text-2 next">></a>
          </div>
        </div>
        <br>

<div class="container">
      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="images/woman.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text"><h2 id="h2">Sobre</h2>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione sed, nemo necessitatibus 
                inventore sapiente doloribus atque molestiae quaerat numquam perspiciatis vero et veniam architecto 
                porro at, molestias ad ipsam saepe.
              </span>
            </div>
          </div>
        </div>
      </div>
      </div>

        <div>
          
        
          
            <?php
                  require "home.php";
                  echo $conteudo;

            ?>
        </div>
      <div>
        
        <br>
      </div>
      <section>
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h2 id="h2">O que fazemos?</h2>
            </div>
            <div class="col s12 m4">
              <div class="card white-1">
                <div class="card-content black-text">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card white-1">
                <div class="card-content black-text">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card white-1">
                <div class="card-content black-text">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
              <br>
            </div>
            <br>
            <div align="center">
              <a class="waves-effect btn" align="middle" href="contato.php">Entrar em contato</a>
              <style>.waves-effect { background: #A684A5 }</style>
            </div>
          </div>
        </div>
      </section>
      <br>
      <div>
        <hr>
      </div>

      <a id="subirTopo">
        <i class="material-icons topo">keyboard_arrow_up</i>
      </a>

      <div>
        <hr>
        <br>
      </div>

      <footer class="page-footer"> <style>.page-footer { background: linear-gradient(to right, #847095 ,#A684A5 , #BFAFBA)  }</style>
        <div class="container">
          <div class="row">
            <div class="col s12 m8 l8">
              <h5 class="white-text">Informações Adicionais</h5>
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
      $(document).ready(function(){
        $(document).ready(function(){
          $('.carousel').carousel({
            padding: 5,
            indicators: true,
            fullWidth: true
          });
          autoplay();
          function autoplay(){
            $('.carousel').carousel('next');
            setTimeout(autoplay, 5000);
          }
        });
        
        $('.next').click(function(){
          $('.carousel').carousel('next');
        });

        $('.preview').click(function(){
          $('.carousel').carousel('prev');
        });
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