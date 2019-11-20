
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Renata Vaz Arquitetura</title>
      <!-- CSS  -->

      <link href="../static/css/curso.css" rel="stylesheet">
    <link href="../static/css/fonts.css" rel="stylesheet">
    <link href="../static/css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="../static/css/style.css" rel="stylesheet">
    <link href="../static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  
  
  <body class="corpo">

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
                <li><a href="portifolio.php">Projetos</a></li>
                <li><a href="#">Sobre-nós</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
      
          </div>
        </div>  



  <main class="tabelas">
    <h4>Editar conteudo:</h4>
    <div class="avatar">
      <img src="../static/images/renata.jpg" alt="Renata Vaz" class="avatar">
      <div class="fileUpload btn btn-primary">
        <span>Editar</span>
          <input type="file" class="upload" />
     </div>
    </div>
    <div class="row" align-content ="center">
    
        <form  class="col s12" method="post" action="/Projeto-Integrador-2019/control/salvar.php" id="formularioCad">
        <input id="id" name="id" type="hidden">
        <div class="row">
                <div class="input-field col s6">
                    <input placeholder="" type="text" id="descricaoP" name="descricaoP" class="validate">
                    <label for="descricaoC">Descrição Pesoal</label>
                    
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="" type="text" id="descricaoC" name="descricaoC" class="validate">
                    <label for="descricaoC">Breve descrição sobre o curso</label>
                    
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="" type="text" id="tituloC" name="tituloC" class="validate">
                    <label for="tituloC">Título do Curso</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="" type="text" id="tituloCP" name="tituloCP" class="validate">
                    <label for="tituloCP">Título do capítulo</label>
                </div>
            </div>


            <div class="row">
                <div class="col s6">
                    <div class="right-align">
                    <button class="waves-effect blue darken-3 btn-small " type="submit" name="action">Adionar
                        <!--<i class="material-icons left">send</i> -->
                    </button>
                    </div>
                </div>
            </div>

        </form>
    
    </div>
  </div>

  <a class="btn-floating btn-large waves-effect waves-light blue modal-trigger" href="#modal">
    <i class="material-icons">add</i>
</a>

<div id="modal" class="modal">
    <div class="modal-content">
     
      <form method="post" action="/projeto/control/salvar.php" id="formularioCategoria">

          <input id="codigo" name="codigo" type="hidden">

            <div class="row">
              <div class="input-field col s12">
                <input id="descricao" name="descricao"  type="text">
                <label for="descricao">Descrição</label>
              </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
              <i class="material-icons right">send</i>
            </button>

      </form>

    </div>
    
  </div>
          


  </main>
  
  <script src="../static/js/jquery-3.4.1.min.js"></script>
    <script src="../static/js/materialize.js"></script>
    <script src="../static/js/bootstrap-table.min.js"></script>
    <script src="../static/js/bootstrap-table-materialize.min.js"></script>
    <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
    <script src="../static/js/init.js"></script>
    <script src="../static/js/cadastro.js"></script>
    <script src="../static/js/categoria.js"></script>
  </body>
</html>
