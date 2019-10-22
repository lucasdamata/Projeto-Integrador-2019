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
  </head>

  <body class="body">
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper purple lighten-4">
          <a id="logo-container" href="index.php" class="brand-logo center"><img src="logo_v/assinaturasemFundo.png" alt="logo" width="140" height="65"/></a>
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
    
        <div class="carousel carousel-slider center">
            <a class="carousel-item"><img class="responsive-img" src="images/19.png"></a>
            <a class="carousel-item"><img class="responsive-img" src="images/Of 02.jpg"></a>
            <a class="carousel-item"><img class="responsive-img" src="images/16.png"></a>
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
        <hr>
        <br>
      </div>
      <section>
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h2 id="h2">O que fazemos?</h2>
            </div>
            <div class="col s12 m4">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
              <br>
            </div>
            <br>
            <div align="center">
              <a class="waves-effect deep-purple lighten-3 btn" align="middle" href="contato.php">Entrar em contato</a>
            </div>
          </div>
        </div>
      </section>
      <br>
      <div>
        <hr>
      </div>

      <a id="subirTopo">
        <i class="material-icons deep-purple lighten-3">keyboard_arrow_up</i>
      </a>

      <div>
        <hr>
        <br>
      </div>

      <footer class="page-footer purple lighten-4">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Informações Adicionais</h5>
              <ul>
                <li>
                  <div class="col l1">
                  <img src="images/067-phone.png"/>
                  </div>
                  <div class="col l6">
                    <a class="grey-text text-lighten-3">(034) 90000-0000 / (034) 3888-8888</a>
                  </div>
                </li>
              </ul>
              <br>
              <ul> 
                <li>
                  <div class="col l1">
                  <img src="images/073-location2.png"/>
                  </div>
                  <div class="col l6">
                    <a class="grey-text text-lighten-3" href="https://www.google.com/maps/dir/-18.5858232,-46.5066368/unipam+maps/@-18.5803057,-46.5151017,16z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x94ae8b2b6cbccdd1:0x13323dbb548c2682!2m2!1d-46.5137325!2d-18.5746726" target="blank_">
                    Rua Major Gote</a>
                  </div>
                </li>
              </ul>
              <br>
              <ul> 
                <li>
                  <div class="col l1">
                  <img src="images/402-facebook2.png"/>
                  </div>
                  <div class="col l6">
                    <a class="grey-text text-lighten-3" href="https://www.facebook.com/Renatavazarquiteta" target="blank_">
                    /Renatavazarquiteta</a>
                  </div>
                </li>
              </ul>
              <br>
              <ul> 
                <li>
                  <div class="col l1">
                  <img src="images/403-instagram.png"/>
                  </div>
                  <div class="col l6">
                    <a class="grey-text text-lighten-3" href="https://www.instagram.com/renata.arquiteta/" target="blank_">
                    @renata.arquiteta/</a>
                  </div>
                </li>
              </ul>
              <br>
              <ul> 
                <li>
                  <div class="col l1">
                  <img src="images/389-mail2.png"/>
                  </div>
                  <div class="col l6">
                    <a class="grey-text text-lighten-3">
                    renata.arquiteta@live.com</a>
                  </div>
                </li>
              </ul>
            </div>
                <div class="col l4 offset-l2 s12">
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
    </div>

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
            dist: 0,
            padding: 5,
            indicators: true,
            fullWidth: true
          });
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
      
      <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
      <script src="../static/js/init.js"></script>
      <script src="../static/js/categoria.js"></script>
      <script src="../static/js/index.js"></script>
  </body>
</html>