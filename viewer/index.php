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

  <body>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper purple lighten-5">
          <a id="logo-container" href="index.php" class="brand-logo center"><img src="logo_v/assinaturasemFundo.png" alt="logo" width="130" height="65"/></a>
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
      </nav>
    
        </div>
      </div>  
      <div class="center-align">
        <div class="parallax">
          <img class="capa responsive-img" src="logo_v/0004.jpg" width="750">
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
              <span class="black-text"><h4>Sobre</h4>
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
          <br>
          
          <h2 style="text-align:center; font-family:courier">Projetos Recentes</h2>
          
            <?php
                  require "home.php";
                  echo $conteudo;

            ?>
        </div>


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
      <script src="../static/js/materialize.js"></script>
      <script src="../static/js/bootstrap-table.min.js"></script>
      <script src="../static/js/bootstrap-table-materialize.min.js"></script>
      
      <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
      <script src="../static/js/init.js"></script>
      <script src="../static/js/categoria.js"></script>
      <script src="../static/js/index.js"></script>
  </body>
</html>