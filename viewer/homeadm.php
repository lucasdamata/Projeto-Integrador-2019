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
                    <ul id="navbar-items" class="left hide-on-med-and-down">
                        <li><a id='index' href="homeadm.php">Início</a></li>
                        <li><a id='index' href="inicial.php">Página Inicial</a></li>
                        <li>
                        <a class="dropdown-trigger" data-target="dropdown-menu" id= 'portifolio' href="projetos.php">
                            Projetos <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        </li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>

                    <ul id="dropdown-menu" class="dropdown-content">
                        <li><a href="projetos.php">Todos</a></li>
                        <li><a href="residencial.php">Residencial</a></li>
                        <li><a href="comercial.php">Corporativo</a></li>
                    </ul>

                    <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                </div>

                </div>
            </nav>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h2>Seja bem-vindo!</h2>
                    <p>Aqui você irá gerenciar as informações disponíveis em seu site, de maneira pratica e fácil. Basta selecionar a página 
                        na qual, você deseja incluir, excluir ou editar certo componente.</p>
                </div>
            </div>
        </div>

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