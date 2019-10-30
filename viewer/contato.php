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
          <div class="nav-wrapper purple lighten-4">
            <a id="logo-container" href="index.php" class="brand-logo center"><img src="logo_v/assinaturasemFundo.png" alt="logo" width="130" height="65"/></a>
            <ul id="navbar-items" class="left hide-on-med-and-down">
              <li><a id='index' href="index.php">Início</a></li>
              <li>
                <a class="dropdown-trigger" data-target="dropdown-menu" id= 'portifolio' href="#">
                  Projetos <i class="material-icons right">arrow_drop_down</i>
                </a>
              </li>
              <li><a href="#">Sobre</a></li>
              <li><a href="contato.php">Contato</a></li>
              <li><a href="curso.php">Curso</a></li>
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
                <li><a href="portifolio.php">Portifólio</a></li>
                <li><a href="#">Sobre-nós</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
      
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