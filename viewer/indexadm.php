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
    <link href="../static/css/style1.css" rel="stylesheet">
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
            <div class ="container">
          <div class = "row">
        <div class = "col-8">
      <h1>Insira seu Projeto</h1>

        
        <p class="nome">
            <input type="text" id="nomeid" placeholder="NOMEPROJETO" required="required" name="nome" />
            <label for="nome">Título</label>
        </p>
        </div>
        <br> <br>
        <div class = "col-8">
        <p class="fone">
            <input type="text" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" />
            <label for="fone">Fone</label>
            </div>
        </p>

        <br> <br>
        <div class = "col-8">
        <p>
            <input type="email" id="emailid" placeholder="Joao@gmail.com" name="email" />
            <label for="email">Email</label>
        </p>
        </div>
        <br> <br>
        <div class = "col-8">
        <p>
            <textarea placeholder="DESCRIÇÃO"></textarea>
        </p>
        <br> <br>
        <p class="submit">
            <input type="submit" onclick="Enviar();" value="Enviar" />
        </p>
        </div>
        </div>
        </div>

 
    </form>
    
   

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

</body>
</html>