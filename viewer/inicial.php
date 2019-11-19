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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
            <hr>
            <!-- Inserção de dados no banco para o campo Sobre, na página inicial do site -->
                <div class = "col l12">
                    <h5>Edição da Página Inicial</h5>
                    <br>
                    <?php
                        if(isset($_SESSION['alertSobre'])){
                        echo $_SESSION['alertSobre'];
                        unset($_SESSION['alertSobre']);
                        }
                    ?>

                    
                        <p>Campo Sobre:</p>
                        <br>
                        <?php 
                        ob_get_contents();
                        include ("conexao1.php");
                        $consulta = "SELECT * FROM sobreInicial LIMIT 1";
                        $con = $mysqli->query($consulta) or die($mysqli->error);
                        ?>

                        <?php while($dados = $con->fetch_array()) { ?>
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row valign-wrapper">
                                <div class="col s2">
                                    <img src="images/woman.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                </div>
                                <div class="col s10">
                                    <span class="black-text"><h2 id="h2"><?php echo $dados["sobreTitulo"];?></h2>
                                        <?php echo $dados["sobreDescricao"];?> 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                    <!--
                    <form method="POST" action="insercao.php">
                        <div class="col l1">
                            <a href="#novoSobre" class="btn red modal-trigger">Novo</a>
                        </div>
                        <div class="modal modal-fixed-footer" id="novoSobre">
                            <div class="modal-content">
                                <h3>Novo campo</h3>
                                <p class="nome">
                                    <input type="text" id="nomeid" placeholder="Título do campo" required="required" name="sobreTitulo" />                
                                </p>
                                <br>
                                <p>
                                    <input type="text" name="sobreDescricao" placeholder="Descreva este campo">
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
                    </form>
                    -->        
                    
                    <form method="POST" action="update.php">
                        <div class="col l1">
                            <a href="#editSobre" class="btn red modal-trigger">Editar</a>
                        </div>
                        <div class="modal modal-fixed-footer" id="editSobre">
                            <div class="modal-content">
                                <h4>Título</h4>

                                <?php 
                                ob_get_contents();
                                include ("conexao1.php");
                                $consulta = "SELECT * FROM sobreInicial WHERE id = '1'";
                                $con = $mysqli->query($consulta) or die($mysqli->error);
                                ?>

                                
                                
                                <?php while($dados = $con->fetch_array()) { ?>
                                <input type="hidden" name="id" value="<?php echo $dados["id"] ?>">
                                <div class="input-field col s12 nome">
                                    <textarea id="textarea1" class="materialize-textarea" name="sobreTitulo"><?php echo $dados["sobreTitulo"]?></textarea>                
                                </div>
                                <br>
                                <h4>Descrição</h4>
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea" name="sobreDescricao"><?php echo $dados["sobreDescricao"] ?></textarea>
                                </div>
                                <br>
                                <p class="submit">
                                    <input type="submit" class="button" name="btn-editar" value="Atualizar">
                                </p>
                            </div>
                            <br>
                        
                            <div class="modal-footer">
                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                            </div>
                        </div>
                        <br>
                                <?php } ?>
                        
                                <?php
                                if(isset($_SESSION['alertEditSobre'])){
                                echo $_SESSION['alertEditSobre'];
                                unset($_SESSION['alertEditSobre']);
                                }
                                ?>
                    </form>
                    <br>
                    <br>

                </div>

                <!-- Inserção de dados no banco para os cards, na página inicial do site -->
                <div class = "col-12">
                    <h5>Sessão de cards</h5>
                    <br>
                    <?php
                        if(isset($_SESSION['alertSobre'])){
                        echo $_SESSION['alertSobre'];
                        unset($_SESSION['alertSobre']);
                        }
                    ?>

                    <form method="POST" action="insercao.php">
                        <p>Exemplo dos cards:</p>
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col s12">
                                        <h2 id="h2">O que fazemos?</h2>
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
                                </div>
                            </div>
                        </section>
                    </form>   
                    <br>
                    <hr>
                    <br>
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
        <script></script>
        <script src="../static/js/bootstrap-table-pt-BR.min.js"></script>
        <script src="../static/js/init.js"></script>
        <script src="../static/js/categoria.js"></script>
        <script src="../static/js/index.js"></script>
        <script>
            $(document).ready(function(){
                $('.modal').modal();
            });
        </script>
    </body>
</html>