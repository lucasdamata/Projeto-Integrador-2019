
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
    <h4>editar conteudo do curso:</h4>
    <div class="avatar">
      <img src="../static/images/renata.jpg" alt="Renata Vaz" class="avatar">
      <div class="fileUpload btn btn-primary">
        <span>Editar</span>
          <input type="file" class="upload" />
     </div>
    </div>
    <div class="row" align-content ="center">
    
        <form  class="col s12" method="post" action="/apsdudu/control/cadastrar.php" id="formularioCad">
        <input id="codigo" name="codigo" type="hidden">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="" type="text" id="user" name="usuario" class="validate">
                    <label for="user">Descrição Pessoal:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="" type="email" id="email" name="email" class="validate">
                    <label for="email">Breve descrição sobre o curso</label>
                    
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="" type="password" id="pass" name="senha" class="validate">
                    <label for="pass">tópicos sobre o conteúdo</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="" type="password" id="pass" name="senha" class="validate">
                    <label for="pass">adicionar perguntas e respostas</label>
                </div>
            </div>


            <div class="row">
                <div class="col s6">
                    <div class="right-align">
                    <button class="waves-effect blue darken-3 btn-small " type="submit" name="action">Cadastrar
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
          
  <table id="tableCategoria" 
      class="responsive-table"
      data-url="control/categoria/todos.php"
      data-search="true"
      data-show-refresh="true"
      data-pagination="true"
      data-page-list="[10, 25, 50, 100, all]"
      data-show-footer="true">

        <thead>
          <tr>
              <th data-field="idcategoria">Código</th>
              <th data-field="descricao">Nome</th>
              <th data-field="idcategoria" data-formatter="editarCategoriaFmt">Editar</th>
              <th data-field="idcategoria" data-formatter="excluirCategoriaFmt">Excluir</th>
          </tr>
        </thead>

        <tbody>
         
        </tbody>
 </table>


  </main>
  <script src="../static/js/materialize.js"></script>
      <script src="../static/js/bootstrap-table.min.js"></script>
      <script src="../static/js/bootstrap-table-materialize.min.js"></script>
      <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
      <script src="../static/js/init.js"></script>
      <script src="../static/js/categoria.js"></script>
      <script src="../static/js/index.js"></script>
  </body>
</html>
