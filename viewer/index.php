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
    <nav  role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a id='index' href="index.php">Home</a></li>
        <li><a id= 'portifolio' href="portifolio.php">Portifólio</a></li>
        <li><a href="#">Sobre-nós</a></li>
        <li><a href="#">Contato</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
          <li><a href="index.php">Home</a></li>
          <li><a href="portifolio.php">Portifólio</a></li>
          <li><a href="#">Sobre-nós</a></li>
          <li><a href="#">Contato</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
    </div>
  </div>  
  <div class="center-align">
            <div class="parallax"><img class="responsive-img" src="logo_v/0004.jpg"></div>
            </div> 
     <div>
        <?php
              require "home.php";
              echo $conteudo;

        ?>
     </div>


      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Footer Content</h5>
              <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2019 Copyrights
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>


    <!--jquery-->
    <script src="../static/js/jquery-3.4.1.min.js"></script>
    <script src="../static/js/materialize.js"></script>
    <script src="../static/js/bootstrap-table.min.js"></script>
    <script src="../static/js/bootstrap-table-materialize.min.js"></script>
    
    <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
    <script src="../static/js/init.js"></script>
    <script src="../static/js/categoria.js"></script>
</body>
</html>