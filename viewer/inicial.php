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
                <div class = "col m12">
                    <h4>Edição da Página Inicial</h4>
                </div>
            <!-- Inserção de dados no banco para o campo Sobre, na página inicial do site -->
                
                <div class="col m12">
                    <hr>
                    <h5>Carrousel</h5>
                    <?php
                        include ("conexao1.php");
                        $controle_ativo = 2;
                        $result_carousel = "SELECT * FROM arquivo ORDER BY id ASC";
                        $resultado_carousel = mysqli_query($conn, $result_carousel);
                        while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
                            if($controle_ativo == 2){ ?>
                                <div class="carousel carousel-slider">
                                    <a class="carousel-item"><img id="img-carrossel" class="img-responsive" src="foto/<?php echo $row_carousel['nome_imagem'] ?>"></a>
                                    <a class="carousel-item"><img id="img-carrossel" class="img-responsive" src="foto/<?php echo $row_carousel['nome_imagem'] ?>"></a>
                                    <a class="carousel-item"><img id="img-carrossel" class="img-responsive" src="foto/<?php echo $row_carousel['nome_imagem'] ?>"></a>
                                </div>

                                <?php
                                    $controle_ativo = 1;
                                ?>

                                <?php
                            }
                        }
                    ?>

                    <br>

                    <!-- Inserção de imagens do carrousel. -->
                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <div class="col m2">
                            <a href="#novoImagem" class="btn red modal-trigger">Nova Imagem</a>
                        </div>
                        <div class="modal modal-fixed-footer" id="novoImagem">
                            <div class="modal-content">
                                <h3>Nova imagem</h3>
                                <br>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Escolher arquivo</span>
                                            <input type="file" name="arquivo">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                        <br>
                                        <p class="submit">
                                            <input class="button" type="submit" value="Cadastrar">
                                        </p>
                                    </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                            </div>
                       </div>
                    </form>

                    <!-- Tabela com imagens do carrousel. -->
                    <form method="POST" action="deletar.php" enctype="multipart/form-data">
                        <div class="col m5">
                            <a href="#gerenciar" class="btn red modal-trigger">Gerenciar Carrossel</a>
                        </div>
                        <div class="modal modal-fixed-footer" id="gerenciar">
                            <div class="modal-content">
                                <h3>Gerenciar carrossel</h3>
                                <br>
                                <?php   ob_get_contents();
                                        include ("conexao1.php");
                                        $consulta = "SELECT * FROM arquivo LIMIT 10";
                                        $con = $mysqli->query($consulta) or die($mysqli->error);
                                        ?>

                                        
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID Imagem</th>
                                            <th>Nome</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php while($dados = $con->fetch_array()) { ?>
                                            <tr>
                                                <td><?php echo $dados["id"];?></td>
                                                <td><?php echo $dados["nome_imagem"];?></td>
                                                <td>

                                                <div class="submit">
                                                    <input type="submit" class="btn red" name="btn-delete" value="Excluir">
                                                </div>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                            </div>
                       </div>
                    </form>
                </div>
                    <br>
                <div class="col m12">
                    <?php
                        if(isset($_SESSION['alertSobre'])){
                        echo $_SESSION['alertSobre'];
                        unset($_SESSION['alertSobre']);
                        }
                    ?>
                    
                    <hr>
                        <h5>Campo Sobre</h5>
                        <br>
                        <?php 
                        ob_get_contents();
                        include ("conexao1.php");
                        $consulta = "SELECT * FROM sobreinicial LIMIT 1";
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
                                $consulta = "SELECT * FROM sobreinicial WHERE id = '1'";
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
                    <hr>
                    <br>

                </div>
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

                    
                        <p>Exemplo dos cards:</p>
                        <section>
                            <div class="container">
                                <div class="row">
                                    <!-- Cria título para a seção -->
                                    <div class="col s12">
                                    <?php 
                                        ob_get_contents();
                                        include ("conexao1.php");
                                        $consulta = "SELECT * FROM sessao WHERE id = '1'";
                                        $con = $mysqli->query($consulta) or die($mysqli->error);
                                        ?>

                                        <?php while($dados = $con->fetch_array()) { ?>
                                        <h2 id="h2"><?php echo $dados["tituloSessao"] ?></h2>
                                    <?php } ?>

                                        
                                        <form method="POST" action="insereSessao.php">
                                            <div class="col l4">
                                                <a href="#newTitle" class="btn red modal-trigger">Novo</a>
                                            </div>
                                            <div class="modal modal-fixed-footer" id="newTitle">
                                                <div class="modal-content">
                                                    <h3>Novo campo</h3>
                                                    <p class="nome">
                                                        <input type="text" id="nomeid" placeholder="Título da sessão" required="required" name="tituloSessao" />                
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
                                                //if(isset($_SESSION['alertSobre'])){
                                                //echo $_SESSION['alertSessao'];
                                                //unset($_SESSION['alertSessao']);
                                                //}
                                            ?>
                                        </form>
                                        

                                        <form method="POST" action="updateSessao.php">    
                                            <div class="col m4">
                                                <?php
                                                if(isset($_SESSION['alertEditTitulo'])){
                                                echo $_SESSION['alertEditTitulo'];
                                                unset($_SESSION['alertEditTitulo']);
                                                }
                                                ?>
                                                <a href="#editTitulo" class="btn red modal-trigger">Editar</a>
                                            </div>
                                            <div class="modal modal-fixed-footer" id="editTitulo">
                                                <div class="modal-content">
                                                    <h3>Editar título</h3>
                                                    <?php 
                                                    ob_get_contents();
                                                    include ("conexao1.php");
                                                    $consulta = "SELECT * FROM sessao WHERE id = '1'";
                                                    $con = $mysqli->query($consulta) or die($mysqli->error);
                                                    ?>


                                                    <?php while($dados = $con->fetch_array()) { ?>
                                                    <input type="hidden" name="id" value="<?php echo $dados["id"] ?>">
                                                    <div class="input-field col s12 nome">
                                                        <textarea id="textarea1" class="materialize-textarea" name="tituloSessao"><?php echo $dados["tituloSessao"]?></textarea>                
                                                    </div>
                                                    <br>
                                                    <p class="submit">
                                                        <input type="submit" class="button" name="btn-editarTitulo" value="Atualizar">
                                                    </p>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                    <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                                </div>
                                            </div>

                                                <?php } ?>

                                        </form>
                                    </div>

                                    <!-- Cria cards para a seção -->
                                    <div class="col s12 m4">
                                        <?php 
                                        ob_get_contents();
                                        include ("conexao1.php");
                                        $consulta = "SELECT * FROM cardInicial WHERE id = '1'";
                                        $con = $mysqli->query($consulta) or die($mysqli->error);
                                        ?>

                                        <?php while($dados = $con->fetch_array()) { ?>
                                        <div class="card white-1">
                                            <div class="card-content black-text">
                                                <span class="card-title"><?php echo $dados["cardTitulo"] ?></span>
                                                <p><?php echo $dados["cardDescricao"] ?></p>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        
                                        <!--
                                        <form method="POST" action="insereCard.php">
                                            <?//php
                                            //if(isset($_SESSION['alertCard'])){
                                            //echo $_SESSION['alertCard'];
                                            //unset($_SESSION['alertCard']);
                                            //}
                                            ?>
                                            <div class="col m4">
                                                <a href="#novoCard" class="btn red modal-trigger">Novo</a>
                                            </div>
                                            <div class="modal modal-fixed-footer" id="novoCard">
                                                <div class="modal-content">
                                                    <h3>Novo campo</h3>
                                                    <p class="nome">
                                                        <input type="text" id="nomeid" placeholder="Título do card" required="required" name="cardTitulo" />                
                                                    </p>
                                                    <br>
                                                    <p>
                                                        <input type="text" name="cardDescricao" placeholder="Descreva este campo">
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
                                        <form method="POST" action="updateSessao.php">    
                                            <div class="col m4">
                                                <a href="#editCard1" class="btn red modal-trigger">Editar</a>
                                            </div>
                                            <div class="modal modal-fixed-footer" id="editCard1">
                                                <div class="modal-content">
                                                    <h3>Editar card</h3>
                                                    <?php 
                                                    ob_get_contents();
                                                    include ("conexao1.php");
                                                    $consulta = "SELECT * FROM cardInicial WHERE id = '1'";
                                                    $con = $mysqli->query($consulta) or die($mysqli->error);
                                                    ?>


                                                    <?php while($dados = $con->fetch_array()) { ?>
                                                    <input type="hidden" name="id" value="<?php echo $dados["id"] ?>">
                                                    <div class="input-field col s12 nome">
                                                        <textarea id="textarea1" class="materialize-textarea" name="cardTitulo"><?php echo $dados["cardTitulo"]?></textarea>                
                                                    </div>
                                                    <br>
                                                    <h4>Descrição</h4>
                                                    <div class="input-field col s12">
                                                        <textarea id="textarea1" class="materialize-textarea" name="cardDescricao"><?php echo $dados["cardDescricao"] ?></textarea>
                                                    </div>
                                                    <br>
                                                    <p class="submit">
                                                        <input type="submit" class="button" name="btn-editar1" value="Atualizar">
                                                    </p>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                    <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                                </div>
                                            </div>

                                                <?php } ?>
                        
                                                <?php
                                                if(isset($_SESSION['alertEditCard1'])){
                                                echo $_SESSION['alertEditCard1'];
                                                unset($_SESSION['alertEditCard1']);
                                                }
                                                ?>
                                        </form>
                                    </div>

                                    <div class="col s12 m4">
                                        <?php 
                                            ob_get_contents();
                                            include ("conexao1.php");
                                            $consulta = "SELECT * FROM cardInicial WHERE id = '2'";
                                            $con = $mysqli->query($consulta) or die($mysqli->error);
                                            ?>

                                            <?php while($dados = $con->fetch_array()) { ?>
                                            <div class="card white-1">
                                                <div class="card-content black-text">
                                                    <span class="card-title"><?php echo $dados["cardTitulo"] ?></span>
                                                    <p><?php echo $dados["cardDescricao"] ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>

                                        <form method="POST" action="updateSessao.php">    
                                            <div class="col m4">
                                                <a href="#editCard2" class="btn red modal-trigger">Editar</a>
                                            </div>
                                            <div class="modal modal-fixed-footer" id="editCard2">
                                                <div class="modal-content">
                                                    <h3>Editar card</h3>
                                                    <?php 
                                                    ob_get_contents();
                                                    include ("conexao1.php");
                                                    $consulta = "SELECT * FROM cardInicial WHERE id = '2'";
                                                    $con = $mysqli->query($consulta) or die($mysqli->error);
                                                    ?>


                                                    <?php while($dados = $con->fetch_array()) { ?>
                                                    <input type="hidden" name="id" value="<?php echo $dados["id"] ?>">
                                                    <div class="input-field col s12 nome">
                                                        <textarea id="textarea1" class="materialize-textarea" name="cardTitulo"><?php echo $dados["cardTitulo"]?></textarea>                
                                                    </div>
                                                    <br>
                                                    <h4>Descrição</h4>
                                                    <div class="input-field col s12">
                                                        <textarea id="textarea1" class="materialize-textarea" name="cardDescricao"><?php echo $dados["cardDescricao"] ?></textarea>
                                                    </div>
                                                    <br>
                                                    <p class="submit">
                                                        <input type="submit" class="button" name="btn-editar2" value="Atualizar">
                                                    </p>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                    <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                                </div>
                                            </div>

                                                <?php } ?>
                        
                                                <?php
                                                if(isset($_SESSION['alertEditCard2'])){
                                                echo $_SESSION['alertEditCard2'];
                                                unset($_SESSION['alertEditCard2']);
                                                }
                                                ?>
                                        </form>
                                    </div>
                                    <div class="col s12 m4">
                                        <?php 
                                            ob_get_contents();
                                            include ("conexao1.php");
                                            $consulta = "SELECT * FROM cardInicial WHERE id = '3'";
                                            $con = $mysqli->query($consulta) or die($mysqli->error);
                                            ?>

                                            <?php while($dados = $con->fetch_array()) { ?>
                                            <div class="card white-1">
                                                <div class="card-content black-text">
                                                    <span class="card-title"><?php echo $dados["cardTitulo"] ?></span>
                                                    <p><?php echo $dados["cardDescricao"] ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>

                                        <form method="POST" action="updateSessao.php">    
                                            <div class="col m4">
                                                <a href="#editCard3" class="btn red modal-trigger">Editar</a>
                                            </div>
                                            <div class="modal modal-fixed-footer" id="editCard3">
                                                <div class="modal-content">
                                                    <h3>Editar card</h3>
                                                    <?php 
                                                    ob_get_contents();
                                                    include ("conexao1.php");
                                                    $consulta = "SELECT * FROM cardInicial WHERE id = '3'";
                                                    $con = $mysqli->query($consulta) or die($mysqli->error);
                                                    ?>


                                                    <?php while($dados = $con->fetch_array()) { ?>
                                                    <input type="hidden" name="id" value="<?php echo $dados["id"] ?>">
                                                    <div class="input-field col s12 nome">
                                                        <textarea id="textarea1" class="materialize-textarea" name="cardTitulo"><?php echo $dados["cardTitulo"]?></textarea>                
                                                    </div>
                                                    <br>
                                                    <h4>Descrição</h4>
                                                    <div class="input-field col s12">
                                                        <textarea id="textarea1" class="materialize-textarea" name="cardDescricao"><?php echo $dados["cardDescricao"] ?></textarea>
                                                    </div>
                                                    <br>
                                                    <p class="submit">
                                                        <input type="submit" class="button" name="btn-editar3" value="Atualizar">
                                                    </p>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                    <a href="#" class="modal-close waves-red btn-flat"><i class="large material-icons">cancel</i></a>
                                                </div>
                                            </div>

                                                <?php } ?>
                        
                                                <?php
                                                if(isset($_SESSION['alertEditCard3'])){
                                                echo $_SESSION['alertEditCard3'];
                                                unset($_SESSION['alertEditCard3']);
                                                }
                                                ?>
                                        </form>
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

        <script>
        $(document).ready(function(){
            $(document).ready(function(){
            $('.carousel').carousel({
                padding: 5,
                indicators: true,
                fullWidth: true
            });
            autoplay();
            function autoplay(){
                $('.carousel').carousel('next');
                setTimeout(autoplay, 5000);
            }
            });
            
            $('.next').click(function(){
            $('.carousel').carousel('next');
            });

            $('.preview').click(function(){
            $('.carousel').carousel('prev');
            });
        });
        </script>
    </body>
</html>