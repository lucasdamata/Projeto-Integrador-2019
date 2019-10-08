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
                Portifólio <i class="material-icons right">arrow_drop_down</i>
              </a>
            </li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
          </ul>

          <ul id="dropdown-menu" class="dropdown-content">
            <li><a href="portifolio.php">Todos</a></li>
            <li><a href="#">Residencial</a></li>
            <li><a href="#">Corporativo</a></li>
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
              <li><a href="#">Contato</a></li>
          </ul>
        </div>
      </nav>
    </div>
    
        <div class="carousel carousel-slider center">
            <a class="carousel-item"><img src="images/Of01.jpg"></a>
            <a class="carousel-item"><img src="images/Of 02.jpg"></a>
            <a class="carousel-item"><img src="images/Of 03.jpg"></a>
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

      <br>

        <div>
          
          
          
          
            <?php
                  require "home.php";
                  echo $conteudo;

            ?>
        </div>

      <br>
      <div align="center">
        <iframe id="mapa" src="https://www.google.com/maps/d/embed?mid=1mmqPri92zVaw2RtBTbayZBF-YrQ" width="640" height="480" align="middle"></iframe>
      </div>
      <br>

      <footer class="page-footer purple lighten-4">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Rodapé</h5>
              <p class="grey-text text-lighten-4">Colocar meios de contato e outras informações.</p>
              </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Mapa do site</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Informação</a></li>
                  </ul>
                </div>
              </div>
            </div>
          <div class="footer-copyright">
          <div class="container">
            © 2019 Copyrights
            <a class="grey-text text-lighten-4 right" href="#!">Renata Vaz</a>
          </div>
        </div>
      </footer>
    </div>

      <!--jquery-->
      <script src="../static/js/jquery-3.4.1.min.js"></script>

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