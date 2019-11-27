<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projetos</title>
    <link href="../static/css/fonts.css" rel="stylesheet">
    <link href="../static/css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="../static/css/style.css" rel="stylesheet">
    <link href="../static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../static/venobox/venobox.css" type="text/css" media="screen" />
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
                    <li><a id='index' href="homeadm.php">Início</a></li>
                    <li><a href="index.php" target="_blank"> Preview </a> </li>
                </ul>
                </div>
            </nav>
        </div>

        <br>
        
      <div class ="container">
        <h4>Inserção de novos projetos</h4>
        <hr>
        <div class = "row">
          <div class = "col l12">
            <h5>Projeto Residencial</h5>
            <br>
              <!-- Inserção de projetos residenciais. -->
              
                <div class="col l4">
                  <a href="#novoRes" class="btn red modal-trigger">Novo Projeto Residencial</a>
                </div>
                <div class="modal modal-fixed-footer" id="novoRes">
                  <div class="modal-content">
                      <br>
                    <form method="POST" action="insereResidencial.php" enctype="multipart/form-data">
                    <h5>Insira o nome do projeto:</h5>
                      <p class="nome">
                        <input type="text" id="nomeid" placeholder="Cadastrar nome do projeto" required="required" name="nomeProjeto" />                
                      </p>
                      <br>
                      <h5>Inserir imagens do projeto:</h5>
                      <br>
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Escolher arquivos</span>
                          <input type="file" name="arquivos[]" multiple required>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                        <br>
                        <p class="submit">
                          <input class="button" type="submit" value="Enviar">
                        </p>
                      </div>
                    </form>
                  </div>
                  <br>
                  <div class="modal-footer">
                    <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                  </div>
               </div>
               <br>

              <p>
                <?php
                  if(isset($_SESSION['sucesso'])):
                    echo $_SESSION['sucesso'];
                    session_unset();
                  elseif(isset($_SESSION['erro'])):
                    echo $_SESSION['erro'];
                    session_unset();
                  endif;
                ?>
              </p>
                  <!-- Fim do campo de inserção -->

                <!-- Exemplo do projeto na página Residencial.php -->
                <div class="col s12 m6 l6">
                  <?php 
                      ob_get_contents();
                      include ("conexao1.php");
                      $consulta = "SELECT * FROM tb_arquivos WHERE id = '1'";
                      $con = $mysqli->query($consulta) or die($mysqli->error);
                    ?>
                    <?php while($dados = $con->fetch_array()) { ?>
                    <figure class="meus-projetos">
                      <a href="img_projetos/residencial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery">
                        <span class="mascara name">
                          <i class="material-icons">add</i>
                          <em> <?php echo $dados["nomeProjeto"] ?> </em>
                        </span>
                        <img src="img_projetos/residencial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                      </a>
                    </figure>
                  <?php } ?>
                </div>
                <div class="col s12 m6 l6">
                  <?php 
                      ob_get_contents();
                      include ("conexao1.php");
                      $consulta = "SELECT * FROM tb_arquivos WHERE id = '2'";
                      $con = $mysqli->query($consulta) or die($mysqli->error);
                    ?>
                    <?php while($dados = $con->fetch_array()) { ?>
                    <figure class="meus-projetos">
                      <a href="img_projetos/residencial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery">
                        <span class="mascara name">
                          <i class="material-icons">add</i>
                          <em> <?php echo $dados["nomeProjeto"] ?> </em>
                        </span>
                        <img src="img_projetos/residencial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                      </a>
                    </figure>
                  <?php } ?>
                </div>
                <!-- Fim dos exeplos de projetos residenciais -->
          </div>
          
          <div class = "col l12">
            <hr>
            <h5>Projeto Corporativo</h5>

              <!-- Inserção de projetos corporativos. -->
                <div class="col l4">
                  <a href="#novoComercial" class="btn red modal-trigger">Novo Projeto Corporativo</a>
                </div>
                <div class="modal modal-fixed-footer" id="novoComercial">
                  <div class="modal-content">
                      <br>
                    <form method="POST" action="insereComercial.php" enctype="multipart/form-data">
                    <h5>Insira o nome do projeto:</h5>
                      <p class="nome">
                        <input type="text" id="nomeid" placeholder="Cadastrar nome do projeto" required="required" name="nomeProjetoComercial" />                
                      </p>
                      <br>
                      <h5>Inserir imagens do projeto:</h5>
                      <br>
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Escolher arquivos</span>
                          <input type="file" name="arquivos[]" multiple required>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                        <br>
                        <p class="submit">
                          <input class="button" type="submit" value="Enviar">
                        </p>
                      </div>
                    </form>

                  </div>
                  <br>
                  <div class="modal-footer">
                    <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                  </div>
               </div>
               <br>

              <p>
                <?php
                  if(isset($_SESSION['sucesso2'])):
                    echo $_SESSION['sucesso2'];
                    session_unset();
                  elseif(isset($_SESSION['erro2'])):
                    echo $_SESSION['erro2'];
                    session_unset();
                  endif;
                ?>
              </p>

              <!-- Exemplo do projeto na página comercial.php -->
              <div class="col s12 m6 l6">
                  <?php 
                      ob_get_contents();
                      include ("conexao1.php");
                      $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '1'";
                      $con = $mysqli->query($consulta) or die($mysqli->error);
                    ?>
                    <?php while($dados = $con->fetch_array()) { ?>
                    <figure class="meus-projetos">
                      <a href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery">
                        <span class="mascara name">
                          <i class="material-icons">add</i>
                          <em> <?php echo $dados["nomeProjetoComercial"] ?> </em>
                        </span>
                        <img src="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                      </a>
                    </figure>
                  <?php } ?>
                </div>
                <div class="col s12 m6 l6">
                  <?php 
                      ob_get_contents();
                      include ("conexao1.php");
                      $consulta = "SELECT * FROM tb_arquivos_comercial WHERE id = '2'";
                      $con = $mysqli->query($consulta) or die($mysqli->error);
                    ?>
                    <?php while($dados = $con->fetch_array()) { ?>
                    <figure class="meus-projetos">
                      <a href="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery">
                        <span class="mascara name">
                          <i class="material-icons">add</i>
                          <em> <?php echo $dados["nomeProjetoComercial"] ?> </em>
                        </span>
                        <img src="img_projetos/comercial/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                      </a>
                    </figure>
                  <?php } ?>
                </div>
                <!-- Fim dos exeplos de projetos residenciais -->
              <br>
          </div>
          
          <div class = "col l12">
          <hr>
            <h5>Projeto Urbano</h5>
            
              <!-- Inserção de projetos urbanos. -->
                <div class="col l4">
                  <a href="#novoUrbano" class="btn red modal-trigger">Novo Projeto Urbano</a>
                </div>
                <div class="modal modal-fixed-footer" id="novoUrbano">
                  <div class="modal-content">
                      <br>
                    <form method="POST" action="insereUrbano.php" enctype="multipart/form-data">
                    <h5>Insira o nome do projeto:</h5>
                      <p class="nome">
                        <input type="text" id="nomeid" placeholder="Cadastrar nome do projeto" required="required" name="nomeProjetoUrbano" />                
                      </p>
                      <br>
                      <h5>Inserir imagens do projeto:</h5>
                      <br>
                      <div class="file-field input-field">
                        <div class="btn">
                          <span>Escolher arquivos</span>
                          <input type="file" name="arquivos[]" multiple required>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                        <br>
                        <p class="submit">
                          <input class="button" type="submit" value="Enviar">
                        </p>
                      </div>
                    </form>
                  </div>
                  <br>
                  <div class="modal-footer">
                    <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                  </div>
               </div>
               <br>

              <p>
                <?php
                  if(isset($_SESSION['sucesso3'])):
                    echo $_SESSION['sucesso3'];
                    session_unset();
                  elseif(isset($_SESSION['erro3'])):
                    echo $_SESSION['erro3'];
                    session_unset();
                  endif;
                ?>
              </p>

              <!-- Exemplo do projeto na página comercial.php -->
              <div class="col s12 m6 l6">
                  <?php 
                      ob_get_contents();
                      include ("conexao1.php");
                      $consulta = "SELECT * FROM tb_arquivos_urbano WHERE id = '1'";
                      $con = $mysqli->query($consulta) or die($mysqli->error);
                    ?>
                    <?php while($dados = $con->fetch_array()) { ?>
                    <figure class="meus-projetos">
                      <a href="img_projetos/urbano/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery">
                        <span class="mascara name">
                          <i class="material-icons">add</i>
                          <em> <?php echo $dados["nomeProjetoUrbano"] ?> </em>
                        </span>
                        <img src="img_projetos/urbano/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                      </a>
                    </figure>
                  <?php } ?>
                </div>
                <div class="col s12 m6 l6">
                  <?php 
                      ob_get_contents();
                      include ("conexao1.php");
                      $consulta = "SELECT * FROM tb_arquivos_urbano WHERE id = '2'";
                      $con = $mysqli->query($consulta) or die($mysqli->error);
                    ?>
                    <?php while($dados = $con->fetch_array()) { ?>
                    <figure class="meus-projetos">
                      <a href="img_projetos/urbano/<?php echo $dados["nome_do_arquivo"]?>" class="venobox" data-gall="myGallery">
                        <span class="mascara name">
                          <i class="material-icons">add</i>
                          <em> <?php echo $dados["nomeProjetoUrbano"] ?> </em>
                        </span>
                        <img src="img_projetos/urbano/<?php echo $dados["nome_do_arquivo"]?>" class="responsive-img img-fluid">							
                      </a>
                    </figure>
                  <?php } ?>
                </div>
                <!-- Fim dos exeplos de projetos residenciais -->
              <br>
          </div>
        </div>
      </div>

      <footer class="page-footer"> <style>.page-footer { background: #BFAFBA  }</style> 
        <div class="container">
          <div class="row">
            <div class="col s12 m4 l4">
              <h5 class="white-text">Ir para outra página gerencial:</h5>
                  <ul>
                    <li style="list-style-type:circle; color: black;"><a href="homeadm.php" class="grey-text text-lighten-3">Início</a></li>
                    <li style="list-style-type:circle; color: black;"><a href="inicial.php" class="grey-text text-lighten-3">Projetos</a></li>
                    <li style="list-style-type:circle; color: black;"><a href="projetos.php" class="grey-text text-lighten-3">Sobre</a></li>
                    <li style="list-style-type:circle; color: black;"><a href="cursoadm.php" class="grey-text text-lighten-3">Contato</a></li>
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


      <style>
            .th .i #deletar{
                height: 20px;
                width: 20px;
            }
            .button{
            float:  right;
            border: 0;
            background: #e1bee7;
            color: white;
            padding: 12px 50px;
            border-radius: 25px;
            cursor: pointer;
            transition: 0,5s;
            }
            .button:hover{
            background: #5e345c;
            }
    
      </style>

      <!--jquery-->
      <script src="../static/js/jquery-3.4.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.5/venobox.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
      <script type="text/javascript" src="../static/venobox/venobox.min.js"></script>

      <script>
        $(document).ready(function($) {
          $('.venobox').venobox({ titleattr: 'data-title',  }); 
        });
      </script>

      <script>
        $('.venobox_custom').venobox({
        spinner: 'wave'
      });
      </script>

      <script>
        $(document).ready(function(){
        $('.venobox').venobox(); 
        });

        var test = $('.venobox').venobox();

        // close current item clicking on .closeme
        $(document).on('click', '.closeme', function(e){
            test.VBclose();
        });

        // go to next item in gallery clicking on .next
        $(document).on('click', '.next', function(e){
            test.VBnext();
        });

        // go to previous item in gallery clicking on .previous
        $(document).on('click', '.previous', function(e){
            test.VBprev();
        });
      </script>

      <script src="../static/js/materialize.js"></script>
      <script src="../static/js/bootstrap-table.min.js"></script>
      <script src="../static/js/bootstrap-table-materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script></script>
      <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
      <script src="../static/js/init.js"></script>
      <script src="../static/js/categoria.js"></script>
            
      <script>
        $(document).ready(function(){
          $('.modal').modal();
        });
      </script>

</body>
</html>