<?php
session_start();
include_once("conexao1.php");

//Processamento de dados dos projetos inseridos.
$nomeProjeto = filter_input(INPUT_POST, 'nomeProjeto', FILTER_SANITIZE_STRING);

//echo "Título: $titulo <br>";
//echo "Descrição: $descricao <br>";

$result_usuario = "INSERT INTO projetos (nomeProjeto, created) VALUES ('$nomeProjeto', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style ='color:green;'>Projeto cadastrado com sucesso</p>";
    header("Location:projetos.php");
}else{
    $_SESSION['msg'] = "<p style ='color:red;'>Projeto não foi cadastrado com sucesso</p>";
    header("Location: projetos.php");
}

?>