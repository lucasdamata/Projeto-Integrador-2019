<?php
session_start();
?>
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
    <style>
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
            <li><a href="contato.php">Contato</a></li>
          </ul>

          <ul id="dropdown-menu" class="dropdown-content">
            <li><a href="portifolio.php">Todos</a></li>
            <li><a href="residencial.php">Residencial</a></li>
            <li><a href="comercial.php">Corporativo</a></li>
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
              <li><a href="contato.php">Contato</a></li>
          </ul>
        </div>
      </nav>
    </div>
            <div class ="container">
          <div class = "row">
        <div class = "col-8">
      <h3>Inserir novo projeto</h3>
      <br>
      <?php

        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }

      ?>

        <form method="POST" action="insercao.php">
        <p class="nome">
            <input type="text" id="nomeid" placeholder="Título do projeto" required="required" name="titulo" />
            
        </p>
        </div>

        <br> <br>

        <div class = "col-8">
        <p>
            <input type="text" name="descricao" placeholder="Descreva seu projeto">
        </p>
        <br>

        <p class="submit">
            <input class="button" type="submit" value="Cadastrar">
        </p>
        <br><br><br>

        </form>
        
        <form action="#">
        <p style="font-size:20px">Selecione as áreas na qual deseja inserir o projeto: <br> <br>
          <label>
             <input class="with-gap" name="group1" type="checkbox"  />
              <span>Destaques</span>
          </label>
        </p>
        <p>
          <label>
             <input class="with-gap" name="group1" type="checkbox"  />
              <span>Empresarial</span>
          </label>
        </p>
        <p>
          <label>
             <input class="with-gap" name="group1" type="checkbox" />
              <span>Residencial</span>
          </label>
        </p>
        </form>
        <br>
       

     

      <p style="font-size:20px">Faça upload da sua imagem aqui</p>
      <?php
      require "upload.php";
      if(isset($msg) && $msg != false) echo "<p> $msg </p>"; 
      ?>
      <form method="POST" enctype="multipart/form-data">
        Arquivo: <input type="file" required name="arquivo">
        <input type="submit" value="Salvar">
      </form>

      <!-- action="upload.php" -->
      
      <br>
        
        
        
        
        </div>
        </div>
        </div>



 
    </form>
    <br> <br>
    <br> <br>
    <br> 
    

</div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.dropdown-trigger');
          var instances = M.Dropdown.init(elems, options);
        });

    </script>

</body>
</html>