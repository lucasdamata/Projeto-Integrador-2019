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

        <br>

        <div class ="container">
            <div class = "row">
            <!-- Inserção de dados no banco para o campo Sobre, na página inicial do site -->
                <div class = "col l12">
                    <h5>Editar dados do campo Sobre</h5>
                    <br>
                    <?php

                        if(isset($_SESSION['alertSobre'])){
                        echo $_SESSION['alertSobre'];
                        unset($_SESSION['alertSobre']);
                        }
                    ?>

                    <form method="POST" action="insercao.php">
                        <br>
                        <p>Exemplo do campo Sobre:</p>
                        <br>
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row valign-wrapper">
                                <div class="col s2">
                                    <img src="images/woman.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                </div>
                                <div class="col s10">
                                    <span class="black-text"><h2 id="h2">Sobre</h2>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione sed, nemo necessitatibus 
                                        inventore sapiente doloribus atque molestiae quaerat numquam perspiciatis vero et veniam architecto 
                                        porro at, molestias ad ipsam saepe.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="nome">
                            <input type="text" id="nomeid" placeholder="Título do campo" required="required" name="sobreTitulo" />                
                        </p>
                    

                    <br> <br>
                        <p>
                            <input type="text" name="sobreDescricao" placeholder="Descreva este campo">
                        </p>
                        <br>
                        <p class="submit">
                            <input class="button" type="submit" value="Salvar">
                        </p>
                        <br>
                        <br>
                        <br>

                    </form>          
                </div>
            </div>

                

                <!-- Inserção de dados no banco para os cards, na página inicial do site -->
                <div class = "col-12">
                    <h5>Inserir dados dos cards</h5>
                    <br>
<<<<<<< HEAD
                        <p>Exemplo dos cards:</p>
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col s12">
                                    <form method="POST" action="insereCard.php">
                                        <h2 id="h2">O que fazemos?</h2>
                                        <a href="#novoCard" class="btn red modal-trigger">Novo</a>
                                        <div class="modal modal-fixed-footer" id="novoCard">
                                            <div class="modal-content">
                                                <h3>Novo card</h3>
                                                <!--<p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSection" />                
                                                </p>
                                                <br>-->
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título do card" required="required" name="tituloCards" />                
                                                </p>
                                                <br>
                                                <p>
                                                    <input type="text" name="descricaoCards " placeholder="Descreva este campo">
                                                </p>
                                                <br>
                                                <p class="submit">
                                                    <input class="button" type="submit" value="Salvar">
                                                </p>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                            </div>
                                        </div>

                                        <?php
                                        if(isset($_SESSION['alertCards'])){
                                        echo $_SESSION['alertCards'];
                                        unset($_SESSION['alertCards']);
                                        }
                                    ?>
                                    </form>
                                    </div>

                                    <div class="col s12 m4">
                                        <div class="card white-1">
                                            <div class="card-content black-text">
                                                <span class="card-title">Card Title</span>
                                                <p>I am a very simple card. I am good at containing small bits of information.
                                                    I am convenient because I require little markup to use effectively.</p>
                                            </div>
                                        </div>
                                        <a href="#novoCard" class="btn red modal-trigger">Novo</a>
                                        <div class="modal modal-fixed-footer" id="novoCard">
                                            <div class="modal-content">
                                                <h3>Novo card</h3>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSection" />                
                                                </p>
                                                <br>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título do card" required="required" name="tituloCards" />                
                                                </p>
                                                <br>
                                                <p>
                                                    <input type="text" name="descricaoCards " placeholder="Descreva este campo">
                                                </p>
                                                <br>
                                                <p class="submit">
                                                    <input class="button" type="submit" value="Salvar">
                                                </p>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                            </div>
                                        </div>
                                        <a href="#novoCard" class="btn red modal-trigger">Editar</a>
                                        <div class="modal modal-fixed-footer" id="novoCard">
                                            <div class="modal-content">
                                                <h3>Novo card</h3>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSection" />                
                                                </p>
                                                <br>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título do card" required="required" name="tituloCards" />                
                                                </p>
                                                <br>
                                                <p>
                                                    <input type="text" name="descricaoCards " placeholder="Descreva este campo">
                                                </p>
                                                <br>
                                                <p class="submit">
                                                    <input class="button" type="submit" value="Salvar">
                                                </p>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card white-1">
                                            <div class="card-content black-text">
                                                <span class="card-title">Card Title</span>
                                                <p>I am a very simple card. I am good at containing small bits of information.
                                                I am convenient because I require little markup to use effectively.</p>
                                            </div>
                                        </div>
                                        <a href="#novoCard" class="btn red modal-trigger">Novo</a>
                                        <div class="modal modal-fixed-footer" id="novoCard">
                                            <div class="modal-content">
                                                <h3>Novo card</h3>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSection" />                
                                                </p>
                                                <br>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título do card" required="required" name="tituloCards" />                
                                                </p>
                                                <br>
                                                <p>
                                                    <input type="text" name="descricaoCards " placeholder="Descreva este campo">
                                                </p>
                                                <br>
                                                <p class="submit">
                                                    <input class="button" type="submit" value="Salvar">
                                                </p>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                            </div>
                                        </div>
                                        <a href="#novoCard" class="btn red modal-trigger">Editar</a>
                                        <div class="modal modal-fixed-footer" id="novoCard">
                                            <div class="modal-content">
                                                <h3>Novo card</h3>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSection" />                
                                                </p>
                                                <br>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título do card" required="required" name="tituloCards" />                
                                                </p>
                                                <br>
                                                <p>
                                                    <input type="text" name="descricaoCards " placeholder="Descreva este campo">
                                                </p>
                                                <br>
                                                <p class="submit">
                                                    <input class="button" type="submit" value="Salvar">
                                                </p>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card white-1">
                                            <div class="card-content black-text">
                                            <span class="card-title">Card Title</span>
                                            <p>I am a very simple card. I am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>
                                            </div>
                                        </div>
                                        <a href="#novoCard" class="btn red modal-trigger">Novo</a>
                                        <div class="modal modal-fixed-footer" id="novoCard">
                                            <div class="modal-content">
                                                <h3>Novo card</h3>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSection" />                
                                                </p>
                                                <br>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título do card" required="required" name="tituloCards" />                
                                                </p>
                                                <br>
                                                <p>
                                                    <input type="text" name="descricaoCards " placeholder="Descreva este campo">
                                                </p>
                                                <br>
                                                <p class="submit">
                                                    <input class="button" type="submit" value="Salvar">
                                                </p>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                            </div>
                                        </div>
                                        <a href="#novoCard" class="btn red modal-trigger">Editar</a>
                                        <div class="modal modal-fixed-footer" id="novoCard">
                                            <div class="modal-content">
                                                <h3>Novo card</h3>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSection" />                
                                                </p>
                                                <br>
                                                <p class="nome">
                                                    <input type="text" id="nomeid" placeholder="Título do card" required="required" name="tituloCards" />                
                                                </p>
                                                <br>
                                                <p>
                                                    <input type="text" name="descricaoCards " placeholder="Descreva este campo">
                                                </p>
                                                <br>
                                                <p class="submit">
                                                    <input class="button" type="submit" value="Salvar">
                                                </p>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
=======
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
                        <p>Exemplo do card:</p>
                        <br>
                        <div class="col s12 m4">
                            <div class="card white-1">
                                <div class="card-content black-text">
                                <span class="card-title">Card Title</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
>>>>>>> 9e177e1d64d6e63e56952cb29553247bb02c188b
                                </div>
                            </div>
                        </div>

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