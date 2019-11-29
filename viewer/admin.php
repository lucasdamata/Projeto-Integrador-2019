<?php 
session_start();
?>

<!-- <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Autenticação</title>
    </head>
    <body>
        <h2>Autenticação</h2>

        <?php
            //if(isset($_SESSION['msg'])){
                //echo $_SESSION['msg'];
                //unset($_SESSION['msg']);
            //}
        ?>

        <form action="valida.php" method="POST">
            <label>Usuário</label>
            <input type="text" name="usuario" placeholder="Digite seu usuário">
            <br>
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha">

            <input type="submit" name="btnLogin" value="Acessar">
            
        </form>
    </body>
</html> -->

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <style type="text/css">
        html,
        body {
            height: 100%;
        }
        
        html {
            display: table;
            margin: auto;
        }
        
        body {
            display: table-cell;
            vertical-align: middle;
        }
        
        .margin {
            margin: 0 !important;
        }
    </style>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">

                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>

                <form action="valida.php" method="POST">
                    <div class="card">
                        <div class="card-image">
                            <img src="login-image.jpg">
                            <span class="card-title">
                            <h2>Login</h2>
                            <h6>Renata Vaz Arquitetura</h6>
                        </span>
                        </div>
                        <div class="card-content">
                            <div class="input-field">
                                <label>E-mail</label>
                                <input name="usuario" type="email">
                            </div>

                            <div class="row">
                                <div class="col s12 m8 l9">
                                    <div class="input-field">
                                        <label>Senha</label>
                                        <input type="password" id="password" name="senha">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action blue-grey lighten-3">
                            <div class="center-align">
                                <input class="btn waves-effect blue-grey darken-1" type="submit" name="btnLogin" value="Acessar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>

</html>