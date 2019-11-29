<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <title>Contato</title>

      <!-- CSS  -->
      <link rel="stylesheet" href="../static/css/contato.css">
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
      
          </div>
        </div>
            <div class="contact-section">
                <h2>Contate-nos</h2>
                <div class="border"></div>

                <form action="contato/contatoEmail.php" class="contact-form" method="POST" name="form">

                    <input type="text"  class="contact-form-text" placeholder="Nome" name="nome">
                    <input type="text" class="contact-form-text" placeholder="Telefone" name="telefone">
                    <input type="email" class="contact-form-text" placeholder="E-mail" name="email">
                    <textarea type="text" class="contact-form-text" placeholder="Mensagem" name="mensagem"></textarea>
                    <input type="submit" class="contact-form-btn" value="Enviar">

                </form>

            </div>

            <h6></h6>
            <?php
                for($i=0; $i<5;$i++){
                    echo "<br>";
                }
            ?>
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
              <h5 class="black-text">Mapa do site</h5>
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
      <script src="../static/js/materialize.js"></script>
      <script src="../static/js/bootstrap-table.min.js"></script>
      <script src="../static/js/bootstrap-table-materialize.min.js"></script>
      <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
      <script src="../static/js/init.js"></script>
      <script src="../static/js/categoria.js"></script>
      <script src="../static/js/index.js"></script>


</body>

</html>