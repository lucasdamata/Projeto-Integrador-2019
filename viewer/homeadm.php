<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Administrativo</title>
        <link href="../static/css/fonts.css" rel="stylesheet">
        <link href="../static/css/materialize.css" type="text/css" rel="stylesheet"/>
        <link href="../static/css/style.css" rel="stylesheet">
        <link href="../static/css/bootstrap-table.min.css" rel="stylesheet">
        <link href="../static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
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

        <div class="container">
            <div class="row">
                <div class="col m12">
                    <h2>Seja bem-vindo!</h2>
                    <p>Aqui você irá gerenciar as informações disponíveis em seu site, de maneira pratica e fácil. Basta selecionar a página 
                        na qual, você deseja incluir, excluir ou editar certo componente.</p>
                    <p>Clique no botão referente a página que voce deseja gerenciar:</p>
                </div>
                <br>
                <div class="col m3">
                    <a class="waves-effect waves-light btn" href="inicial.php"><i class="material-icons left">edit</i>Página Inicial</a>
                </div>
                <div class="col m3">
                    <a class="waves-effect waves-light btn" href="projetos.php"><i class="material-icons left">edit</i>Projetos</a>
                </div>
                <div class="col m3">
                    <a class="waves-effect waves-light btn" href="cursoadm.php"><i class="material-icons left">edit</i>Curso</a>
                </div>
            </div>
        </div>

        <h4></h4>
        <h5></h5>
        
        <?php
            for($i=0; $i<22;$i++){
                echo "<br>";
            }
        ?>

        <footer class="page-footer"> <style>.page-footer { background: #BFAFBA; bottom: 0;  }</style>  
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


        <script src="../static/js/materialize.js"></script>
        <script src="../static/js/bootstrap-table.min.js"></script>
        <script src="../static/js/bootstrap-table-materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
        <script src="../static/js/init.js"></script>
        <script src="../static/js/categoria.js"></script>
        <script src="../static/js/index.js"></script>
    </body>
</html>