<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link href="../static/css/curso.css" rel="stylesheet">


  <link href="../static/css/fonts.css" rel="stylesheet">
  <link href="../static/css/materialize.css" type="text/css" rel="stylesheet" />
  <link href="../static/css/style.css" rel="stylesheet">
  <link href="../static/css/bootstrap-table.min.css" rel="stylesheet">
  <link href="../static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>
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

  <main>
    <div class="avatar">
      <img src="../static/images/renata.jpg" alt="Renata Vaz" class="avatar">
    </div>


    <h5 class="headline">Sua Dicente</h5>

    <p><h6>Renata Dantas Paulino Vaz </h6> Mestre em Arquiteta e urbanismo, pelo PPGAU- Programa de Pós-Graduação em Arquitetura e Urbanismo da
      Universidade Federal de Uberlândia, professora no Centro Universitário de Patos de Minas - UNIPAM na
      cidade de Patos de Minas-MG. Especialista em Gestão Empresarial pela FGV (2007), graduada em Ciências
      Contábeis pelo Centro Universitário de Patos de Minas (2003) e graduada em Arquitetura e Urbanismo pelo
      Centro Universitário do Triangulo (2014). Tem experiência na área de Arquitetura e Urbanismo, com ênfase
      em Projeto de Arquitetura, atuando principalmente no seguinte tema: Tecnologia BIM aplicada ao software
      Revit Architecture.</p>

    <hr>

    <div class="tabela">
      <h5>Descrição do curso</h5>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt harum dignissimos, beatae voluptates
        
        ut iusto rerum sit doloremque rem aperiam, soluta ea possimus impedit commodi? Odio officiis excepturi nemo 
        nobis.</p>

      <table>
        <thead>
          <tr>
            <th>Capitulo 1</th>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td>módulo 1

              <ul>
                <li>conteudo</li>
                <li>conteudo</li>
                <li>conteudo</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>módulo 2

              <ul>
                <li>conteudo</li>
                <li>conteudo</li>
                <li>conteudo</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>módulo 2

              <ul>
                <li>conteudo</li>
                <li>conteudo</li>
                <li>conteudo</li>
              </ul>
            </td>
          </tr>

        </tbody>
      </table>

    </div>
    <h5 class="perguntas">Perguntas frequentes:</h5>

    <ul class="collapsible">
      <li>
        <div class="collapsible-header">Qual o tempo do curso ?</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
       
      </li>
      <li>
        <div class="collapsible-header">Preciso ter experiência previa ?</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
      
      </li>
      <li>
        <div class="collapsible-header">É emitido certificado de conclusão ?</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
     
      </li>
    </ul>

    <input type="submit" class="contact-form-btn" value="Adiquira já o seu!">

  </main>


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

  <script src="../static/js/jquery-3.4.1.min.js"></script>
  <script src="../static/js/materialize.js"></script>
  <script src="../static/js/bootstrap-table.min.js"></script>
  <script src="../static/js/bootstrap-table-materialize.min.js"></script>
  <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
  <script src="../static/js/init.js"></script>
  <script src="../static/js/categoria.js"></script>
  <script src="../static/js/index.js"></script>
  <script src="../static/js/curso.js"></script>

</body>

</html>