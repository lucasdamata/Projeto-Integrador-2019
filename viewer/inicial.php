<?php
session_start();
?>
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
                        <li><a id='index' href="indexadm.php">Início</a></li>
                        <li><a id='index' href="inicial.php">Página Inicial</a></li>
                        <li>
                        <a class="dropdown-trigger" data-target="dropdown-menu" id= 'portifolio' href="indexadm.php">
                            Projetos <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        </li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>

                    <ul id="dropdown-menu" class="dropdown-content">
                        <li><a href="indexadm.php">Todos</a></li>
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

        <br>

        <div class ="container">
            <div class = "row">
            <!-- Inserção de dados no banco para o campo Sobre, na página inicial do site -->
                <div class = "col-12">
                    <h5>Inserir dados do campo Sobre (Campo que contém uma pequena imagem)</h5>
                    <br>
                    <?php

                        if(isset($_SESSION['alertSobre'])){
                        echo $_SESSION['alertSobre'];
                        unset($_SESSION['alertSobre']);
                        }
                    ?>

                    <form method="POST" action="insercao.php">
                        <p class="nome">
                            <input type="text" id="nomeid" placeholder="Título do campo" required="required" name="sobreTitulo" />                
                        </p>
                    

                    <br> <br>

                    <div class = "col-12">
                        <p>
                            <input type="text" name="sobreDescricao" placeholder="Descreva este campo">
                        </p>
                        <br>
                        <p class="submit">
                            <input class="button" type="submit" value="Salvar">
                        </p>
                        <br><br>
                    </form>   
                </div>
                <!-- Inserção de dados no banco para o campo Sobre, na página inicial do site -->
                <div class = "col-12">
                    <h5>Inserir dados do campo Sobre (Campo que contém uma pequena imagem)</h5>
                    <br>
                    <?php

                        if(isset($_SESSION['alertSobre'])){
                        echo $_SESSION['alertSobre'];
                        unset($_SESSION['alertSobre']);
                        }
                    ?>

                    <form method="POST" action="insercao.php">
                        <p class="nome">
                            <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSection" />                
                        </p>
                        <p class="nome">
                            <input type="text" id="nomeid" placeholder="Título do card" required="required" name="tituloCards" />                
                        </p>
                    

                    <br> <br>

                    <div class = "col-12">
                        <p>
                            <input type="text" name="descricaoCards " placeholder="Descreva este campo">
                        </p>
                        <br>
                        <p class="submit">
                            <input class="button" type="submit" value="Salvar">
                        </p>
                        <br><br>
                    </form>   
                </div>      
            </div>
        </div>


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